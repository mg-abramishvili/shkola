<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Photoalbum;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class FrontPhotoalbumsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $photoalbums = Photoalbum::orderBy('id', 'desc')->simplePaginate(7);

        return view('frontend.photoalbums.index', compact('photoalbums'));
    }

    public function show(Photoalbum $photoalbum)
    {
        return view('frontend.photoalbums.show', compact('photoalbum'));
    }
}
