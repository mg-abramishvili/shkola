<?php

namespace App\Http\Requests;

use App\Schedulesimple;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSchedulesimpleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('schedulesimple_create');
    }

    public function rules()
    {
        return [
            'schsm_title' => [
                'string',
                'required',
            ],
            'schsm_file'  => [
                'required',
            ],
        ];
    }
}
