<?php

namespace App\Http\Requests;

use App\Models\Management;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateManagementRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('management_edit');
    }

    public function rules()
    {
        return [
            'date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'key_id' => [
                'required',
                'integer',
            ],
            'note' => [
                'string',
                'nullable',
            ],
        ];
    }
}
