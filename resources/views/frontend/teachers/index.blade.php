@extends('layouts.frontend')
@section('content')

<body class="body-teachers">

    <div class="wrapper">

        <div class="logo">
            <img src="/images/logo.png" alt="">
        </div>

        @foreach($teachers as $key => $teacher)
            <div class="teachers-item" data-entry-id="{{ $teacher->id }}">
                <a href="{{ url('front/teachers', $teacher->id) }}">
                    <div class="teachers-item-image" style="background: url({{ $teacher->tch_pic->getUrl('') }}) center top; background-size: cover;">
                    </div>
                    <h2>{{ $teacher->tch_name ?? '' }}</h2>
                    <p>{{ $teacher->tch_spec ?? '' }}</p>
                </a>
            </div>
        @endforeach

        {{ $teachers->links() }}

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

        <a href="/" class="backbutton">МЕНЮ</a>

    </div>



@endsection
