<?php

namespace App\Http\Requests;

use App\MarshrutesRoutesTwo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMarshrutesRoutesTwoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('marshrutes_routes_two_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:marshrutes_routes_twos,id',
        ];
    }
}
