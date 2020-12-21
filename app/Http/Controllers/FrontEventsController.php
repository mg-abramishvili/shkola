<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class FrontEventsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $events = Event::orderBy('id', 'desc')->simplePaginate(1000);

        return view('frontend.events.index', compact('events'));
    }

    public function show(Event $event)
    {
        $eventslist = Event::orderBy('id', 'desc')->pluck('ev_title', 'id');

        return view('frontend.events.show', compact('eventslist', 'event'));
    }
}
