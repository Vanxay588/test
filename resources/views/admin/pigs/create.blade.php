@extends('layouts.admin')
@section('content')
<form method="POST" action="{{ route("admin.pigs.store") }}" enctype="multipart/form-data">
    @csrf
        <div class="row">
             <div class="col p-4">
        <h4 class="font-weight-bold" style="display: inline; color:#3498DB">ข้อมูลการนำเข้า</h4>
        <button class="btn btn-primary" type="submit" style="float: right;">
            <i class="fas fa-save"></i> {{ trans('global.save') }}
        </button>
    </div>
</div>

    <div class="card">
        <div class="card-header">
       <h5>ข้อมูลพื้นฐาน</h5>
    </div>
    <div class="card-body">  
            <div class="row">
                <div class="col-2">
                    <div class="form-group">
                        <label class="required" for="date">{{ trans('cruds.pig.fields.date') }}</label>
                        <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date') }}" required>
                        @if($errors->has('date'))
                            <span class="text-danger">{{ $errors->first('date') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.pig.fields.date_helper') }}</span>
                    </div>
                </div>
                <div class="col-6" style="margin-left:auto">
                    <div class="form-group">
                        <label class="required" for="key">{{ trans('cruds.pig.fields.key') }}</label>
                        <input class="form-control {{ $errors->has('key') ? 'is-invalid' : '' }}" type="number" name="key" id="key" value="{{ old('key', '') }}" step="1" required>
                        @if($errors->has('key'))
                            <span class="text-danger">{{ $errors->first('key') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.pig.fields.key_helper') }}</span>
                    </div>
        
                </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="required" for="pig_pro_doc_no">{{ trans('cruds.pig.fields.pig_pro_doc_no') }}</label>
                    <input class="form-control {{ $errors->has('pig_pro_doc_no') ? 'is-invalid' : '' }}" type="text" name="pig_pro_doc_no" id="pig_pro_doc_no" value="{{ old('pig_pro_doc_no', '') }}" required>
                    @if($errors->has('pig_pro_doc_no'))
                        <span class="text-danger">{{ $errors->first('pig_pro_doc_no') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.pig.fields.pig_pro_doc_no_helper') }}</span>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="required" for="ref_doc_no">{{ trans('cruds.pig.fields.ref_doc_no') }}</label>
                    <input class="form-control {{ $errors->has('ref_doc_no') ? 'is-invalid' : '' }}" type="text" name="ref_doc_no" id="ref_doc_no" value="{{ old('ref_doc_no', '') }}" required>
                    @if($errors->has('ref_doc_no'))
                        <span class="text-danger">{{ $errors->first('ref_doc_no') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.pig.fields.ref_doc_no_helper') }}</span>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="required" for="license">{{ trans('cruds.pig.fields.license') }}</label>
                    <input class="form-control {{ $errors->has('license') ? 'is-invalid' : '' }}" type="text" name="license" id="license" value="{{ old('license', '') }}" required>
                    @if($errors->has('license'))
                        <span class="text-danger">{{ $errors->first('license') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.pig.fields.license_helper') }}</span>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="required" for="ror_3_doc_no">{{ trans('cruds.pig.fields.ror_3_doc_no') }}</label>
                    <input class="form-control {{ $errors->has('ror_3_doc_no') ? 'is-invalid' : '' }}" type="text" name="ror_3_doc_no" id="ror_3_doc_no" value="{{ old('ror_3_doc_no', '') }}" required>
                    @if($errors->has('ror_3_doc_no'))
                        <span class="text-danger">{{ $errors->first('ror_3_doc_no') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.pig.fields.ror_3_doc_no_helper') }}</span>
                </div>
              
            </div>
            
            <div class="col-6">
                <div class="form-group">
                    <label class="required" for="origin">{{ trans('cruds.pig.fields.origin') }}</label>
                    <input class="form-control {{ $errors->has('origin') ? 'is-invalid' : '' }}" type="text" name="origin" id="origin" value="{{ old('origin', '') }}" required>
                    @if($errors->has('origin'))
                        <span class="text-danger">{{ $errors->first('origin') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.pig.fields.origin_helper') }}</span>
                </div>
            </div>          
           
       
            
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5>ข้อมูลการเกิด</h5>
     </div>
<div class="card-body">
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="required" for="week_date">{{ trans('cruds.pig.fields.week_date') }}</label>
                        <input class="form-control {{ $errors->has('week_date') ? 'is-invalid' : '' }}" type="text" name="week_date" id="week_date" value="{{ old('week_date', '') }}" required>
                        @if($errors->has('week_date'))
                            <span class="text-danger">{{ $errors->first('week_date') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.pig.fields.week_date_helper') }}</span>
                    </div>
                </div>
            
                <div class="col-6">
                    <div class="form-group">
                        <label class="required">{{ trans('cruds.pig.fields.species') }}</label>
                        <select class="form-control {{ $errors->has('species') ? 'is-invalid' : '' }}" name="species" id="species" required>
                            <option value disabled {{ old('species', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                            @foreach(App\Models\Pig::SPECIES_SELECT as $key => $label)
                                <option value="{{ $key }}" {{ old('species', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('species'))
                            <span class="text-danger">{{ $errors->first('species') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.pig.fields.species_helper') }}</span>
                    </div>
                   </div>
                   <div class="col-6">
                    <div class="form-group">
                        <label class="required">{{ trans('cruds.pig.fields.sex') }}</label>
                        <select class="form-control {{ $errors->has('sex') ? 'is-invalid' : '' }}" name="sex" id="sex" required>
                            <option value disabled {{ old('sex', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                            @foreach(App\Models\Pig::SEX_SELECT as $key => $label)
                                <option value="{{ $key }}" {{ old('sex', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('sex'))
                            <span class="text-danger">{{ $errors->first('sex') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.pig.fields.sex_helper') }}</span>
                    </div>
                   </div>
                   {{--  --}}
                   <div class="col-12">
                    <div class="form-group">
                        <label class="required">{{ trans('cruds.pig.fields.type') }}</label>
                        <select class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type" required>
                            <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                            @foreach(App\Models\Pig::TYPE_SELECT as $key => $label)
                                <option value="{{ $key }}" {{ old('type', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('type'))
                            <span class="text-danger">{{ $errors->first('type') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.pig.fields.type_helper') }}</span>
                    </div>
                   
                   </div>
                   <div class="col-6">
                    <div class="form-group">
                        <label class="required" for="weigh">{{ trans('cruds.pig.fields.weigh') }}</label>
                        <input class="form-control {{ $errors->has('weigh') ? 'is-invalid' : '' }}" type="text" name="weigh" id="weigh" value="{{ old('weigh', '') }}" required>
                        @if($errors->has('weigh'))
                            <span class="text-danger">{{ $errors->first('weigh') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.pig.fields.weigh_helper') }}</span>
                    </div>
                   
                   </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="required" for="age">{{ trans('cruds.pig.fields.age') }}</label>
                            <input class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" type="text" name="age" id="age" value="{{ old('age', '') }}" required>
                            @if($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.pig.fields.age_helper') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</div>
</div>
</form>


@endsection
