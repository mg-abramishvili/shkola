@extends('layouts.frontend')
@section('content')

<body class="body-news">

    <div class="wrapper">

    <div class="logo">
        <img src="/images/logo.png" alt="">
    </div>

    <div class="news-detail-title">
        <span>{{ $news->nw_date }}</span>
        <h1>{{ $news->nw_title }}</h1>
    </div>

    <div style="display:none;">
        @if($news->nw_pic)
            <a href="{{ $news->nw_pic->getUrl() }}" target="_blank" style="display: inline-block">
                <img src="{{ $news->nw_pic->getUrl('thumb') }}">
            </a>
        @endif
    </div>

    <div class="news-detail-text">
        {!! $news->nw_text !!}
    </div>

    <div style="display:none;">
        {{ $news->nw_phs->phs_title ?? '' }}
    </div>

    <a href="/" onclick="window.history.go(-1); return false;" class="backbutton">МЕНЮ</a>

@endsection
