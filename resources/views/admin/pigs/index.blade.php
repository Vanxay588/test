@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        @can('pig_create')
        <a class="btn btn-primary" href="{{ route('admin.pigs.create') }}" style="float: right;">
            <i class="fas fa-plus-circle"></i> นำเข้า
        </a>
@endcan
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Pig">
                <thead style="background-color: #007BFF; color:#fff">
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.pig.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.pig.fields.key') }}
                        </th>
                        <th>
                            {{ trans('cruds.pig.fields.pig_pro_doc_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.pig.fields.ref_doc_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.pig.fields.license') }}
                        </th>
                        <th>
                            {{ trans('cruds.pig.fields.ror_3_doc_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.pig.fields.origin') }}
                        </th>
                        
                        
                        
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pigs as $key => $pig)
                        <tr data-entry-id="{{ $pig->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $pig->date ?? '' }}
                            </td>
                            <td>
                                {{ $pig->key ?? '' }}
                            </td>
                            <td>
                                {{ $pig->pig_pro_doc_no ?? '' }}
                            </td>
                            <td>
                                {{ $pig->ref_doc_no ?? '' }}
                            </td>
                            <td>
                                {{ $pig->license ?? '' }}
                            </td>                          
                            
                            <td>
                                {{ $pig->ror_3_doc_no ?? '' }}
                            </td>
                            <td>
                                {{ $pig->origin ?? '' }}
                            </td>
                            <td>

                                @can('pig_edit')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.pigs.edit', $pig->id) }}">
                                    <i class="fas fa-edit"></i>  {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('pig_delete')
                                <form action="{{ route('admin.pigs.destroy', $pig->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('pig_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.pigs.massDestroy') }}",
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
  let table = $('.datatable-Pig:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
