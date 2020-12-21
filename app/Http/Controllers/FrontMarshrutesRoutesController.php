<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMarshrutesRouteRequest;
use App\Http\Requests\StoreMarshrutesRouteRequest;
use App\Http\Requests\UpdateMarshrutesRouteRequest;
use App\MarshrutesFloor;
use App\MarshrutesRoute;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FrontMarshrutesRoutesController extends Controller
{
    public function index()
    {
        $marshrutesRoutes = MarshrutesRoute::all();

        return view('frontend.marshrutesRoutes.index', compact('marshrutesRoutes'));
    }

    public function show(MarshrutesRoute $marshrutesRoute)
    {
        $marshrutesRoute->load('marshrutesroutes_floor', 'marshrutesroutes_floorsecond');

        $marshrutesRoutelist = MarshrutesRoute::orderBy('id', 'desc')->pluck('marshrutesroutes_title', 'id');

        return view('frontend.marshrutesRoutes.show', compact('marshrutesRoute', 'marshrutesRoutelist'));
    }

}
