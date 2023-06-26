@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.management.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.managements.update", [$management->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="date">{{ trans('cruds.management.fields.date') }}</label>
                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date', $management->date) }}" required>
                @if($errors->has('date'))
                    <span class="text-danger">{{ $errors->first('date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.management.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="key_id">{{ trans('cruds.management.fields.key') }}</label>
                <select class="form-control select2 {{ $errors->has('key') ? 'is-invalid' : '' }}" name="key_id" id="key_id" required>
                    @foreach($keys as $id => $entry)
                        <option value="{{ $id }}" {{ (old('key_id') ? old('key_id') : $management->key->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('key'))
                    <span class="text-danger">{{ $errors->first('key') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.management.fields.key_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('sick') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="sick" value="0">
                    <input class="form-check-input" type="checkbox" name="sick" id="sick" value="1" {{ $management->sick || old('sick', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="sick">{{ trans('cruds.management.fields.sick') }}</label>
                </div>
                @if($errors->has('sick'))
                    <span class="text-danger">{{ $errors->first('sick') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.management.fields.sick_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('shabby') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="shabby" value="0">
                    <input class="form-check-input" type="checkbox" name="shabby" id="shabby" value="1" {{ $management->shabby || old('shabby', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="shabby">{{ trans('cruds.management.fields.shabby') }}</label>
                </div>
                @if($errors->has('shabby'))
                    <span class="text-danger">{{ $errors->first('shabby') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.management.fields.shabby_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('whip') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="whip" value="0">
                    <input class="form-check-input" type="checkbox" name="whip" id="whip" value="1" {{ $management->whip || old('whip', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="whip">{{ trans('cruds.management.fields.whip') }}</label>
                </div>
                @if($errors->has('whip'))
                    <span class="text-danger">{{ $errors->first('whip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.management.fields.whip_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('smash') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="smash" value="0">
                    <input class="form-check-input" type="checkbox" name="smash" id="smash" value="1" {{ $management->smash || old('smash', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="smash">{{ trans('cruds.management.fields.smash') }}</label>
                </div>
                @if($errors->has('smash'))
                    <span class="text-danger">{{ $errors->first('smash') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.management.fields.smash_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('hernia') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="hernia" value="0">
                    <input class="form-check-input" type="checkbox" name="hernia" id="hernia" value="1" {{ $management->hernia || old('hernia', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="hernia">{{ trans('cruds.management.fields.hernia') }}</label>
                </div>
                @if($errors->has('hernia'))
                    <span class="text-danger">{{ $errors->first('hernia') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.management.fields.hernia_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('lung') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="lung" value="0">
                    <input class="form-check-input" type="checkbox" name="lung" id="lung" value="1" {{ $management->lung || old('lung', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="lung">{{ trans('cruds.management.fields.lung') }}</label>
                </div>
                @if($errors->has('lung'))
                    <span class="text-danger">{{ $errors->first('lung') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.management.fields.lung_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('tag') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="tag" value="0">
                    <input class="form-check-input" type="checkbox" name="tag" id="tag" value="1" {{ $management->tag || old('tag', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="tag">{{ trans('cruds.management.fields.tag') }}</label>
                </div>
                @if($errors->has('tag'))
                    <span class="text-danger">{{ $errors->first('tag') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.management.fields.tag_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.management.fields.note') }}</label>
                <input class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" type="text" name="note" id="note" value="{{ old('note', $management->note) }}">
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.management.fields.note_helper') }}</span>
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
