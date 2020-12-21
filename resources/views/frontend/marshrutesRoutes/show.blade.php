@extends('layouts.frontend')
@section('content')


<style>
        .key-anim01,
        .key-anim02,
        .key-anim03,
        .key-anim04,
        .key-anim05,
        .key-anim06,
        .key-anim07,
        .key-anim08,
        .key-anim09,
        .key-anim10,
        .key-anim11,
        .key-anim12,
        .key-anim13,
        .key-anim14,
        .key-anim15 {
            stroke-dasharray: 10;
            stroke-dashoffset: -2000;
            animation: Drawpath 20s linear infinite;
        }

        @keyframes Drawpath {
            from {
                stroke-dashoffset: -2000;
            }
            to {
                stroke-dashoffset: 0;
            }
        }
        
        .wrapper-map {
            width: 800px;
            height: 450px;
            overflow: hidden;
            position: relative;
            margin: 0 auto;
            transform: scale(1.4);
            transform-origin: 0 0;
            margin-bottom: 200px;
            margin-left: 0px;
            border: 5px solid red;
        }

        .map {
            width: 100%;
            height: 100%;
        }

        .map img {
            width: 100%;
            height: 100%;
            display: block;
            margin: 0 auto;
        }
        
        .map-path {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
        }
    </style>

