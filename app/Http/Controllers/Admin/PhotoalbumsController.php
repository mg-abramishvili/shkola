<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPhotoalbumRequest;
use App\Http\Requests\StorePhotoalbumRequest;
use App\Http\Requests\UpdatePhotoalbumRequest;
use App\Photoalbum;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class PhotoalbumsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('photoalbum_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $photoalbums = Photoalbum::all();

        return view('admin.photoalbums.index', compact('photoalbums'));
    }

    public function create()
    {
        abort_if(Gate::denies('photoalbum_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.photoalbums.create');
    }

    public function store(StorePhotoalbumRequest $request)
    {
        $photoalbum = Photoalbum::create($request->all());

        foreach ($request->input('phs', []) as $file) {
            $photoalbum->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('phs');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $photoalbum->id]);
        }

        return redirect()->route('admin.photoalbums.index');
    }

    public function edit(Photoalbum $photoalbum)
    {
        abort_if(Gate::denies('photoalbum_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.photoalbums.edit', compact('photoalbum'));
    }

    public function update(UpdatePhotoalbumRequest $request, Photoalbum $photoalbum)
    {
        $photoalbum->update($request->all());

        if (count($photoalbum->phs) > 0) {
            foreach ($photoalbum->phs as $media) {
                if (!in_array($media->file_name, $request->input('phs', []))) {
                    $media->delete();
                }
            }
        }

        $media = $photoalbum->phs->pluck('file_name')->toArray();

        foreach ($request->input('phs', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $photoalbum->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('phs');
            }
        }

        return redirect()->route('admin.photoalbums.index');
    }

    public function show(Photoalbum $photoalbum)
    {
        abort_if(Gate::denies('photoalbum_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.photoalbums.show', compact('photoalbum'));
    }

    public function destroy(Photoalbum $photoalbum)
    {
        abort_if(Gate::denies('photoalbum_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $photoalbum->delete();

        return back();
    }

    public function massDestroy(MassDestroyPhotoalbumRequest $request)
    {
        Photoalbum::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('photoalbum_create') && Gate::denies('photoalbum_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Photoalbum();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
