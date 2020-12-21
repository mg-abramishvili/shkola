@extends('layouts.frontend')
@section('content')

<body class="body-events">

    <div class="wrapper">

        <div class="logo">
            <img src="/images/logo.png" alt="">
        </div>

        <div class="events-slider">
        @foreach($event->ev_pic as $key => $media)
            <div class="events-slider-item">
                <img data-flickity-lazyload="{{ $media->getUrl('') }}">
                <!--<div style="text-align: center;">{{ $event->ev_title }} <br>{!! $event->ev_text !!} <br><small>{{ $event->ev_date }}</small></div>-->
            </div>
        @endforeach
        </div>

        <div style="display:none;">
            {{ App\Event::EV_CAT_SELECT[$event->ev_cat] ?? '' }}
        </div>

        <ul class="events-cats">
            @foreach($eventslist as $id => $evnt)
                <li id="{{ $id }}"
                @if(str_contains(url()->current(), url('front/events', $id)))
                    class="current"
                @endif
                >
                    <a href="{{ url('front/events', $id) }}/#{{ $id }}">{{ $evnt }}</a>
                </li>
            @endforeach
        </ul>

        <a href="/" class="backbutton">МЕНЮ</a>

    </div>


@endsection