<body class="body-events">

    <div class="wrapper">


        <div style="overflow-y:scroll;height: 1055px; margin-left: 650px; padding-top: 25px;">
        <p style="font-size: 20px; font-weight: bold; margin-bottom: 10px; display:block;">{{ $marshrutesRoute->marshrutesroutes_floor->marshrutesfloor_title ?? '' }}</p>
        
        <div class="wrapper-map">
            <div class="map">
                <img id="imageToSwap" src="http://localhost{{ $marshrutesRoute->marshrutesroutes_floor->marshrutesfloor_image->getUrl() }}"/>
            </div>
            <svg class="map-path" viewbox="0 0 800 450">

            @empty(!$marshrutesRoute->x_01)
            <path class="key-anim01" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_01 }} {{ $marshrutesRoute->y_01 }}, undefined undefined"></path>
            <circle id="01" cx="{{ $marshrutesRoute->x_01 }}" cy="{{ $marshrutesRoute->y_01 }}" r="7" fill="#f33"></circle>
            <text x="{{ $marshrutesRoute->x_01 }}" y="{{ $marshrutesRoute->y_01 }}" font-family="Verdana" font-size="20" fill="blue">
                <tspan dx="-60" dy="50" font-weight="bold">ВЫ ЗДЕСЬ</tspan>
            </text>
            @endempty

            @empty(!$marshrutesRoute->x_02)
            <path class="key-anim02" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_02 }} {{ $marshrutesRoute->y_02 }}, {{ $marshrutesRoute->x_01 }} {{ $marshrutesRoute->y_01 }}"></path>
            <circle id="02" cx="{{ $marshrutesRoute->x_02 }}" cy="{{ $marshrutesRoute->y_02 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_03)
            <path class="key-anim03" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_03 }} {{ $marshrutesRoute->y_03 }}, {{ $marshrutesRoute->x_02 }} {{ $marshrutesRoute->y_02 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_03 }}" cy="{{ $marshrutesRoute->y_03 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_04)
            <path class="key-anim04" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_04 }} {{ $marshrutesRoute->y_04 }}, {{ $marshrutesRoute->x_03 }} {{ $marshrutesRoute->y_03 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_04 }}" cy="{{ $marshrutesRoute->y_04 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_05)
            <path class="key-anim05" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_05 }} {{ $marshrutesRoute->y_05 }}, {{ $marshrutesRoute->x_04 }} {{ $marshrutesRoute->y_04 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_05 }}" cy="{{ $marshrutesRoute->y_05 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_06)
            <path class="key-anim06" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_06 }} {{ $marshrutesRoute->y_06 }}, {{ $marshrutesRoute->x_05 }} {{ $marshrutesRoute->y_05 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_06 }}" cy="{{ $marshrutesRoute->y_06 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_07)
            <path class="key-anim07" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_07 }} {{ $marshrutesRoute->y_07 }}, {{ $marshrutesRoute->x_06 }} {{ $marshrutesRoute->y_06 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_07 }}" cy="{{ $marshrutesRoute->y_07 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_08)
            <path class="key-anim08" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_08 }} {{ $marshrutesRoute->y_08 }}, {{ $marshrutesRoute->x_07 }} {{ $marshrutesRoute->y_07 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_08 }}" cy="{{ $marshrutesRoute->y_08 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_09)
            <path class="key-anim09" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_09 }} {{ $marshrutesRoute->y_09 }}, {{ $marshrutesRoute->x_08 }} {{ $marshrutesRoute->y_08 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_09 }}" cy="{{ $marshrutesRoute->y_09 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_10)
            <path class="key-anim10" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_10 }} {{ $marshrutesRoute->y_10 }}, {{ $marshrutesRoute->x_09 }} {{ $marshrutesRoute->y_09 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_10 }}" cy="{{ $marshrutesRoute->y_10 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_11)
            <path class="key-anim11" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_11 }} {{ $marshrutesRoute->y_11 }}, {{ $marshrutesRoute->x_10 }} {{ $marshrutesRoute->y_10 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_11 }}" cy="{{ $marshrutesRoute->y_11 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_12)
            <path class="key-anim12" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_12 }} {{ $marshrutesRoute->y_12 }}, {{ $marshrutesRoute->x_11 }} {{ $marshrutesRoute->y_11 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_12 }}" cy="{{ $marshrutesRoute->y_12 }}" r="7" fill="#f33"></circle>
            @endempty

            </svg>
        </div>



        <p style="font-size: 20px; font-weight: bold; margin-bottom: 10px; display:block;">{{ $marshrutesRoute->marshrutesroutes_floorsecond->marshrutesfloor_title ?? '' }}</p>
        <div class="wrapper-map">
            <div class="map">
                <img id="imageToSwap" src="http://localhost{{ $marshrutesRoute->marshrutesroutes_floorsecond->marshrutesfloor_image->getUrl() }}"/>
            </div>
            <svg class="map-path" viewbox="0 0 800 450">

            @empty(!$marshrutesRoute->x_101)
            <path class="key-anim01" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_101 }} {{ $marshrutesRoute->y_101 }}, undefined undefined"></path>
            <circle id="01" cx="{{ $marshrutesRoute->x_101 }}" cy="{{ $marshrutesRoute->y_101 }}" r="7" fill="#f33"></circle>
            <text x="{{ $marshrutesRoute->x_101 }}" y="{{ $marshrutesRoute->y_101 }}" font-family="Verdana" font-size="20" fill="blue">
                <tspan dx="-60" dy="50" font-weight="bold">ВЫ ЗДЕСЬ</tspan>
            </text>
            @endempty

            @empty(!$marshrutesRoute->x_102)
            <path class="key-anim02" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_102 }} {{ $marshrutesRoute->y_102 }}, {{ $marshrutesRoute->x_101 }} {{ $marshrutesRoute->y_101 }}"></path>
            <circle id="02" cx="{{ $marshrutesRoute->x_102 }}" cy="{{ $marshrutesRoute->y_102 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_103)
            <path class="key-anim03" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_103 }} {{ $marshrutesRoute->y_103 }}, {{ $marshrutesRoute->x_102 }} {{ $marshrutesRoute->y_102 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_103 }}" cy="{{ $marshrutesRoute->y_103 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_104)
            <path class="key-anim04" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_104 }} {{ $marshrutesRoute->y_104 }}, {{ $marshrutesRoute->x_103 }} {{ $marshrutesRoute->y_103 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_104 }}" cy="{{ $marshrutesRoute->y_104 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_105)
            <path class="key-anim05" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_105 }} {{ $marshrutesRoute->y_105 }}, {{ $marshrutesRoute->x_104 }} {{ $marshrutesRoute->y_104 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_105 }}" cy="{{ $marshrutesRoute->y_105 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_106)
            <path class="key-anim06" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_106 }} {{ $marshrutesRoute->y_106 }}, {{ $marshrutesRoute->x_105 }} {{ $marshrutesRoute->y_105 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_106 }}" cy="{{ $marshrutesRoute->y_106 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_107)
            <path class="key-anim07" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_107 }} {{ $marshrutesRoute->y_107 }}, {{ $marshrutesRoute->x_106 }} {{ $marshrutesRoute->y_106 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_107 }}" cy="{{ $marshrutesRoute->y_107 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_108)
            <path class="key-anim08" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_108 }} {{ $marshrutesRoute->y_108 }}, {{ $marshrutesRoute->x_107 }} {{ $marshrutesRoute->y_107 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_108 }}" cy="{{ $marshrutesRoute->y_108 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_109)
            <path class="key-anim09" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_109 }} {{ $marshrutesRoute->y_109 }}, {{ $marshrutesRoute->x_108 }} {{ $marshrutesRoute->y_108 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_109 }}" cy="{{ $marshrutesRoute->y_109 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_110)
            <path class="key-anim10" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_110 }} {{ $marshrutesRoute->y_110 }}, {{ $marshrutesRoute->x_109 }} {{ $marshrutesRoute->y_109 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_110 }}" cy="{{ $marshrutesRoute->y_110 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_111)
            <path class="key-anim11" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_111 }} {{ $marshrutesRoute->y_111 }}, {{ $marshrutesRoute->x_110 }} {{ $marshrutesRoute->y_110 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_111 }}" cy="{{ $marshrutesRoute->y_111 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_112)
            <path class="key-anim12" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_112 }} {{ $marshrutesRoute->y_112 }}, {{ $marshrutesRoute->x_111 }} {{ $marshrutesRoute->y_111 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_112 }}" cy="{{ $marshrutesRoute->y_112 }}" r="7" fill="#f33"></circle>
            @endempty

            </svg>
        </div>
        </div>


        <ul class="events-cats" style="width: 490px;">
            @foreach($marshrutesRoutelist as $id => $evnt)
                <li id="{{ $id }}"
                @if(str_contains(url()->current(), url('front/marshrutes-routes', $id)))
                    class="current"
                @endif
                >
                    <a href="{{ url('front/marshrutes-routes', $id) }}/#{{ $id }}">{{ $evnt }}</a>
                </li>
            @endforeach
        </ul>

    <a href="/" class="backbutton">МЕНЮ</a>

</div>



@endsection
@section('scripts')
@parent
<script>
    //$(document).ready(function(){
    //$(".map-path circle:last-child").append('<svg><text x="{{ $marshrutesRoute->x_01 }}" y="{{ $marshrutesRoute->y_01 }}" font-family="Verdana" font-size="20" fill="blue"><tspan dx="-60" dy="50" font-weight="bold">ВЫ ЗДЕСЬ</tspan></text></svg>');
    //});
</script>
@endsection