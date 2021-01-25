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


        <div class="mr" style="overflow-y:scroll;height: 1055px; margin-left: 650px; padding-top: 25px;">
        <p style="font-size: 20px; font-weight: bold; margin-bottom: 10px; display:block;">{{ $marshrutesRoutesTwo->marshrutesroutes_floor->marshrutesfloor_title ?? '' }}</p>
        <div class="wrapper-map">
            <div class="map">
                <img id="imageToSwap" src="http://localhost{{ $marshrutesRoutesTwo->marshrutesroutes_floor->marshrutesfloor_image->getUrl() }}"/>
            </div>
            <svg class="map-path" viewbox="0 0 800 450">

            @empty(!$marshrutesRoutesTwo->x_01)
            <path class="key-anim01" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_01 }} {{ $marshrutesRoutesTwo->y_01 }}, undefined undefined"></path>
            <circle id="01" cx="{{ $marshrutesRoutesTwo->x_01 }}" cy="{{ $marshrutesRoutesTwo->y_01 }}" r="7" fill="#f33"></circle>
            <text x="{{ $marshrutesRoutesTwo->x_01 }}" y="{{ $marshrutesRoutesTwo->y_01 }}" font-family="Verdana" font-size="20" fill="blue">
                <tspan dx="-60" dy="50" font-weight="bold">ВЫ ЗДЕСЬ</tspan>
            </text>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_02)
            <path class="key-anim02" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_02 }} {{ $marshrutesRoutesTwo->y_02 }}, {{ $marshrutesRoutesTwo->x_01 }} {{ $marshrutesRoutesTwo->y_01 }}"></path>
            <circle id="02" cx="{{ $marshrutesRoutesTwo->x_02 }}" cy="{{ $marshrutesRoutesTwo->y_02 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_03)
            <path class="key-anim03" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_03 }} {{ $marshrutesRoutesTwo->y_03 }}, {{ $marshrutesRoutesTwo->x_02 }} {{ $marshrutesRoutesTwo->y_02 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_03 }}" cy="{{ $marshrutesRoutesTwo->y_03 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_04)
            <path class="key-anim04" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_04 }} {{ $marshrutesRoutesTwo->y_04 }}, {{ $marshrutesRoutesTwo->x_03 }} {{ $marshrutesRoutesTwo->y_03 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_04 }}" cy="{{ $marshrutesRoutesTwo->y_04 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_05)
            <path class="key-anim05" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_05 }} {{ $marshrutesRoutesTwo->y_05 }}, {{ $marshrutesRoutesTwo->x_04 }} {{ $marshrutesRoutesTwo->y_04 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_05 }}" cy="{{ $marshrutesRoutesTwo->y_05 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_06)
            <path class="key-anim05" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_06 }} {{ $marshrutesRoutesTwo->y_06 }}, {{ $marshrutesRoutesTwo->x_05 }} {{ $marshrutesRoutesTwo->y_05 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_06 }}" cy="{{ $marshrutesRoutesTwo->y_06 }}" r="7" fill="#f33"></circle>
            @endempty

            </svg>
        </div>



        <p style="font-size: 20px; font-weight: bold; margin-bottom: 10px; display:block;">{{ $marshrutesRoutesTwo->marshrutesroutes_floorsecond->marshrutesfloor_title ?? '' }}</p>
        <div class="wrapper-map">
            <div class="map">
                <img id="imageToSwap" src="http://localhost{{ $marshrutesRoutesTwo->marshrutesroutes_floorsecond->marshrutesfloor_image->getUrl() }}"/>
            </div>
            <svg class="map-path" viewbox="0 0 800 450">

            @empty(!$marshrutesRoutesTwo->x_101)
            <path class="key-anim01" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_101 }} {{ $marshrutesRoutesTwo->y_101 }}, undefined undefined"></path>
            <circle id="01" cx="{{ $marshrutesRoutesTwo->x_101 }}" cy="{{ $marshrutesRoutesTwo->y_101 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_102)
            <path class="key-anim02" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_102 }} {{ $marshrutesRoutesTwo->y_102 }}, {{ $marshrutesRoutesTwo->x_101 }} {{ $marshrutesRoutesTwo->y_101 }}"></path>
            <circle id="02" cx="{{ $marshrutesRoutesTwo->x_102 }}" cy="{{ $marshrutesRoutesTwo->y_102 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_103)
            <path class="key-anim03" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_103 }} {{ $marshrutesRoutesTwo->y_103 }}, {{ $marshrutesRoutesTwo->x_102 }} {{ $marshrutesRoutesTwo->y_102 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_103 }}" cy="{{ $marshrutesRoutesTwo->y_103 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_104)
            <path class="key-anim04" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_104 }} {{ $marshrutesRoutesTwo->y_104 }}, {{ $marshrutesRoutesTwo->x_103 }} {{ $marshrutesRoutesTwo->y_103 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_104 }}" cy="{{ $marshrutesRoutesTwo->y_104 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_105)
            <path class="key-anim05" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_105 }} {{ $marshrutesRoutesTwo->y_105 }}, {{ $marshrutesRoutesTwo->x_104 }} {{ $marshrutesRoutesTwo->y_104 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_105 }}" cy="{{ $marshrutesRoutesTwo->y_105 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_106)
            <path class="key-anim05" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_106 }} {{ $marshrutesRoutesTwo->y_106 }}, {{ $marshrutesRoutesTwo->x_105 }} {{ $marshrutesRoutesTwo->y_105 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_106 }}" cy="{{ $marshrutesRoutesTwo->y_106 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_107)
            <path class="key-anim05" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_107 }} {{ $marshrutesRoutesTwo->y_107 }}, {{ $marshrutesRoutesTwo->x_106 }} {{ $marshrutesRoutesTwo->y_106 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_107 }}" cy="{{ $marshrutesRoutesTwo->y_107 }}" r="7" fill="#f33"></circle>
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
                    <a href="{{ url('front/marshrutes-routes-twos', $id) }}/#{{ $id }}">{{ $evnt }}</a>
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
    //$(".map-path circle:last-child").append('<svg><text x="{{ $marshrutesRoutesTwo->x_01 }}" y="{{ $marshrutesRoutesTwo->y_01 }}" font-family="Verdana" font-size="20" fill="blue"><tspan dx="-60" dy="50" font-weight="bold">ВЫ ЗДЕСЬ</tspan></text></svg>');
    //});
</script>
@endsection