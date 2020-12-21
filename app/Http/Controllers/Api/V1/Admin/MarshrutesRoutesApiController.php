<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMarshrutesRouteRequest;
use App\Http\Requests\UpdateMarshrutesRouteRequest;
use App\Http\Resources\Admin\MarshrutesRouteResource;
use App\MarshrutesRoute;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MarshrutesRoutesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('marshrutes_route_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MarshrutesRouteResource(MarshrutesRoute::with(['marshrutesroutes_floor', 'marshrutesroutes_floorsecond'])->get());
    }

    public function store(StoreMarshrutesRouteRequest $request)
    {
        $marshrutesRoute = MarshrutesRoute::create($request->all());

        return (new MarshrutesRouteResource($marshrutesRoute))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(MarshrutesRoute $marshrutesRoute)
    {
        abort_if(Gate::denies('marshrutes_route_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MarshrutesRouteResource($marshrutesRoute->load(['marshrutesroutes_floor', 'marshrutesroutes_floorsecond']));
    }

    public function update(UpdateMarshrutesRouteRequest $request, MarshrutesRoute $marshrutesRoute)
    {
        $marshrutesRoute->update($request->all());

        return (new MarshrutesRouteResource($marshrutesRoute))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(MarshrutesRoute $marshrutesRoute)
    {
        abort_if(Gate::denies('marshrutes_route_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesRoute->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
