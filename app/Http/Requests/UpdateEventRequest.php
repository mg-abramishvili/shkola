<?php

namespace App\Http\Requests;

use App\Event;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEventRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ev_title' => [
                'string',
                'required',
            ],
            'ev_date'  => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'ev_cat'   => [
                'required',
            ],
        ];
    }
}
