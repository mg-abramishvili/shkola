<?php

namespace App\Http\Requests;

use App\Schedulesimple;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSchedulesimpleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('schedulesimple_edit');
    }

    public function rules()
    {
        return [
            'schsm_title' => [
                'string',
                'required',
            ],
        ];
    }
}
