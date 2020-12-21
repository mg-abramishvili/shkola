<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySchedulesimpleRequest;
use App\Http\Requests\StoreSchedulesimpleRequest;
use App\Http\Requests\UpdateSchedulesimpleRequest;
use App\Schedulesimple;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SchedulesimpleController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('schedulesimple_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $schedulesimples = Schedulesimple::all();

        return view('admin.schedulesimples.index', compact('schedulesimples'));
    }

    public function create()
    {
        abort_if(Gate::denies('schedulesimple_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.schedulesimples.create');
    }

    public function store(StoreSchedulesimpleRequest $request)
    {
        $schedulesimple = Schedulesimple::create($request->all());

        if ($request->input('schsm_file', false)) {
            $schedulesimple->addMedia(storage_path('tmp/uploads/' . $request->input('schsm_file')))->toMediaCollection('schsm_file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $schedulesimple->id]);
        }

        return redirect()->route('admin.schedulesimples.index');
    }

    public function edit(Schedulesimple $schedulesimple)
    {
        abort_if(Gate::denies('schedulesimple_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.schedulesimples.edit', compact('schedulesimple'));
    }

    public function update(UpdateSchedulesimpleRequest $request, Schedulesimple $schedulesimple)
    {
        $schedulesimple->update($request->all());

        if ($request->input('schsm_file', false)) {
            if (!$schedulesimple->schsm_file || $request->input('schsm_file') !== $schedulesimple->schsm_file->file_name) {
                if ($schedulesimple->schsm_file) {
                    $schedulesimple->schsm_file->delete();
                }

                $schedulesimple->addMedia(storage_path('tmp/uploads/' . $request->input('schsm_file')))->toMediaCollection('schsm_file');
            }
        } elseif ($schedulesimple->schsm_file) {
            $schedulesimple->schsm_file->delete();
        }

        return redirect()->route('admin.schedulesimples.index');
    }

    public function show(Schedulesimple $schedulesimple)
    {
        abort_if(Gate::denies('schedulesimple_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.schedulesimples.show', compact('schedulesimple'));
    }

    public function destroy(Schedulesimple $schedulesimple)
    {
        abort_if(Gate::denies('schedulesimple_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $schedulesimple->delete();

        return back();
    }

    public function massDestroy(MassDestroySchedulesimpleRequest $request)
    {
        Schedulesimple::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('schedulesimple_create') && Gate::denies('schedulesimple_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Schedulesimple();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
