@extends('layouts.admin')
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
        }

        .map {
            width: 100%;
            height: 100%;
        }

        .map img {
            width: 100%;
            height: 100%;
            border: 5px solid red;
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



<div style="width:100%; overflow-x: scroll;">
        <div class="wrapper-map">
            <div class="map">
                <img id="imageToSwap" src="http://localhost{{ $marshrutesRoutesTwo->marshrutesroutes_floor->marshrutesfloor_image->getUrl() }}"/>
            </div>
            <svg class="map-path" viewbox="0 0 800 450">

            @empty(!$marshrutesRoutesTwo->x_01)
            <path class="key-anim01" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_01 }} {{ $marshrutesRoutesTwo->y_01 }}, undefined undefined"></path>
            <circle id="01" cx="{{ $marshrutesRoutesTwo->x_01 }}" cy="{{ $marshrutesRoutesTwo->y_01 }}" r="7" fill="#f33"></circle>
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
            <path class="key-anim06" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_06 }} {{ $marshrutesRoutesTwo->y_06 }}, {{ $marshrutesRoutesTwo->x_05 }} {{ $marshrutesRoutesTwo->y_05 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_06 }}" cy="{{ $marshrutesRoutesTwo->y_06 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_07)
            <path class="key-anim07" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_07 }} {{ $marshrutesRoutesTwo->y_07 }}, {{ $marshrutesRoutesTwo->x_06 }} {{ $marshrutesRoutesTwo->y_06 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_07 }}" cy="{{ $marshrutesRoutesTwo->y_07 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_08)
            <path class="key-anim08" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_08 }} {{ $marshrutesRoutesTwo->y_08 }}, {{ $marshrutesRoutesTwo->x_07 }} {{ $marshrutesRoutesTwo->y_07 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_08 }}" cy="{{ $marshrutesRoutesTwo->y_08 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_09)
            <path class="key-anim09" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_09 }} {{ $marshrutesRoutesTwo->y_09 }}, {{ $marshrutesRoutesTwo->x_08 }} {{ $marshrutesRoutesTwo->y_08 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_09 }}" cy="{{ $marshrutesRoutesTwo->y_09 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_10)
            <path class="key-anim10" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_10 }} {{ $marshrutesRoutesTwo->y_10 }}, {{ $marshrutesRoutesTwo->x_09 }} {{ $marshrutesRoutesTwo->y_09 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_10 }}" cy="{{ $marshrutesRoutesTwo->y_10 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_11)
            <path class="key-anim11" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_11 }} {{ $marshrutesRoutesTwo->y_11 }}, {{ $marshrutesRoutesTwo->x_10 }} {{ $marshrutesRoutesTwo->y_10 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_11 }}" cy="{{ $marshrutesRoutesTwo->y_11 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_12)
            <path class="key-anim12" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_12 }} {{ $marshrutesRoutesTwo->y_12 }}, {{ $marshrutesRoutesTwo->x_11 }} {{ $marshrutesRoutesTwo->y_11 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_12 }}" cy="{{ $marshrutesRoutesTwo->y_12 }}" r="7" fill="#f33"></circle>
            @endempty

            </svg>
        </div>
    </div>



    <div style="width:100%; overflow-x: scroll;">
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
            <path class="key-anim06" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_106 }} {{ $marshrutesRoutesTwo->y_106 }}, {{ $marshrutesRoutesTwo->x_105 }} {{ $marshrutesRoutesTwo->y_105 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_106 }}" cy="{{ $marshrutesRoutesTwo->y_106 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_107)
            <path class="key-anim07" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_107 }} {{ $marshrutesRoutesTwo->y_107 }}, {{ $marshrutesRoutesTwo->x_106 }} {{ $marshrutesRoutesTwo->y_106 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_107 }}" cy="{{ $marshrutesRoutesTwo->y_107 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_108)
            <path class="key-anim08" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_108 }} {{ $marshrutesRoutesTwo->y_108 }}, {{ $marshrutesRoutesTwo->x_107 }} {{ $marshrutesRoutesTwo->y_107 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_108 }}" cy="{{ $marshrutesRoutesTwo->y_108 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_108)
            <path class="key-anim08" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_108 }} {{ $marshrutesRoutesTwo->y_108 }}, {{ $marshrutesRoutesTwo->x_107 }} {{ $marshrutesRoutesTwo->y_107 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_108 }}" cy="{{ $marshrutesRoutesTwo->y_108 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_109)
            <path class="key-anim09" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_109 }} {{ $marshrutesRoutesTwo->y_109 }}, {{ $marshrutesRoutesTwo->x_108 }} {{ $marshrutesRoutesTwo->y_108 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_109 }}" cy="{{ $marshrutesRoutesTwo->y_109 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_110)
            <path class="key-anim10" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_110 }} {{ $marshrutesRoutesTwo->y_110 }}, {{ $marshrutesRoutesTwo->x_109 }} {{ $marshrutesRoutesTwo->y_109 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_110 }}" cy="{{ $marshrutesRoutesTwo->y_110 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_111)
            <path class="key-anim11" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_111 }} {{ $marshrutesRoutesTwo->y_111 }}, {{ $marshrutesRoutesTwo->x_110 }} {{ $marshrutesRoutesTwo->y_110 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_111 }}" cy="{{ $marshrutesRoutesTwo->y_111 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoutesTwo->x_112)
            <path class="key-anim12" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoutesTwo->x_112 }} {{ $marshrutesRoutesTwo->y_112 }}, {{ $marshrutesRoutesTwo->x_111 }} {{ $marshrutesRoutesTwo->y_111 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoutesTwo->x_112 }}" cy="{{ $marshrutesRoutesTwo->y_112 }}" r="7" fill="#f33"></circle>
            @endempty

            </svg>
        </div>
    </div>

    <a class="btn btn-secondary" href="{{ route('admin.marshrutes-routes-twos.index') }}" style="width: 150px; display: block; margin: 0 auto; margin-top: 40px; margin-bottom: 60px;">
        {{ trans('global.back_to_list') }}
    </a>

