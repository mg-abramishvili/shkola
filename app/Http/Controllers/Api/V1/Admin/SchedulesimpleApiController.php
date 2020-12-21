<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreSchedulesimpleRequest;
use App\Http\Requests\UpdateSchedulesimpleRequest;
use App\Http\Resources\Admin\SchedulesimpleResource;
use App\Schedulesimple;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SchedulesimpleApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('schedulesimple_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SchedulesimpleResource(Schedulesimple::all());
    }

    public function store(StoreSchedulesimpleRequest $request)
    {
        $schedulesimple = Schedulesimple::create($request->all());

        if ($request->input('schsm_file', false)) {
            $schedulesimple->addMedia(storage_path('tmp/uploads/' . $request->input('schsm_file')))->toMediaCollection('schsm_file');
        }

        return (new SchedulesimpleResource($schedulesimple))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Schedulesimple $schedulesimple)
    {
        abort_if(Gate::denies('schedulesimple_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SchedulesimpleResource($schedulesimple);
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

        return (new SchedulesimpleResource($schedulesimple))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Schedulesimple $schedulesimple)
    {
        abort_if(Gate::denies('schedulesimple_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $schedulesimple->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
