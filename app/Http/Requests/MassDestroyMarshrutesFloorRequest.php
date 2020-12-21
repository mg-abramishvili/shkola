<?php

namespace App\Http\Requests;

use App\MarshrutesFloor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMarshrutesFloorRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('marshrutes_floor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:marshrutes_floors,id',
        ];
    }
}