<div class="card" style="display:none;">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.marshrutesRoutesTwo.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.marshrutes-routes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.id') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.marshrutesRoutesTwos_title') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->marshrutesRoutesTwos_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.marshrutesRoutesTwos_floor') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->marshrutesRoutesTwos_floor->marshrutesfloor_title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_01') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_01 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_01') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_01 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_01') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_01 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_01') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_01 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_02') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_02 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_02') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_02 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_02') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_02 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_02') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_02 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_03') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_03 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_03') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_03 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_03') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_03 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_03') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_03 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_04') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_04 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_04') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_04 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_04') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_04 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_04') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_04 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_05') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_05 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_05') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_05 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_05') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_05 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_05') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_05 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_06') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_06 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_06') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_06 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_06') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_06 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_06') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_06 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_07') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_07 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_07') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_07 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_07') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_07 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_07') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_07 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_08') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_08 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_08') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_08 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_08') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_08 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_08') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_08 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_09') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_09 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_09') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_09 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_09') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_09 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_09') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_09 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_10') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_10') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_10') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_10') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_11') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_11') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_11') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_11') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_12') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_12') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_12') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_12') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_101') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_101 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_101') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_101 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_101') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_101 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_101') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_101 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_102') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_102 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_102') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_102 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_102') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_102 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_102') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_102 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_103') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_103 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_103') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_103 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_103') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_103 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_103') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_103 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_104') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_104 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_104') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_104 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_104') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_104 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_104') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_104 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_105') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_105 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_105') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_105 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_105') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_105 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_105') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_105 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_106') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_106 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_106') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_106 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_106') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_106 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_106') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_106 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_107') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_107 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_107') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_107 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_107') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_107 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_107') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_107 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_108') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_108 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_108') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_108 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_108') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_108 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_108') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_108 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_109') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_109 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_109') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_109 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_109') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_109 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_109') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_109 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_110') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_110 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_110') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_110 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_110') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_110 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_110') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_110 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_111') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_111 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_111') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_111 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_111') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_111 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_111') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_111 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.x_112') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->x_112 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.y_112') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->y_112 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_x_112') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_x_112 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.p_y_112') }}
                        </th>
                        <td>
                            {{ $marshrutesRoutesTwo->p_y_112 }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.marshrutes-routes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection