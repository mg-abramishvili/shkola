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
                <img id="imageToSwap" src="{{ $marshrutesRoute->marshrutesroutes_floor->marshrutesfloor_image->getUrl() }}"/>
            </div>
            <svg class="map-path" viewbox="0 0 800 450">

            @empty(!$marshrutesRoute->x_01)
            <path class="key-anim01" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_01 }} {{ $marshrutesRoute->y_01 }}, undefined undefined"></path>
            <circle id="01" cx="{{ $marshrutesRoute->x_01 }}" cy="{{ $marshrutesRoute->y_01 }}" r="7" fill="#f33"></circle>
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
            <circle id="03" cx="{{ $marshrutesRoute->x_109 }}" cy="{{ $marshrutesRoute->y_09 }}" r="7" fill="#f33"></circle>
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
    </div>


    @if($marshrutesRoute->marshrutesroutes_floorsecond)
    <div style="width:100%; overflow-x: scroll;">
        <div class="wrapper-map">
            <div class="map">
                <img id="imageToSwap" src="http://localhost{{ $marshrutesRoute->marshrutesroutes_floorsecond->marshrutesfloor_image->getUrl() }}"/>
            </div>
            <svg class="map-path" viewbox="0 0 800 450">

            @empty(!$marshrutesRoute->x_101)
            <path class="key-anim01" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_101 }} {{ $marshrutesRoute->y_101 }}, undefined undefined"></path>
            <circle id="01" cx="{{ $marshrutesRoute->x_101 }}" cy="{{ $marshrutesRoute->y_101 }}" r="7" fill="#f33"></circle>
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
            <path class="key-anim05" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_106 }} {{ $marshrutesRoute->y_106 }}, {{ $marshrutesRoute->x_105 }} {{ $marshrutesRoute->y_105 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_106 }}" cy="{{ $marshrutesRoute->y_106 }}" r="7" fill="#f33"></circle>
            @endempty

            @empty(!$marshrutesRoute->x_107)
            <path class="key-anim05" fill="none" stroke-width="5px" stroke="rgba(200,10,10,0.5)" d="M{{ $marshrutesRoute->x_107 }} {{ $marshrutesRoute->y_107 }}, {{ $marshrutesRoute->x_106 }} {{ $marshrutesRoute->y_106 }}"></path>
            <circle id="03" cx="{{ $marshrutesRoute->x_107 }}" cy="{{ $marshrutesRoute->y_107 }}" r="7" fill="#f33"></circle>
            @endempty

            </svg>
        </div>
    </div>
    @endif

    <a class="btn btn-secondary" href="{{ route('admin.marshrutes-routes.index') }}" style="width: 150px; display: block; margin: 0 auto; margin-top: 40px; margin-bottom: 60px;">
        {{ trans('global.back_to_list') }}
    </a>

<div class="card" style="display:none;">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.marshrutesRoute.title') }}
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
                            {{ trans('cruds.marshrutesRoute.fields.id') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.marshrutesroutes_title') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->marshrutesroutes_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.marshrutesroutes_floor') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->marshrutesroutes_floor->marshrutesfloor_title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_01') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_01 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_01') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_01 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_01') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_01 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_01') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_01 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_02') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_02 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_02') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_02 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_02') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_02 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_02') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_02 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_03') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_03 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_03') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_03 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_03') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_03 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_03') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_03 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_04') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_04 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_04') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_04 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_04') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_04 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_04') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_04 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_05') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_05 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_05') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_05 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_05') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_05 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_05') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_05 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_06') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_06 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_06') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_06 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_06') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_06 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_06') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_06 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_07') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_07 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_07') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_07 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_07') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_07 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_07') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_07 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_08') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_08 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_08') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_08 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_08') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_08 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_08') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_08 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_09') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_09 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_09') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_09 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_09') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_09 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_09') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_09 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_10') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_10') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_10') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_10') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_11') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_11') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_11') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_11') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_11 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_12') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_12') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_12') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_12') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_12 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_101') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_101 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_101') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_101 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_101') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_101 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_101') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_101 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_102') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_102 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_102') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_102 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_102') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_102 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_102') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_102 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_103') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_103 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_103') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_103 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_103') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_103 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_103') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_103 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_104') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_104 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_104') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_104 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_104') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_104 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_104') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_104 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_105') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_105 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_105') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_105 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_105') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_105 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_105') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_105 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_106') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_106 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_106') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_106 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_106') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_106 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_106') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_106 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_107') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_107 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_107') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_107 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_107') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_107 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_107') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_107 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_108') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_108 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_108') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_108 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_108') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_108 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_108') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_108 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_109') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_109 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_109') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_109 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_109') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_109 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_109') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_109 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_110') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_110 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_110') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_110 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_110') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_110 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_110') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_110 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_111') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_111 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_111') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_111 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_111') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_111 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_111') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_111 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.x_112') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->x_112 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.y_112') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->y_112 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_x_112') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_x_112 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesRoute.fields.p_y_112') }}
                        </th>
                        <td>
                            {{ $marshrutesRoute->p_y_112 }}
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