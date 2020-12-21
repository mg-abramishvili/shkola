@extends('layouts.frontend')
@section('content')

<body class="body-news">

    <div class="wrapper">

        {{ $news->links() }}

        <div class="logo">
            <img src="/images/logo.png" alt="">
        </div>

        @foreach($news as $key => $news)
            <div class="news-item" data-entry-id="{{ $news->id }}">
                <a href="{{ url('front/news', $news->id) }}">
                    <span>{{ $news->nw_date ?? '' }}</span>
                    <h2>{{ \Illuminate\Support\Str::limit($news->nw_title ?? '', 100, $end='...') }}</h2>
                </a>
            </div>
        @endforeach

        <a href="/" class="backbutton">МЕНЮ</a>

    </div>


@endsection

