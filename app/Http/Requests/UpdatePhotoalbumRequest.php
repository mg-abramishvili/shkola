<?php

namespace App\Http\Requests;

use App\Photoalbum;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePhotoalbumRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('photoalbum_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'phs_title' => [
                'string',
                'required',
            ],
        ];
    }
}
