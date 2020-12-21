@extends('layouts.frontend')
@section('content')
<body class="body-index">

    <div class="wrapper">

        <div class="logo">
            <img src="/images/logo.png" alt="">
        </div>

        <a href="/front/news" class="novosti">
            <span>Новости и мероприятия</span>
        </a>

        <a href="/front/schedulesimples" class="schedule">
            <span>Расписание</span>
        </a>

        <a href="/front/events" class="events">
            <span>Достижения</span>
        </a>

        <a href="/front/photoalbums" class="photoalbums">
            <span>Фотоальбомы</span>
        </a>

        <a href="/front/teachers" class="teachers">
            <span>Учителя</span>
        </a>

        <a href="/front/marshrutes-routes" class="maps">
            <span>Карта <br>школы</span>
        </a>

        <div class="datetime">
            <?php function getDateRus () {
                $monthes = array(
                    1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
                    5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
                    9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря',
                );
                return ((int) date( 'd' ) . ' ' . $monthes[ (date( 'n' )) ]);
            } ?>
            <?php function getDayRus () {
                $days = array(
                    'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
                    'Четверг', 'Пятница', 'Суббота',
                );
                return $days[ (date( 'w' )) ];
            } ?>
            <div class="date-block-time" id="timetime"></div>
            <div class="date-block-date"><span><?php echo getDayRus(); ?>, </span><?php echo getDateRus(); ?></div>
        </div>

    </div>
@endsection
