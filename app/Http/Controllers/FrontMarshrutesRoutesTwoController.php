<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMarshrutesRoutesTwoRequest;
use App\Http\Requests\StoreMarshrutesRoutesTwoRequest;
use App\Http\Requests\UpdateMarshrutesRoutesTwoRequest;
use App\MarshrutesFloor;
use App\MarshrutesRoutesTwo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FrontMarshrutesRoutesTwoController extends Controller
{
    public function index()
    {
        $marshrutesRoutesTwos = MarshrutesRoutesTwo::all();

        return view('frontend.marshrutesRoutesTwos.index', compact('marshrutesRoutesTwos'));
    }

    public function show(MarshrutesRoutesTwo $marshrutesRoutesTwo)
    {
        $marshrutesRoutesTwo->load('marshrutesroutes_floor', 'marshrutesroutes_floorsecond');

        $marshrutesRoutelist = MarshrutesRoutesTwo::orderBy('id', 'desc')->pluck('marshrutesroutes_title', 'id');

        return view('frontend.marshrutesRoutesTwos.show', compact('marshrutesRoutesTwo', 'marshrutesRoutelist'));
    }
}
