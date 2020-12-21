@extends('layouts.frontend')
@section('content')

<body class="body-photoalbums">

    <div class="wrapper">

    <div class="logo">
        <img src="/images/logo.png" alt="">
    </div>

    @foreach($photoalbums as $key => $photoalbum)
        <div class="photoalbums-item" data-entry-id="{{ $photoalbum->id }}">
            <a href="{{ url('front/photoalbums', $photoalbum->id) }}">

                    @foreach($photoalbum->phs as $key => $media)
                        @if ($loop->first)
                            <div class="photoalbums-item-image" style="background: url({{ $media->getUrl() }}) center center; background-size: cover;"></div>
                        @endif
                    @endforeach

                <h2>{{ $photoalbum->phs_title ?? '' }}</h2>
            </a>
        </div>
    @endforeach

    {{ $photoalbums->links() }}

    <a href="/" class="backbutton">МЕНЮ</a>

    </div>


@endsection
