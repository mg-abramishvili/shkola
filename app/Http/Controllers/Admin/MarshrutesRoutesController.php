<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMarshrutesRouteRequest;
use App\Http\Requests\StoreMarshrutesRouteRequest;
use App\Http\Requests\UpdateMarshrutesRouteRequest;
use App\MarshrutesFloor;
use App\MarshrutesRoute;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MarshrutesRoutesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('marshrutes_route_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesRoutes = MarshrutesRoute::all();

        return view('admin.marshrutesRoutes.index', compact('marshrutesRoutes'));
    }

    public function create()
    {
        abort_if(Gate::denies('marshrutes_route_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesroutes_floors = MarshrutesFloor::all()->pluck('marshrutesfloor_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marshrutesroutes_floors2 = MarshrutesFloor::all();

        $marshrutesroutes_floorseconds = MarshrutesFloor::all()->pluck('marshrutesfloor_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marshrutesroutes_floorseconds2 = MarshrutesFloor::all();

        return view('admin.marshrutesRoutes.create', compact('marshrutesroutes_floors', 'marshrutesroutes_floorseconds', 'marshrutesroutes_floors2', 'marshrutesroutes_floorseconds2'));
    }

    public function store(StoreMarshrutesRouteRequest $request)
    {
        $marshrutesRoute = MarshrutesRoute::create($request->all());

        return redirect()->route('admin.marshrutes-routes.index');
    }

    public function edit(MarshrutesRoute $marshrutesRoute)
    {
        abort_if(Gate::denies('marshrutes_route_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesroutes_floors = MarshrutesFloor::all()->pluck('marshrutesfloor_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marshrutesroutes_floorseconds = MarshrutesFloor::all()->pluck('marshrutesfloor_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marshrutesRoute->load('marshrutesroutes_floor', 'marshrutesroutes_floorsecond');

        return view('admin.marshrutesRoutes.edit', compact('marshrutesroutes_floors', 'marshrutesroutes_floorseconds', 'marshrutesRoute'));
    }

    public function update(UpdateMarshrutesRouteRequest $request, MarshrutesRoute $marshrutesRoute)
    {
        $marshrutesRoute->update($request->all());

        return redirect()->route('admin.marshrutes-routes.index');
    }

    public function show(MarshrutesRoute $marshrutesRoute)
    {
        abort_if(Gate::denies('marshrutes_route_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesRoute->load('marshrutesroutes_floor', 'marshrutesroutes_floorsecond');

        return view('admin.marshrutesRoutes.show', compact('marshrutesRoute'));
    }

    public function destroy(MarshrutesRoute $marshrutesRoute)
    {
        abort_if(Gate::denies('marshrutes_route_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesRoute->delete();

        return back();
    }

    public function massDestroy(MassDestroyMarshrutesRouteRequest $request)
    {
        MarshrutesRoute::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
