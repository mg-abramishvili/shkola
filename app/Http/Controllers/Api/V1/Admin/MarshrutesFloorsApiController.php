<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreMarshrutesFloorRequest;
use App\Http\Requests\UpdateMarshrutesFloorRequest;
use App\Http\Resources\Admin\MarshrutesFloorResource;
use App\MarshrutesFloor;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MarshrutesFloorsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('marshrutes_floor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MarshrutesFloorResource(MarshrutesFloor::all());
    }

    public function store(StoreMarshrutesFloorRequest $request)
    {
        $marshrutesFloor = MarshrutesFloor::create($request->all());

        if ($request->input('marshrutesfloor_image', false)) {
            $marshrutesFloor->addMedia(storage_path('tmp/uploads/' . $request->input('marshrutesfloor_image')))->toMediaCollection('marshrutesfloor_image');
        }

        return (new MarshrutesFloorResource($marshrutesFloor))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(MarshrutesFloor $marshrutesFloor)
    {
        abort_if(Gate::denies('marshrutes_floor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MarshrutesFloorResource($marshrutesFloor);
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

        return (new MarshrutesFloorResource($marshrutesFloor))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(MarshrutesFloor $marshrutesFloor)
    {
        abort_if(Gate::denies('marshrutes_floor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesFloor->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
