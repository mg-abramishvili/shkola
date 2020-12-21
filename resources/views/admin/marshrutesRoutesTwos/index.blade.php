@extends('layouts.admin')
@section('content')
@can('marshrutes_routes_two_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.marshrutes-routes-twos.create') }}">
                Добавить маршрут от Т2
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.marshrutesRoutesTwo.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-MarshrutesRoutesTwo">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.marshrutesRoutesTwo.fields.marshrutesroutes_title') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($marshrutesRoutesTwos as $key => $marshrutesRoutesTwo)
                        <tr data-entry-id="{{ $marshrutesRoutesTwo->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $marshrutesRoutesTwo->id ?? '' }}
                            </td>
                            <td>
                                {{ $marshrutesRoutesTwo->marshrutesroutes_title ?? '' }}
                            </td>
                            <td>
                                @can('marshrutes_routes_two_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.marshrutes-routes-twos.show', $marshrutesRoutesTwo->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('marshrutes_routes_two_delete')
                                    <form action="{{ route('admin.marshrutes-routes-twos.destroy', $marshrutesRoutesTwo->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('marshrutes_routes_two_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.marshrutes-routes-twos.massDestroy') }}",
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
  let table = $('.datatable-MarshrutesRoutesTwo:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection