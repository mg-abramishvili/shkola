<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\News;
use App\Photoalbum;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class FrontNewsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $news = News::orderBy('nw_date', 'desc')->simplePaginate(7);

        return view('frontend.news.index', compact('news'));
    }

    public function show(News $news)
    {
        $news->load('nw_phs');

        return view('frontend.news.show', compact('news'));
    }
}
