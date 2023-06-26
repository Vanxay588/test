@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.management.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.managements.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.management.fields.id') }}
                        </th>
                        <td>
                            {{ $management->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.management.fields.date') }}
                        </th>
                        <td>
                            {{ $management->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.management.fields.key') }}
                        </th>
                        <td>
                            {{ $management->key->key ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.management.fields.sick') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $management->sick ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.management.fields.shabby') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $management->shabby ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.management.fields.whip') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $management->whip ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.management.fields.smash') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $management->smash ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.management.fields.hernia') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $management->hernia ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.management.fields.lung') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $management->lung ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.management.fields.tag') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $management->tag ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.management.fields.note') }}
                        </th>
                        <td>
                            {{ $management->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.managements.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
