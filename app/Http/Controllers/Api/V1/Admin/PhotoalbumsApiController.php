<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StorePhotoalbumRequest;
use App\Http\Requests\UpdatePhotoalbumRequest;
use App\Http\Resources\Admin\PhotoalbumResource;
use App\Photoalbum;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PhotoalbumsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('photoalbum_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PhotoalbumResource(Photoalbum::all());
    }

    public function store(StorePhotoalbumRequest $request)
    {
        $photoalbum = Photoalbum::create($request->all());

        if ($request->input('phs', false)) {
            $photoalbum->addMedia(storage_path('tmp/uploads/' . $request->input('phs')))->toMediaCollection('phs');
        }

        return (new PhotoalbumResource($photoalbum))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Photoalbum $photoalbum)
    {
        abort_if(Gate::denies('photoalbum_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PhotoalbumResource($photoalbum);
    }

    public function update(UpdatePhotoalbumRequest $request, Photoalbum $photoalbum)
    {
        $photoalbum->update($request->all());

        if ($request->input('phs', false)) {
            if (!$photoalbum->phs || $request->input('phs') !== $photoalbum->phs->file_name) {
                if ($photoalbum->phs) {
                    $photoalbum->phs->delete();
                }

                $photoalbum->addMedia(storage_path('tmp/uploads/' . $request->input('phs')))->toMediaCollection('phs');
            }
        } elseif ($photoalbum->phs) {
            $photoalbum->phs->delete();
        }

        return (new PhotoalbumResource($photoalbum))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Photoalbum $photoalbum)
    {
        abort_if(Gate::denies('photoalbum_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $photoalbum->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
