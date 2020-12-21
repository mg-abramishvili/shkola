@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.marshrutesRoute.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.marshrutes-routes.update", [$marshrutesRoute->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="marshrutesroutes_title">{{ trans('cruds.marshrutesRoute.fields.marshrutesroutes_title') }}</label>
                <input class="form-control {{ $errors->has('marshrutesroutes_title') ? 'is-invalid' : '' }}" type="text" name="marshrutesroutes_title" id="marshrutesroutes_title" value="{{ old('marshrutesroutes_title', $marshrutesRoute->marshrutesroutes_title) }}" required>
                @if($errors->has('marshrutesroutes_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marshrutesroutes_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.marshrutesroutes_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="marshrutesroutes_floor_id">{{ trans('cruds.marshrutesRoute.fields.marshrutesroutes_floor') }}</label>
                <select class="form-control select2 {{ $errors->has('marshrutesroutes_floor') ? 'is-invalid' : '' }}" name="marshrutesroutes_floor_id" id="marshrutesroutes_floor_id" required>
                    @foreach($marshrutesroutes_floors as $id => $marshrutesroutes_floor)
                        <option value="{{ $id }}" {{ (old('marshrutesroutes_floor_id') ? old('marshrutesroutes_floor_id') : $marshrutesRoute->marshrutesroutes_floor->id ?? '') == $id ? 'selected' : '' }}>{{ $marshrutesroutes_floor }}</option>
                    @endforeach
                </select>
                @if($errors->has('marshrutesroutes_floor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marshrutesroutes_floor') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.marshrutesroutes_floor_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="marshrutesroutes_floorsecond_id">{{ trans('cruds.marshrutesRoute.fields.marshrutesroutes_floorsecond') }}</label>
                <select class="form-control select2 {{ $errors->has('marshrutesroutes_floorsecond') ? 'is-invalid' : '' }}" name="marshrutesroutes_floorsecond_id" id="marshrutesroutes_floorsecond_id">
                    @foreach($marshrutesroutes_floorseconds as $id => $marshrutesroutes_floorsecond)
                        <option value="{{ $id }}" {{ (old('marshrutesroutes_floorsecond_id') ? old('marshrutesroutes_floorsecond_id') : $marshrutesRoute->marshrutesroutes_floorsecond->id ?? '') == $id ? 'selected' : '' }}>{{ $marshrutesroutes_floorsecond }}</option>
                    @endforeach
                </select>
                @if($errors->has('marshrutesroutes_floorsecond'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marshrutesroutes_floorsecond') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.marshrutesroutes_floorsecond_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_01">{{ trans('cruds.marshrutesRoute.fields.x_01') }}</label>
                <input class="form-control {{ $errors->has('x_01') ? 'is-invalid' : '' }}" type="text" name="x_01" id="x_01" value="{{ old('x_01', $marshrutesRoute->x_01) }}">
                @if($errors->has('x_01'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_01') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_01_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_01">{{ trans('cruds.marshrutesRoute.fields.y_01') }}</label>
                <input class="form-control {{ $errors->has('y_01') ? 'is-invalid' : '' }}" type="text" name="y_01" id="y_01" value="{{ old('y_01', $marshrutesRoute->y_01) }}">
                @if($errors->has('y_01'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_01') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_01_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_01">{{ trans('cruds.marshrutesRoute.fields.p_x_01') }}</label>
                <input class="form-control {{ $errors->has('p_x_01') ? 'is-invalid' : '' }}" type="text" name="p_x_01" id="p_x_01" value="{{ old('p_x_01', $marshrutesRoute->p_x_01) }}">
                @if($errors->has('p_x_01'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_01') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_01_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_01">{{ trans('cruds.marshrutesRoute.fields.p_y_01') }}</label>
                <input class="form-control {{ $errors->has('p_y_01') ? 'is-invalid' : '' }}" type="text" name="p_y_01" id="p_y_01" value="{{ old('p_y_01', $marshrutesRoute->p_y_01) }}">
                @if($errors->has('p_y_01'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_01') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_01_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_02">{{ trans('cruds.marshrutesRoute.fields.x_02') }}</label>
                <input class="form-control {{ $errors->has('x_02') ? 'is-invalid' : '' }}" type="text" name="x_02" id="x_02" value="{{ old('x_02', $marshrutesRoute->x_02) }}">
                @if($errors->has('x_02'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_02') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_02_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_02">{{ trans('cruds.marshrutesRoute.fields.y_02') }}</label>
                <input class="form-control {{ $errors->has('y_02') ? 'is-invalid' : '' }}" type="text" name="y_02" id="y_02" value="{{ old('y_02', $marshrutesRoute->y_02) }}">
                @if($errors->has('y_02'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_02') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_02_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_02">{{ trans('cruds.marshrutesRoute.fields.p_x_02') }}</label>
                <input class="form-control {{ $errors->has('p_x_02') ? 'is-invalid' : '' }}" type="text" name="p_x_02" id="p_x_02" value="{{ old('p_x_02', $marshrutesRoute->p_x_02) }}">
                @if($errors->has('p_x_02'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_02') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_02_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_02">{{ trans('cruds.marshrutesRoute.fields.p_y_02') }}</label>
                <input class="form-control {{ $errors->has('p_y_02') ? 'is-invalid' : '' }}" type="text" name="p_y_02" id="p_y_02" value="{{ old('p_y_02', $marshrutesRoute->p_y_02) }}">
                @if($errors->has('p_y_02'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_02') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_02_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_03">{{ trans('cruds.marshrutesRoute.fields.x_03') }}</label>
                <input class="form-control {{ $errors->has('x_03') ? 'is-invalid' : '' }}" type="text" name="x_03" id="x_03" value="{{ old('x_03', $marshrutesRoute->x_03) }}">
                @if($errors->has('x_03'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_03') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_03_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_03">{{ trans('cruds.marshrutesRoute.fields.y_03') }}</label>
                <input class="form-control {{ $errors->has('y_03') ? 'is-invalid' : '' }}" type="text" name="y_03" id="y_03" value="{{ old('y_03', $marshrutesRoute->y_03) }}">
                @if($errors->has('y_03'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_03') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_03_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_03">{{ trans('cruds.marshrutesRoute.fields.p_x_03') }}</label>
                <input class="form-control {{ $errors->has('p_x_03') ? 'is-invalid' : '' }}" type="text" name="p_x_03" id="p_x_03" value="{{ old('p_x_03', $marshrutesRoute->p_x_03) }}">
                @if($errors->has('p_x_03'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_03') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_03_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_03">{{ trans('cruds.marshrutesRoute.fields.p_y_03') }}</label>
                <input class="form-control {{ $errors->has('p_y_03') ? 'is-invalid' : '' }}" type="text" name="p_y_03" id="p_y_03" value="{{ old('p_y_03', $marshrutesRoute->p_y_03) }}">
                @if($errors->has('p_y_03'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_03') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_03_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_04">{{ trans('cruds.marshrutesRoute.fields.x_04') }}</label>
                <input class="form-control {{ $errors->has('x_04') ? 'is-invalid' : '' }}" type="text" name="x_04" id="x_04" value="{{ old('x_04', $marshrutesRoute->x_04) }}">
                @if($errors->has('x_04'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_04') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_04_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_04">{{ trans('cruds.marshrutesRoute.fields.y_04') }}</label>
                <input class="form-control {{ $errors->has('y_04') ? 'is-invalid' : '' }}" type="text" name="y_04" id="y_04" value="{{ old('y_04', $marshrutesRoute->y_04) }}">
                @if($errors->has('y_04'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_04') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_04_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_04">{{ trans('cruds.marshrutesRoute.fields.p_x_04') }}</label>
                <input class="form-control {{ $errors->has('p_x_04') ? 'is-invalid' : '' }}" type="text" name="p_x_04" id="p_x_04" value="{{ old('p_x_04', $marshrutesRoute->p_x_04) }}">
                @if($errors->has('p_x_04'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_04') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_04_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_04">{{ trans('cruds.marshrutesRoute.fields.p_y_04') }}</label>
                <input class="form-control {{ $errors->has('p_y_04') ? 'is-invalid' : '' }}" type="text" name="p_y_04" id="p_y_04" value="{{ old('p_y_04', $marshrutesRoute->p_y_04) }}">
                @if($errors->has('p_y_04'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_04') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_04_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_05">{{ trans('cruds.marshrutesRoute.fields.x_05') }}</label>
                <input class="form-control {{ $errors->has('x_05') ? 'is-invalid' : '' }}" type="text" name="x_05" id="x_05" value="{{ old('x_05', $marshrutesRoute->x_05) }}">
                @if($errors->has('x_05'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_05') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_05_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_05">{{ trans('cruds.marshrutesRoute.fields.y_05') }}</label>
                <input class="form-control {{ $errors->has('y_05') ? 'is-invalid' : '' }}" type="text" name="y_05" id="y_05" value="{{ old('y_05', $marshrutesRoute->y_05) }}">
                @if($errors->has('y_05'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_05') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_05_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_05">{{ trans('cruds.marshrutesRoute.fields.p_x_05') }}</label>
                <input class="form-control {{ $errors->has('p_x_05') ? 'is-invalid' : '' }}" type="text" name="p_x_05" id="p_x_05" value="{{ old('p_x_05', $marshrutesRoute->p_x_05) }}">
                @if($errors->has('p_x_05'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_05') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_05_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_05">{{ trans('cruds.marshrutesRoute.fields.p_y_05') }}</label>
                <input class="form-control {{ $errors->has('p_y_05') ? 'is-invalid' : '' }}" type="text" name="p_y_05" id="p_y_05" value="{{ old('p_y_05', $marshrutesRoute->p_y_05) }}">
                @if($errors->has('p_y_05'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_05') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_05_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_06">{{ trans('cruds.marshrutesRoute.fields.x_06') }}</label>
                <input class="form-control {{ $errors->has('x_06') ? 'is-invalid' : '' }}" type="text" name="x_06" id="x_06" value="{{ old('x_06', $marshrutesRoute->x_06) }}">
                @if($errors->has('x_06'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_06') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_06_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_06">{{ trans('cruds.marshrutesRoute.fields.y_06') }}</label>
                <input class="form-control {{ $errors->has('y_06') ? 'is-invalid' : '' }}" type="text" name="y_06" id="y_06" value="{{ old('y_06', $marshrutesRoute->y_06) }}">
                @if($errors->has('y_06'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_06') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_06_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_06">{{ trans('cruds.marshrutesRoute.fields.p_x_06') }}</label>
                <input class="form-control {{ $errors->has('p_x_06') ? 'is-invalid' : '' }}" type="text" name="p_x_06" id="p_x_06" value="{{ old('p_x_06', $marshrutesRoute->p_x_06) }}">
                @if($errors->has('p_x_06'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_06') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_06_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_06">{{ trans('cruds.marshrutesRoute.fields.p_y_06') }}</label>
                <input class="form-control {{ $errors->has('p_y_06') ? 'is-invalid' : '' }}" type="text" name="p_y_06" id="p_y_06" value="{{ old('p_y_06', $marshrutesRoute->p_y_06) }}">
                @if($errors->has('p_y_06'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_06') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_06_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_07">{{ trans('cruds.marshrutesRoute.fields.x_07') }}</label>
                <input class="form-control {{ $errors->has('x_07') ? 'is-invalid' : '' }}" type="text" name="x_07" id="x_07" value="{{ old('x_07', $marshrutesRoute->x_07) }}">
                @if($errors->has('x_07'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_07') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_07_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_07">{{ trans('cruds.marshrutesRoute.fields.y_07') }}</label>
                <input class="form-control {{ $errors->has('y_07') ? 'is-invalid' : '' }}" type="text" name="y_07" id="y_07" value="{{ old('y_07', $marshrutesRoute->y_07) }}">
                @if($errors->has('y_07'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_07') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_07_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_07">{{ trans('cruds.marshrutesRoute.fields.p_x_07') }}</label>
                <input class="form-control {{ $errors->has('p_x_07') ? 'is-invalid' : '' }}" type="text" name="p_x_07" id="p_x_07" value="{{ old('p_x_07', $marshrutesRoute->p_x_07) }}">
                @if($errors->has('p_x_07'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_07') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_07_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_07">{{ trans('cruds.marshrutesRoute.fields.p_y_07') }}</label>
                <input class="form-control {{ $errors->has('p_y_07') ? 'is-invalid' : '' }}" type="text" name="p_y_07" id="p_y_07" value="{{ old('p_y_07', $marshrutesRoute->p_y_07) }}">
                @if($errors->has('p_y_07'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_07') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_07_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_08">{{ trans('cruds.marshrutesRoute.fields.x_08') }}</label>
                <input class="form-control {{ $errors->has('x_08') ? 'is-invalid' : '' }}" type="text" name="x_08" id="x_08" value="{{ old('x_08', $marshrutesRoute->x_08) }}">
                @if($errors->has('x_08'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_08') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_08_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_08">{{ trans('cruds.marshrutesRoute.fields.y_08') }}</label>
                <input class="form-control {{ $errors->has('y_08') ? 'is-invalid' : '' }}" type="text" name="y_08" id="y_08" value="{{ old('y_08', $marshrutesRoute->y_08) }}">
                @if($errors->has('y_08'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_08') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_08_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_08">{{ trans('cruds.marshrutesRoute.fields.p_x_08') }}</label>
                <input class="form-control {{ $errors->has('p_x_08') ? 'is-invalid' : '' }}" type="text" name="p_x_08" id="p_x_08" value="{{ old('p_x_08', $marshrutesRoute->p_x_08) }}">
                @if($errors->has('p_x_08'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_08') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_08_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_08">{{ trans('cruds.marshrutesRoute.fields.p_y_08') }}</label>
                <input class="form-control {{ $errors->has('p_y_08') ? 'is-invalid' : '' }}" type="text" name="p_y_08" id="p_y_08" value="{{ old('p_y_08', $marshrutesRoute->p_y_08) }}">
                @if($errors->has('p_y_08'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_08') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_08_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_09">{{ trans('cruds.marshrutesRoute.fields.x_09') }}</label>
                <input class="form-control {{ $errors->has('x_09') ? 'is-invalid' : '' }}" type="text" name="x_09" id="x_09" value="{{ old('x_09', $marshrutesRoute->x_09) }}">
                @if($errors->has('x_09'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_09') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_09_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_09">{{ trans('cruds.marshrutesRoute.fields.y_09') }}</label>
                <input class="form-control {{ $errors->has('y_09') ? 'is-invalid' : '' }}" type="text" name="y_09" id="y_09" value="{{ old('y_09', $marshrutesRoute->y_09) }}">
                @if($errors->has('y_09'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_09') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_09_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_09">{{ trans('cruds.marshrutesRoute.fields.p_x_09') }}</label>
                <input class="form-control {{ $errors->has('p_x_09') ? 'is-invalid' : '' }}" type="text" name="p_x_09" id="p_x_09" value="{{ old('p_x_09', $marshrutesRoute->p_x_09) }}">
                @if($errors->has('p_x_09'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_09') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_09_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_09">{{ trans('cruds.marshrutesRoute.fields.p_y_09') }}</label>
                <input class="form-control {{ $errors->has('p_y_09') ? 'is-invalid' : '' }}" type="text" name="p_y_09" id="p_y_09" value="{{ old('p_y_09', $marshrutesRoute->p_y_09) }}">
                @if($errors->has('p_y_09'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_09') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_09_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_10">{{ trans('cruds.marshrutesRoute.fields.x_10') }}</label>
                <input class="form-control {{ $errors->has('x_10') ? 'is-invalid' : '' }}" type="text" name="x_10" id="x_10" value="{{ old('x_10', $marshrutesRoute->x_10) }}">
                @if($errors->has('x_10'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_10') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_10">{{ trans('cruds.marshrutesRoute.fields.y_10') }}</label>
                <input class="form-control {{ $errors->has('y_10') ? 'is-invalid' : '' }}" type="text" name="y_10" id="y_10" value="{{ old('y_10', $marshrutesRoute->y_10) }}">
                @if($errors->has('y_10'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_10') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_10">{{ trans('cruds.marshrutesRoute.fields.p_x_10') }}</label>
                <input class="form-control {{ $errors->has('p_x_10') ? 'is-invalid' : '' }}" type="text" name="p_x_10" id="p_x_10" value="{{ old('p_x_10', $marshrutesRoute->p_x_10) }}">
                @if($errors->has('p_x_10'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_10') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_10">{{ trans('cruds.marshrutesRoute.fields.p_y_10') }}</label>
                <input class="form-control {{ $errors->has('p_y_10') ? 'is-invalid' : '' }}" type="text" name="p_y_10" id="p_y_10" value="{{ old('p_y_10', $marshrutesRoute->p_y_10) }}">
                @if($errors->has('p_y_10'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_10') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_10_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_11">{{ trans('cruds.marshrutesRoute.fields.x_11') }}</label>
                <input class="form-control {{ $errors->has('x_11') ? 'is-invalid' : '' }}" type="text" name="x_11" id="x_11" value="{{ old('x_11', $marshrutesRoute->x_11) }}">
                @if($errors->has('x_11'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_11') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_11">{{ trans('cruds.marshrutesRoute.fields.y_11') }}</label>
                <input class="form-control {{ $errors->has('y_11') ? 'is-invalid' : '' }}" type="text" name="y_11" id="y_11" value="{{ old('y_11', $marshrutesRoute->y_11) }}">
                @if($errors->has('y_11'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_11') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_11">{{ trans('cruds.marshrutesRoute.fields.p_x_11') }}</label>
                <input class="form-control {{ $errors->has('p_x_11') ? 'is-invalid' : '' }}" type="text" name="p_x_11" id="p_x_11" value="{{ old('p_x_11', $marshrutesRoute->p_x_11) }}">
                @if($errors->has('p_x_11'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_11') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_11">{{ trans('cruds.marshrutesRoute.fields.p_y_11') }}</label>
                <input class="form-control {{ $errors->has('p_y_11') ? 'is-invalid' : '' }}" type="text" name="p_y_11" id="p_y_11" value="{{ old('p_y_11', $marshrutesRoute->p_y_11) }}">
                @if($errors->has('p_y_11'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_11') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_11_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_12">{{ trans('cruds.marshrutesRoute.fields.x_12') }}</label>
                <input class="form-control {{ $errors->has('x_12') ? 'is-invalid' : '' }}" type="text" name="x_12" id="x_12" value="{{ old('x_12', $marshrutesRoute->x_12) }}">
                @if($errors->has('x_12'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_12') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_12">{{ trans('cruds.marshrutesRoute.fields.y_12') }}</label>
                <input class="form-control {{ $errors->has('y_12') ? 'is-invalid' : '' }}" type="text" name="y_12" id="y_12" value="{{ old('y_12', $marshrutesRoute->y_12) }}">
                @if($errors->has('y_12'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_12') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_12">{{ trans('cruds.marshrutesRoute.fields.p_x_12') }}</label>
                <input class="form-control {{ $errors->has('p_x_12') ? 'is-invalid' : '' }}" type="text" name="p_x_12" id="p_x_12" value="{{ old('p_x_12', $marshrutesRoute->p_x_12) }}">
                @if($errors->has('p_x_12'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_12') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_12">{{ trans('cruds.marshrutesRoute.fields.p_y_12') }}</label>
                <input class="form-control {{ $errors->has('p_y_12') ? 'is-invalid' : '' }}" type="text" name="p_y_12" id="p_y_12" value="{{ old('p_y_12', $marshrutesRoute->p_y_12) }}">
                @if($errors->has('p_y_12'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_12') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_12_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_101">{{ trans('cruds.marshrutesRoute.fields.x_101') }}</label>
                <input class="form-control {{ $errors->has('x_101') ? 'is-invalid' : '' }}" type="text" name="x_101" id="x_101" value="{{ old('x_101', $marshrutesRoute->x_101) }}">
                @if($errors->has('x_101'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_101') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_101_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_101">{{ trans('cruds.marshrutesRoute.fields.y_101') }}</label>
                <input class="form-control {{ $errors->has('y_101') ? 'is-invalid' : '' }}" type="text" name="y_101" id="y_101" value="{{ old('y_101', $marshrutesRoute->y_101) }}">
                @if($errors->has('y_101'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_101') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_101_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_101">{{ trans('cruds.marshrutesRoute.fields.p_x_101') }}</label>
                <input class="form-control {{ $errors->has('p_x_101') ? 'is-invalid' : '' }}" type="text" name="p_x_101" id="p_x_101" value="{{ old('p_x_101', $marshrutesRoute->p_x_101) }}">
                @if($errors->has('p_x_101'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_101') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_101_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_101">{{ trans('cruds.marshrutesRoute.fields.p_y_101') }}</label>
                <input class="form-control {{ $errors->has('p_y_101') ? 'is-invalid' : '' }}" type="text" name="p_y_101" id="p_y_101" value="{{ old('p_y_101', $marshrutesRoute->p_y_101) }}">
                @if($errors->has('p_y_101'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_101') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_101_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_102">{{ trans('cruds.marshrutesRoute.fields.x_102') }}</label>
                <input class="form-control {{ $errors->has('x_102') ? 'is-invalid' : '' }}" type="text" name="x_102" id="x_102" value="{{ old('x_102', $marshrutesRoute->x_102) }}">
                @if($errors->has('x_102'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_102') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_102_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_102">{{ trans('cruds.marshrutesRoute.fields.y_102') }}</label>
                <input class="form-control {{ $errors->has('y_102') ? 'is-invalid' : '' }}" type="text" name="y_102" id="y_102" value="{{ old('y_102', $marshrutesRoute->y_102) }}">
                @if($errors->has('y_102'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_102') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_102_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_102">{{ trans('cruds.marshrutesRoute.fields.p_x_102') }}</label>
                <input class="form-control {{ $errors->has('p_x_102') ? 'is-invalid' : '' }}" type="text" name="p_x_102" id="p_x_102" value="{{ old('p_x_102', $marshrutesRoute->p_x_102) }}">
                @if($errors->has('p_x_102'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_102') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_102_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_102">{{ trans('cruds.marshrutesRoute.fields.p_y_102') }}</label>
                <input class="form-control {{ $errors->has('p_y_102') ? 'is-invalid' : '' }}" type="text" name="p_y_102" id="p_y_102" value="{{ old('p_y_102', $marshrutesRoute->p_y_102) }}">
                @if($errors->has('p_y_102'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_102') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_102_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_103">{{ trans('cruds.marshrutesRoute.fields.x_103') }}</label>
                <input class="form-control {{ $errors->has('x_103') ? 'is-invalid' : '' }}" type="text" name="x_103" id="x_103" value="{{ old('x_103', $marshrutesRoute->x_103) }}">
                @if($errors->has('x_103'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_103') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_103_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_103">{{ trans('cruds.marshrutesRoute.fields.y_103') }}</label>
                <input class="form-control {{ $errors->has('y_103') ? 'is-invalid' : '' }}" type="text" name="y_103" id="y_103" value="{{ old('y_103', $marshrutesRoute->y_103) }}">
                @if($errors->has('y_103'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_103') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_103_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_103">{{ trans('cruds.marshrutesRoute.fields.p_x_103') }}</label>
                <input class="form-control {{ $errors->has('p_x_103') ? 'is-invalid' : '' }}" type="text" name="p_x_103" id="p_x_103" value="{{ old('p_x_103', $marshrutesRoute->p_x_103) }}">
                @if($errors->has('p_x_103'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_103') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_103_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_103">{{ trans('cruds.marshrutesRoute.fields.p_y_103') }}</label>
                <input class="form-control {{ $errors->has('p_y_103') ? 'is-invalid' : '' }}" type="text" name="p_y_103" id="p_y_103" value="{{ old('p_y_103', $marshrutesRoute->p_y_103) }}">
                @if($errors->has('p_y_103'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_103') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_103_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_104">{{ trans('cruds.marshrutesRoute.fields.x_104') }}</label>
                <input class="form-control {{ $errors->has('x_104') ? 'is-invalid' : '' }}" type="text" name="x_104" id="x_104" value="{{ old('x_104', $marshrutesRoute->x_104) }}">
                @if($errors->has('x_104'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_104') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_104_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_104">{{ trans('cruds.marshrutesRoute.fields.y_104') }}</label>
                <input class="form-control {{ $errors->has('y_104') ? 'is-invalid' : '' }}" type="text" name="y_104" id="y_104" value="{{ old('y_104', $marshrutesRoute->y_104) }}">
                @if($errors->has('y_104'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_104') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_104_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_104">{{ trans('cruds.marshrutesRoute.fields.p_x_104') }}</label>
                <input class="form-control {{ $errors->has('p_x_104') ? 'is-invalid' : '' }}" type="text" name="p_x_104" id="p_x_104" value="{{ old('p_x_104', $marshrutesRoute->p_x_104) }}">
                @if($errors->has('p_x_104'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_104') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_104_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_104">{{ trans('cruds.marshrutesRoute.fields.p_y_104') }}</label>
                <input class="form-control {{ $errors->has('p_y_104') ? 'is-invalid' : '' }}" type="text" name="p_y_104" id="p_y_104" value="{{ old('p_y_104', $marshrutesRoute->p_y_104) }}">
                @if($errors->has('p_y_104'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_104') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_104_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_105">{{ trans('cruds.marshrutesRoute.fields.x_105') }}</label>
                <input class="form-control {{ $errors->has('x_105') ? 'is-invalid' : '' }}" type="text" name="x_105" id="x_105" value="{{ old('x_105', $marshrutesRoute->x_105) }}">
                @if($errors->has('x_105'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_105') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_105_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_105">{{ trans('cruds.marshrutesRoute.fields.y_105') }}</label>
                <input class="form-control {{ $errors->has('y_105') ? 'is-invalid' : '' }}" type="text" name="y_105" id="y_105" value="{{ old('y_105', $marshrutesRoute->y_105) }}">
                @if($errors->has('y_105'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_105') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_105_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_105">{{ trans('cruds.marshrutesRoute.fields.p_x_105') }}</label>
                <input class="form-control {{ $errors->has('p_x_105') ? 'is-invalid' : '' }}" type="text" name="p_x_105" id="p_x_105" value="{{ old('p_x_105', $marshrutesRoute->p_x_105) }}">
                @if($errors->has('p_x_105'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_105') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_105_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_105">{{ trans('cruds.marshrutesRoute.fields.p_y_105') }}</label>
                <input class="form-control {{ $errors->has('p_y_105') ? 'is-invalid' : '' }}" type="text" name="p_y_105" id="p_y_105" value="{{ old('p_y_105', $marshrutesRoute->p_y_105) }}">
                @if($errors->has('p_y_105'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_105') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_105_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_106">{{ trans('cruds.marshrutesRoute.fields.x_106') }}</label>
                <input class="form-control {{ $errors->has('x_106') ? 'is-invalid' : '' }}" type="text" name="x_106" id="x_106" value="{{ old('x_106', $marshrutesRoute->x_106) }}">
                @if($errors->has('x_106'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_106') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_106_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_106">{{ trans('cruds.marshrutesRoute.fields.y_106') }}</label>
                <input class="form-control {{ $errors->has('y_106') ? 'is-invalid' : '' }}" type="text" name="y_106" id="y_106" value="{{ old('y_106', $marshrutesRoute->y_106) }}">
                @if($errors->has('y_106'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_106') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_106_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_106">{{ trans('cruds.marshrutesRoute.fields.p_x_106') }}</label>
                <input class="form-control {{ $errors->has('p_x_106') ? 'is-invalid' : '' }}" type="text" name="p_x_106" id="p_x_106" value="{{ old('p_x_106', $marshrutesRoute->p_x_106) }}">
                @if($errors->has('p_x_106'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_106') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_106_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_106">{{ trans('cruds.marshrutesRoute.fields.p_y_106') }}</label>
                <input class="form-control {{ $errors->has('p_y_106') ? 'is-invalid' : '' }}" type="text" name="p_y_106" id="p_y_106" value="{{ old('p_y_106', $marshrutesRoute->p_y_106) }}">
                @if($errors->has('p_y_106'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_106') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_106_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_107">{{ trans('cruds.marshrutesRoute.fields.x_107') }}</label>
                <input class="form-control {{ $errors->has('x_107') ? 'is-invalid' : '' }}" type="text" name="x_107" id="x_107" value="{{ old('x_107', $marshrutesRoute->x_107) }}">
                @if($errors->has('x_107'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_107') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_107_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_107">{{ trans('cruds.marshrutesRoute.fields.y_107') }}</label>
                <input class="form-control {{ $errors->has('y_107') ? 'is-invalid' : '' }}" type="text" name="y_107" id="y_107" value="{{ old('y_107', $marshrutesRoute->y_107) }}">
                @if($errors->has('y_107'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_107') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_107_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_107">{{ trans('cruds.marshrutesRoute.fields.p_x_107') }}</label>
                <input class="form-control {{ $errors->has('p_x_107') ? 'is-invalid' : '' }}" type="text" name="p_x_107" id="p_x_107" value="{{ old('p_x_107', $marshrutesRoute->p_x_107) }}">
                @if($errors->has('p_x_107'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_107') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_107_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_107">{{ trans('cruds.marshrutesRoute.fields.p_y_107') }}</label>
                <input class="form-control {{ $errors->has('p_y_107') ? 'is-invalid' : '' }}" type="text" name="p_y_107" id="p_y_107" value="{{ old('p_y_107', $marshrutesRoute->p_y_107) }}">
                @if($errors->has('p_y_107'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_107') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_107_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_108">{{ trans('cruds.marshrutesRoute.fields.x_108') }}</label>
                <input class="form-control {{ $errors->has('x_108') ? 'is-invalid' : '' }}" type="text" name="x_108" id="x_108" value="{{ old('x_108', $marshrutesRoute->x_108) }}">
                @if($errors->has('x_108'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_108') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_108_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_108">{{ trans('cruds.marshrutesRoute.fields.y_108') }}</label>
                <input class="form-control {{ $errors->has('y_108') ? 'is-invalid' : '' }}" type="text" name="y_108" id="y_108" value="{{ old('y_108', $marshrutesRoute->y_108) }}">
                @if($errors->has('y_108'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_108') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_108_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_108">{{ trans('cruds.marshrutesRoute.fields.p_x_108') }}</label>
                <input class="form-control {{ $errors->has('p_x_108') ? 'is-invalid' : '' }}" type="text" name="p_x_108" id="p_x_108" value="{{ old('p_x_108', $marshrutesRoute->p_x_108) }}">
                @if($errors->has('p_x_108'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_108') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_108_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_108">{{ trans('cruds.marshrutesRoute.fields.p_y_108') }}</label>
                <input class="form-control {{ $errors->has('p_y_108') ? 'is-invalid' : '' }}" type="text" name="p_y_108" id="p_y_108" value="{{ old('p_y_108', $marshrutesRoute->p_y_108) }}">
                @if($errors->has('p_y_108'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_108') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_108_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_109">{{ trans('cruds.marshrutesRoute.fields.x_109') }}</label>
                <input class="form-control {{ $errors->has('x_109') ? 'is-invalid' : '' }}" type="text" name="x_109" id="x_109" value="{{ old('x_109', $marshrutesRoute->x_109) }}">
                @if($errors->has('x_109'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_109') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_109_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_109">{{ trans('cruds.marshrutesRoute.fields.y_109') }}</label>
                <input class="form-control {{ $errors->has('y_109') ? 'is-invalid' : '' }}" type="text" name="y_109" id="y_109" value="{{ old('y_109', $marshrutesRoute->y_109) }}">
                @if($errors->has('y_109'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_109') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_109_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_109">{{ trans('cruds.marshrutesRoute.fields.p_x_109') }}</label>
                <input class="form-control {{ $errors->has('p_x_109') ? 'is-invalid' : '' }}" type="text" name="p_x_109" id="p_x_109" value="{{ old('p_x_109', $marshrutesRoute->p_x_109) }}">
                @if($errors->has('p_x_109'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_109') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_109_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_109">{{ trans('cruds.marshrutesRoute.fields.p_y_109') }}</label>
                <input class="form-control {{ $errors->has('p_y_109') ? 'is-invalid' : '' }}" type="text" name="p_y_109" id="p_y_109" value="{{ old('p_y_109', $marshrutesRoute->p_y_109) }}">
                @if($errors->has('p_y_109'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_109') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_109_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_110">{{ trans('cruds.marshrutesRoute.fields.x_110') }}</label>
                <input class="form-control {{ $errors->has('x_110') ? 'is-invalid' : '' }}" type="text" name="x_110" id="x_110" value="{{ old('x_110', $marshrutesRoute->x_110) }}">
                @if($errors->has('x_110'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_110') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_110_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_110">{{ trans('cruds.marshrutesRoute.fields.y_110') }}</label>
                <input class="form-control {{ $errors->has('y_110') ? 'is-invalid' : '' }}" type="text" name="y_110" id="y_110" value="{{ old('y_110', $marshrutesRoute->y_110) }}">
                @if($errors->has('y_110'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_110') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_110_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_110">{{ trans('cruds.marshrutesRoute.fields.p_x_110') }}</label>
                <input class="form-control {{ $errors->has('p_x_110') ? 'is-invalid' : '' }}" type="text" name="p_x_110" id="p_x_110" value="{{ old('p_x_110', $marshrutesRoute->p_x_110) }}">
                @if($errors->has('p_x_110'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_110') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_110_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_110">{{ trans('cruds.marshrutesRoute.fields.p_y_110') }}</label>
                <input class="form-control {{ $errors->has('p_y_110') ? 'is-invalid' : '' }}" type="text" name="p_y_110" id="p_y_110" value="{{ old('p_y_110', $marshrutesRoute->p_y_110) }}">
                @if($errors->has('p_y_110'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_110') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_110_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_111">{{ trans('cruds.marshrutesRoute.fields.x_111') }}</label>
                <input class="form-control {{ $errors->has('x_111') ? 'is-invalid' : '' }}" type="text" name="x_111" id="x_111" value="{{ old('x_111', $marshrutesRoute->x_111) }}">
                @if($errors->has('x_111'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_111') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_111_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_111">{{ trans('cruds.marshrutesRoute.fields.y_111') }}</label>
                <input class="form-control {{ $errors->has('y_111') ? 'is-invalid' : '' }}" type="text" name="y_111" id="y_111" value="{{ old('y_111', $marshrutesRoute->y_111) }}">
                @if($errors->has('y_111'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_111') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_111_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_111">{{ trans('cruds.marshrutesRoute.fields.p_x_111') }}</label>
                <input class="form-control {{ $errors->has('p_x_111') ? 'is-invalid' : '' }}" type="text" name="p_x_111" id="p_x_111" value="{{ old('p_x_111', $marshrutesRoute->p_x_111) }}">
                @if($errors->has('p_x_111'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_111') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_111_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_111">{{ trans('cruds.marshrutesRoute.fields.p_y_111') }}</label>
                <input class="form-control {{ $errors->has('p_y_111') ? 'is-invalid' : '' }}" type="text" name="p_y_111" id="p_y_111" value="{{ old('p_y_111', $marshrutesRoute->p_y_111) }}">
                @if($errors->has('p_y_111'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_111') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_111_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="x_112">{{ trans('cruds.marshrutesRoute.fields.x_112') }}</label>
                <input class="form-control {{ $errors->has('x_112') ? 'is-invalid' : '' }}" type="text" name="x_112" id="x_112" value="{{ old('x_112', $marshrutesRoute->x_112) }}">
                @if($errors->has('x_112'))
                    <div class="invalid-feedback">
                        {{ $errors->first('x_112') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.x_112_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="y_112">{{ trans('cruds.marshrutesRoute.fields.y_112') }}</label>
                <input class="form-control {{ $errors->has('y_112') ? 'is-invalid' : '' }}" type="text" name="y_112" id="y_112" value="{{ old('y_112', $marshrutesRoute->y_112) }}">
                @if($errors->has('y_112'))
                    <div class="invalid-feedback">
                        {{ $errors->first('y_112') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.y_112_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_x_112">{{ trans('cruds.marshrutesRoute.fields.p_x_112') }}</label>
                <input class="form-control {{ $errors->has('p_x_112') ? 'is-invalid' : '' }}" type="text" name="p_x_112" id="p_x_112" value="{{ old('p_x_112', $marshrutesRoute->p_x_112) }}">
                @if($errors->has('p_x_112'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_x_112') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_x_112_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="p_y_112">{{ trans('cruds.marshrutesRoute.fields.p_y_112') }}</label>
                <input class="form-control {{ $errors->has('p_y_112') ? 'is-invalid' : '' }}" type="text" name="p_y_112" id="p_y_112" value="{{ old('p_y_112', $marshrutesRoute->p_y_112) }}">
                @if($errors->has('p_y_112'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_y_112') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesRoute.fields.p_y_112_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection