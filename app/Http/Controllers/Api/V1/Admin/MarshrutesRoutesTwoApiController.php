<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMarshrutesRoutesTwoRequest;
use App\Http\Requests\UpdateMarshrutesRoutesTwoRequest;
use App\Http\Resources\Admin\MarshrutesRoutesTwoResource;
use App\MarshrutesRoutesTwo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MarshrutesRoutesTwoApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('marshrutes_routes_two_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MarshrutesRoutesTwoResource(MarshrutesRoutesTwo::with(['marshrutesroutes_floor', 'marshrutesroutes_floorsecond'])->get());
    }

    public function store(StoreMarshrutesRoutesTwoRequest $request)
    {
        $marshrutesRoutesTwo = MarshrutesRoutesTwo::create($request->all());

        return (new MarshrutesRoutesTwoResource($marshrutesRoutesTwo))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(MarshrutesRoutesTwo $marshrutesRoutesTwo)
    {
        abort_if(Gate::denies('marshrutes_routes_two_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MarshrutesRoutesTwoResource($marshrutesRoutesTwo->load(['marshrutesroutes_floor', 'marshrutesroutes_floorsecond']));
    }

    public function update(UpdateMarshrutesRoutesTwoRequest $request, MarshrutesRoutesTwo $marshrutesRoutesTwo)
    {
        $marshrutesRoutesTwo->update($request->all());

        return (new MarshrutesRoutesTwoResource($marshrutesRoutesTwo))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(MarshrutesRoutesTwo $marshrutesRoutesTwo)
    {
        abort_if(Gate::denies('marshrutes_routes_two_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesRoutesTwo->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
