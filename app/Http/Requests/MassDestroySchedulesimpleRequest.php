<?php

namespace App\Http\Requests;

use App\Schedulesimple;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySchedulesimpleRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('schedulesimple_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:schedulesimples,id',
        ];
    }
}
