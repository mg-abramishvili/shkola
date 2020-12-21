<?php

namespace App\Http\Requests;

use App\MarshrutesFloor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMarshrutesFloorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('marshrutes_floor_create');
    }

    public function rules()
    {
        return [
            'marshrutesfloor_title' => [
                'string',
                'required',
            ],
            'marshrutesfloor_image' => [
                'required',
            ],
        ];
    }
}
