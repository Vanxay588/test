<?php

namespace App\Http\Requests;

use App\Models\Pig;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePigRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pig_create');
    }

    public function rules()
    {
        return [
            'date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'pig_pro_doc_no' => [
                'string',
                'required',
            ],
            'license' => [
                'string',
                'required',
            ],
            'origin' => [
                'string',
                'required',
            ],
            'key' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'ref_doc_no' => [
                'string',
                'required',
            ],
            'week_date' => [
                'string',
                'required',
            ],
            'species' => [
                'required',
            ],
            'sex' => [
                'required',
            ],
            'type' => [
                'required',
            ],
            'weigh' => [
                'string',
                'required',
            ],
            'age' => [
                'string',
                'required',
            ],
            'ror_3_doc_no' => [
                'string',
                'required',
            ],
        ];
    }
}
