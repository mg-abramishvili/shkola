<?php

namespace App\Http\Requests;

use App\MarshrutesRoute;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMarshrutesRouteRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('marshrutes_route_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:marshrutes_routes,id',
        ];
    }
}
