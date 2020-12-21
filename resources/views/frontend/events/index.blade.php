@extends('layouts.frontend')
@section('content')

<body class="body-events">

    <div class="wrapper">

        {{ $events->links() }}

        <div class="logo">
            <img src="/images/logo.png" alt="">
        </div>

        <div class="events-main-slider">
            @foreach($events as $key => $event)
                @foreach($event->ev_pic as $key => $media)
                    <div class="events-main-slider-item">
                    <img data-flickity-lazyload="{{ $media->getUrl('') }}">
                    </div>
                @endforeach
            @endforeach
        </div>

        <ul class="events-cats">
            @foreach($events as $key => $event)
                <li><a href="{{ url('front/events', $event->id) }}">{{ $event->ev_title ?? '' }} <br><small>{{ $event->ev_date ?? '' }}</small></a>

                @foreach($event->ev_pic as $key => $media)
                    <!--<a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                        <img src="{{ $media->getUrl('thumb') }}">
                    </a>-->
                @endforeach

                <div style="display:none;">
                    {{ App\Event::EV_CAT_SELECT[$event->ev_cat] ?? '' }}
                </div>
                </li>
            @endforeach
        </ul>

        <a href="/" class="backbutton">МЕНЮ</a>

    </div>


@endsection
