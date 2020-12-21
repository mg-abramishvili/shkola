@extends('layouts.frontend')
@section('content')

<body class="body-teachers">

    <div class="wrapper">

        <div class="logo">
            <img src="/images/logo.png" alt="">
        </div>

        <div class="teacher-detail">
            <div class="teacher-detail-pic">
                @if($teacher->tch_pic)
                    <img src="{{ $teacher->tch_pic->getUrl('') }}">
                @endif
            </div>

            <div class="teacher-detail-name">
                <h1>{{ $teacher->tch_name }}</h1>
                <span>{{ $teacher->tch_spec }}</span>
            </div>

            <div class="teacher-detail-text">
                {!! $teacher->tch_text !!}
            </div>
        </div>

        <!--<ul class="teachers-cats">
            <li><a href="/front/teachers01">Директор</a></li>
            <li><a href="/front/teachers02">Административно-управленческий персонал</a></li>
            <li><a href="/front/teachers03">Психолого-логопедическая служба</a></li>
            <li><a href="/front/teachers04">Московский кадетский музыкальный корпус(мальчики) Коломенская набережная, дом 20</a></li>
            <li><a href="/front/teachers05">Московский кадетский музыкальный корпус(девочки) Судостроительная улица, дом 43, к.2</a></li>
            <li><a href="/front/teachers06">Школа разных возможностей. Нагатинская набережная, дом 56</a></li>
            <li><a href="/front/teachers07">Непоседы Нагатинская набережная, дом 58, корпус 3</a></li>
            <li><a href="/front/teachers08">Детство Нагатинская набережная, дом 46, корпус 1</a></li>
            <li><a href="/front/teachers09">Кнопочки Судостроительная улица, дом 30, корпус 1</a></li>
            <li><a href="/front/teachers10">Мозаика Коломенская улица, дом 27, корпус 2</a></li>
            <li><a href="/front/teachers11">Бригантина Корабельная улица, дом 11А</a></li>
        </ul>-->

        <a href="/" onclick="window.history.go(-1); return false;" class="backbutton">МЕНЮ</a>

    </div>

@endsection
