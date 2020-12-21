@extends('layouts.frontend')
@section('content')

<body class="body-photoalbums-detail">

    <div class="wrapper">

        <h1>{{ $photoalbum->phs_title }}</h1>

        <div class="photoalbums-detail-slider">
            @foreach($photoalbum->phs as $key => $media)
                <div class="photoalbums-detail-item">
                    <img data-flickity-lazyload="{{ $media->getUrl('') }}">
                </div>
            @endforeach
        </div>

        <a href="/" onclick="window.history.go(-1); return false;" class="backbutton">МЕНЮ</a>

    </div>

@endsection
