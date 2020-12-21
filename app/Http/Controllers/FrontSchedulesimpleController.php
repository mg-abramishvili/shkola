<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Schedulesimple;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class FrontSchedulesimpleController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $schedulesimples = Schedulesimple::orderBy('id', 'desc')->simplePaginate(1000);
        $schedulefirst = Schedulesimple::first();

        return view('frontend.schedulesimples.index', compact('schedulesimples', 'schedulefirst'));
    }

    public function show(Schedulesimple $schedulesimple)
    {
        $schedulelist = Schedulesimple::orderBy('id', 'desc')->simplePaginate(1000);

        return view('frontend.schedulesimples.show', compact('schedulelist', 'schedulesimple'));
    }
}
