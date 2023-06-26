@extends('layouts.admin')
@section('content')
<div class="card">
@can('management_create')
<div class="card-header">
    <a class="btn btn-primary" href="{{ route('admin.managements.create') }}" style="float:right">
        <i class="fas fa-calendar-plus"></i> เพิ่มข้อมูล
    </a>
</div>
@endcan

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Management">
                <thead style="background-color: #007BFF; color:#fff">
                    <tr>
                        <th width="10">

                        </th>
                        
                        <th>
                            {{ trans('cruds.management.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.management.fields.key') }}
                        </th>
                        <th>
                            {{ trans('cruds.management.fields.sick') }}
                        </th>
                        <th>
                            {{ trans('cruds.management.fields.shabby') }}
                        </th>
                        <th>
                            {{ trans('cruds.management.fields.whip') }}
                        </th>
                        <th>
                            {{ trans('cruds.management.fields.smash') }}
                        </th>
                        <th>
                            {{ trans('cruds.management.fields.hernia') }}
                        </th>
                        <th>
                            {{ trans('cruds.management.fields.lung') }}
                        </th>
                        <th>
                            {{ trans('cruds.management.fields.tag') }}
                        </th>
                        <th>
                            {{ trans('cruds.management.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($managements as $key => $management)
                        <tr data-entry-id="{{ $management->id }}">
                            <td>

                            </td>
                        
                            <td>
                                {{ $management->date ?? '' }}
                            </td>
                            <td>
                                {{ $management->key->key ?? '' }}
                            </td>
                            
                            <td>
                                <span style="display:none">{{ $management->sick ?? '' }}</span>
                                <input type="checkbox" {{-- disabled="disabled" --}} id="myCheckbox" {{ $management->sick ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $management->shabby ?? '' }}</span>
                                <input type="checkbox" {{-- disabled="disabled" --}} {{ $management->shabby ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $management->whip ?? '' }}</span>
                                <input type="checkbox" {{-- disabled="disabled" --}} {{ $management->whip ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $management->smash ?? '' }}</span>
                                <input type="checkbox" {{-- disabled="disabled" --}} {{ $management->smash ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $management->hernia ?? '' }}</span>
                                <input type="checkbox" {{-- disabled="disabled" --}} {{ $management->hernia ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $management->lung ?? '' }}</span>
                                <input type="checkbox" {{-- disabled="disabled" --}} {{ $management->lung ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $management->tag ?? '' }}</span>
                                <input type="checkbox" {{-- disabled="disabled" --}} {{ $management->tag ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $management->note ?? '' }}
                            </td>
                            <td>
                                @can('management_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.managements.edit', $management->id) }}">
                                        <i class="fas fa-edit"></i>  {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('management_delete')
                                    <form action="{{ route('admin.managements.destroy', $management->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger">
                                            <i class="fas fa-trash"></i> <!-- Add the delete icon -->
                                            {{ trans('global.delete') }}
                                          </button>
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
@can('management_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.managements.massDestroy') }}",
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
    pageLength: 10,
  });
  let table = $('.datatable-Management:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
