<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMarshrutesFloorRequest;
use App\Http\Requests\StoreMarshrutesFloorRequest;
use App\Http\Requests\UpdateMarshrutesFloorRequest;
use App\MarshrutesFloor;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MarshrutesFloorsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('marshrutes_floor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesFloors = MarshrutesFloor::all();

        return view('admin.marshrutesFloors.index', compact('marshrutesFloors'));
    }

    public function create()
    {
        abort_if(Gate::denies('marshrutes_floor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.marshrutesFloors.create');
    }

    public function store(StoreMarshrutesFloorRequest $request)
    {
        $marshrutesFloor = MarshrutesFloor::create($request->all());

        if ($request->input('marshrutesfloor_image', false)) {
            $marshrutesFloor->addMedia(storage_path('tmp/uploads/' . $request->input('marshrutesfloor_image')))->toMediaCollection('marshrutesfloor_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $marshrutesFloor->id]);
        }

        return redirect()->route('admin.marshrutes-floors.index');
    }

    public function edit(MarshrutesFloor $marshrutesFloor)
    {
        abort_if(Gate::denies('marshrutes_floor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.marshrutesFloors.edit', compact('marshrutesFloor'));
    }

    public function update(UpdateMarshrutesFloorRequest $request, MarshrutesFloor $marshrutesFloor)
    {
        $marshrutesFloor->update($request->all());

        if ($request->input('marshrutesfloor_image', false)) {
            if (!$marshrutesFloor->marshrutesfloor_image || $request->input('marshrutesfloor_image') !== $marshrutesFloor->marshrutesfloor_image->file_name) {
                if ($marshrutesFloor->marshrutesfloor_image) {
                    $marshrutesFloor->marshrutesfloor_image->delete();
                }

                $marshrutesFloor->addMedia(storage_path('tmp/uploads/' . $request->input('marshrutesfloor_image')))->toMediaCollection('marshrutesfloor_image');
            }
        } elseif ($marshrutesFloor->marshrutesfloor_image) {
            $marshrutesFloor->marshrutesfloor_image->delete();
        }

        return redirect()->route('admin.marshrutes-floors.index');
    }

    public function show(MarshrutesFloor $marshrutesFloor)
    {
        abort_if(Gate::denies('marshrutes_floor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.marshrutesFloors.show', compact('marshrutesFloor'));
    }

    public function destroy(MarshrutesFloor $marshrutesFloor)
    {
        abort_if(Gate::denies('marshrutes_floor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesFloor->delete();

        return back();
    }

    public function massDestroy(MassDestroyMarshrutesFloorRequest $request)
    {
        MarshrutesFloor::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('marshrutes_floor_create') && Gate::denies('marshrutes_floor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new MarshrutesFloor();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
