@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.marshrutesFloor.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.marshrutes-floors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesFloor.fields.id') }}
                        </th>
                        <td>
                            {{ $marshrutesFloor->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesFloor.fields.marshrutesfloor_title') }}
                        </th>
                        <td>
                            {{ $marshrutesFloor->marshrutesfloor_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marshrutesFloor.fields.marshrutesfloor_image') }}
                        </th>
                        <td>
                            @if($marshrutesFloor->marshrutesfloor_image)
                                <a href="{{ $marshrutesFloor->marshrutesfloor_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $marshrutesFloor->marshrutesfloor_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.marshrutes-floors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection