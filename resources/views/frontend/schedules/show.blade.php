@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.schedule.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.schedules.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.id') }}
                        </th>
                        <td>
                            {{ $schedule->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_classname') }}
                        </th>
                        <td>
                            {{ $schedule->sc_classname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_1_timestart') }}
                        </th>
                        <td>
                            {{ $schedule->sc_1_timestart }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_1_mon') }}
                        </th>
                        <td>
                            {{ $schedule->sc_1_mon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_1_tue') }}
                        </th>
                        <td>
                            {{ $schedule->sc_1_tue }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_1_wed') }}
                        </th>
                        <td>
                            {{ $schedule->sc_1_wed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_1_thu') }}
                        </th>
                        <td>
                            {{ $schedule->sc_1_thu }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_1_fri') }}
                        </th>
                        <td>
                            {{ $schedule->sc_1_fri }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_2_timestart') }}
                        </th>
                        <td>
                            {{ $schedule->sc_2_timestart }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_2_mon') }}
                        </th>
                        <td>
                            {{ $schedule->sc_2_mon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_2_tue') }}
                        </th>
                        <td>
                            {{ $schedule->sc_2_tue }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_2_wed') }}
                        </th>
                        <td>
                            {{ $schedule->sc_2_wed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_2_thu') }}
                        </th>
                        <td>
                            {{ $schedule->sc_2_thu }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_2_fri') }}
                        </th>
                        <td>
                            {{ $schedule->sc_2_fri }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_3_timestart') }}
                        </th>
                        <td>
                            {{ $schedule->sc_3_timestart }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_3_mon') }}
                        </th>
                        <td>
                            {{ $schedule->sc_3_mon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_3_tue') }}
                        </th>
                        <td>
                            {{ $schedule->sc_3_tue }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_3_wed') }}
                        </th>
                        <td>
                            {{ $schedule->sc_3_wed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_3_thu') }}
                        </th>
                        <td>
                            {{ $schedule->sc_3_thu }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_3_fri') }}
                        </th>
                        <td>
                            {{ $schedule->sc_3_fri }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_4_timestart') }}
                        </th>
                        <td>
                            {{ $schedule->sc_4_timestart }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_4_mon') }}
                        </th>
                        <td>
                            {{ $schedule->sc_4_mon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_4_tue') }}
                        </th>
                        <td>
                            {{ $schedule->sc_4_tue }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_4_wed') }}
                        </th>
                        <td>
                            {{ $schedule->sc_4_wed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_4_thu') }}
                        </th>
                        <td>
                            {{ $schedule->sc_4_thu }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_4_fri') }}
                        </th>
                        <td>
                            {{ $schedule->sc_4_fri }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_5_timestart') }}
                        </th>
                        <td>
                            {{ $schedule->sc_5_timestart }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_5_mon') }}
                        </th>
                        <td>
                            {{ $schedule->sc_5_mon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_5_tue') }}
                        </th>
                        <td>
                            {{ $schedule->sc_5_tue }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_5_wed') }}
                        </th>
                        <td>
                            {{ $schedule->sc_5_wed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_5_thu') }}
                        </th>
                        <td>
                            {{ $schedule->sc_5_thu }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_5_fri') }}
                        </th>
                        <td>
                            {{ $schedule->sc_5_fri }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_6_timestart') }}
                        </th>
                        <td>
                            {{ $schedule->sc_6_timestart }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_6_mon') }}
                        </th>
                        <td>
                            {{ $schedule->sc_6_mon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_6_tue') }}
                        </th>
                        <td>
                            {{ $schedule->sc_6_tue }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_6_wed') }}
                        </th>
                        <td>
                            {{ $schedule->sc_6_wed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_6_thu') }}
                        </th>
                        <td>
                            {{ $schedule->sc_6_thu }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_6_fri') }}
                        </th>
                        <td>
                            {{ $schedule->sc_6_fri }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_7_timestart') }}
                        </th>
                        <td>
                            {{ $schedule->sc_7_timestart }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_7_mon') }}
                        </th>
                        <td>
                            {{ $schedule->sc_7_mon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_7_tue') }}
                        </th>
                        <td>
                            {{ $schedule->sc_7_tue }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_7_wed') }}
                        </th>
                        <td>
                            {{ $schedule->sc_7_wed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_7_thu') }}
                        </th>
                        <td>
                            {{ $schedule->sc_7_thu }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_7_fri') }}
                        </th>
                        <td>
                            {{ $schedule->sc_7_fri }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.schedules.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection