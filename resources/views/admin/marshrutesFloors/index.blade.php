@extends('layouts.admin')
@section('content')
@can('marshrutes_floor_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.marshrutes-floors.create') }}">
                Добавить в базу
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.marshrutesFloor.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-MarshrutesFloor">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.marshrutesFloor.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.marshrutesFloor.fields.marshrutesfloor_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.marshrutesFloor.fields.marshrutesfloor_image') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($marshrutesFloors as $key => $marshrutesFloor)
                        <tr data-entry-id="{{ $marshrutesFloor->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $marshrutesFloor->id ?? '' }}
                            </td>
                            <td>
                                {{ $marshrutesFloor->marshrutesfloor_title ?? '' }}
                            </td>
                            <td>
                                @if($marshrutesFloor->marshrutesfloor_image)
                                    <a href="{{ $marshrutesFloor->marshrutesfloor_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $marshrutesFloor->marshrutesfloor_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>

                                @can('marshrutes_floor_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.marshrutes-floors.edit', $marshrutesFloor->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('marshrutes_floor_delete')
                                    <form action="{{ route('admin.marshrutes-floors.destroy', $marshrutesFloor->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('marshrutes_floor_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.marshrutes-floors.massDestroy') }}",
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
  let table = $('.datatable-MarshrutesFloor:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection