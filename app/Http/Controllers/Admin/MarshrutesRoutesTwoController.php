<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMarshrutesRoutesTwoRequest;
use App\Http\Requests\StoreMarshrutesRoutesTwoRequest;
use App\Http\Requests\UpdateMarshrutesRoutesTwoRequest;
use App\MarshrutesFloor;
use App\MarshrutesRoutesTwo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MarshrutesRoutesTwoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('marshrutes_routes_two_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesRoutesTwos = MarshrutesRoutesTwo::all();

        return view('admin.marshrutesRoutesTwos.index', compact('marshrutesRoutesTwos'));
    }

    public function create()
    {
        abort_if(Gate::denies('marshrutes_routes_two_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesroutes_floors = MarshrutesFloor::all()->pluck('marshrutesfloor_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marshrutesroutes_floors2 = MarshrutesFloor::all();

        $marshrutesroutes_floorseconds = MarshrutesFloor::all()->pluck('marshrutesfloor_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marshrutesroutes_floorseconds2 = MarshrutesFloor::all();

        return view('admin.marshrutesRoutesTwos.create', compact('marshrutesroutes_floors', 'marshrutesroutes_floorseconds', 'marshrutesroutes_floors2', 'marshrutesroutes_floorseconds2'));
    }

    public function store(StoreMarshrutesRoutesTwoRequest $request)
    {
        $marshrutesRoutesTwo = MarshrutesRoutesTwo::create($request->all());

        return redirect()->route('admin.marshrutes-routes-twos.index');
    }

    public function edit(MarshrutesRoutesTwo $marshrutesRoutesTwo)
    {
        abort_if(Gate::denies('marshrutes_routes_two_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesroutes_floors = MarshrutesFloor::all()->pluck('marshrutesfloor_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marshrutesroutes_floorseconds = MarshrutesFloor::all()->pluck('marshrutesfloor_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marshrutesRoutesTwo->load('marshrutesroutes_floor', 'marshrutesroutes_floorsecond');

        return view('admin.marshrutesRoutesTwos.edit', compact('marshrutesroutes_floors', 'marshrutesroutes_floorseconds', 'marshrutesRoutesTwo'));
    }

    public function update(UpdateMarshrutesRoutesTwoRequest $request, MarshrutesRoutesTwo $marshrutesRoutesTwo)
    {
        $marshrutesRoutesTwo->update($request->all());

        return redirect()->route('admin.marshrutes-routes-twos.index');
    }

    public function show(MarshrutesRoutesTwo $marshrutesRoutesTwo)
    {
        abort_if(Gate::denies('marshrutes_routes_two_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesRoutesTwo->load('marshrutesroutes_floor', 'marshrutesroutes_floorsecond');

        return view('admin.marshrutesRoutesTwos.show', compact('marshrutesRoutesTwo'));
    }

    public function destroy(MarshrutesRoutesTwo $marshrutesRoutesTwo)
    {
        abort_if(Gate::denies('marshrutes_routes_two_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marshrutesRoutesTwo->delete();

        return back();
    }

    public function massDestroy(MassDestroyMarshrutesRoutesTwoRequest $request)
    {
        MarshrutesRoutesTwo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
