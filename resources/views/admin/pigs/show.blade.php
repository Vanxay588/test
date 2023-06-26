@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pig.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pigs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.id') }}
                        </th>
                        <td>
                            {{ $pig->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.date') }}
                        </th>
                        <td>
                            {{ $pig->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.pig_pro_doc_no') }}
                        </th>
                        <td>
                            {{ $pig->pig_pro_doc_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.license') }}
                        </th>
                        <td>
                            {{ $pig->license }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.origin') }}
                        </th>
                        <td>
                            {{ $pig->origin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.key') }}
                        </th>
                        <td>
                            {{ $pig->key }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.ref_doc_no') }}
                        </th>
                        <td>
                            {{ $pig->ref_doc_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.week_date') }}
                        </th>
                        <td>
                            {{ $pig->week_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.species') }}
                        </th>
                        <td>
                            {{ App\Models\Pig::SPECIES_SELECT[$pig->species] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.sex') }}
                        </th>
                        <td>
                            {{ App\Models\Pig::SEX_SELECT[$pig->sex] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.type') }}
                        </th>
                        <td>
                            {{ App\Models\Pig::TYPE_SELECT[$pig->type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.weigh') }}
                        </th>
                        <td>
                            {{ $pig->weigh }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.age') }}
                        </th>
                        <td>
                            {{ $pig->age }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pig.fields.ror_3_doc_no') }}
                        </th>
                        <td>
                            {{ $pig->ror_3_doc_no }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pigs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
