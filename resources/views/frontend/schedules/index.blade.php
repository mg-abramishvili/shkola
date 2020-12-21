@extends('layouts.admin')
@section('content')
@can('schedule_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.schedules.create') }}">
                Добавить класс
            </a>
            <a class="btn btn-info" href="" data-toggle="modal" data-target="#modal-xlsx">
                Загрузить XLSX
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">


<style>
    .dataTables_length,
    .dt-buttons,
    .dataTables_filter,
    .card-header,
    table.dataTable tbody td.select-checkbox:before,
    table.dataTable tbody th.select-checkbox {
        display: none;
    }
</style>

        {{ trans('cruds.schedule.title_singular') }} {{ trans('global.list') }}
    </div>

    <?
    $con=mysqli_connect('localhost','mysql','mysql','school');

if(mysqli_connect_errno())
{
	echo 'Failed to connect to database'.mysqli_connect_error();
}?>


<div id="modal-xlsx" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Загрузка XLSX</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="/file-upload.php" enctype="multipart/form-data">
                <div class="form-group row">
                  <label class="col-md-3">Select File</label>
                  <div class="col-md-8">
                <input type="file" name="uploadfile" class="form-control"/>
                </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3"></label>
                  <div class="col-md-8">
                <input type="submit" name="submit" class="btn btn-primary">
              </div>
            </div>
              </form>
        </div>
      </div>

    </div>
  </div>



    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Schedule">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.schedule.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.schedule.fields.sc_classname') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($schedules as $key => $schedule)
                        <tr data-entry-id="{{ $schedule->id }}">
                            <td>
                                {{ $schedule->id ?? '' }}
                            </td>
                            <td>
                                {{ $schedule->sc_classname ?? '' }}
                            </td>
                            <td>
                                @can('schedule_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.schedules.edit', $schedule->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('schedule_delete')
                                    <form action="{{ route('admin.schedules.destroy', $schedule->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('schedule_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.schedules.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Schedule:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
