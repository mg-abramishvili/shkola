<?php

namespace App\Http\Requests;

use App\MarshrutesRoutesTwo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMarshrutesRoutesTwoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('marshrutes_routes_two_edit');
    }

    public function rules()
    {
        return [
            'marshrutesroutes_title'    => [
                'string',
                'required',
            ],
            'marshrutesroutes_floor_id' => [
                'required',
                'integer',
            ],
            'x_01'                      => [
                'string',
                'nullable',
            ],
            'y_01'                      => [
                'string',
                'nullable',
            ],
            'p_x_01'                    => [
                'string',
                'nullable',
            ],
            'p_y_01'                    => [
                'string',
                'nullable',
            ],
            'x_02'                      => [
                'string',
                'nullable',
            ],
            'y_02'                      => [
                'string',
                'nullable',
            ],
            'p_x_02'                    => [
                'string',
                'nullable',
            ],
            'p_y_02'                    => [
                'string',
                'nullable',
            ],
            'x_03'                      => [
                'string',
                'nullable',
            ],
            'y_03'                      => [
                'string',
                'nullable',
            ],
            'p_x_03'                    => [
                'string',
                'nullable',
            ],
            'p_y_03'                    => [
                'string',
                'nullable',
            ],
            'x_04'                      => [
                'string',
                'nullable',
            ],
            'y_04'                      => [
                'string',
                'nullable',
            ],
            'p_x_04'                    => [
                'string',
                'nullable',
            ],
            'p_y_04'                    => [
                'string',
                'nullable',
            ],
            'x_05'                      => [
                'string',
                'nullable',
            ],
            'y_05'                      => [
                'string',
                'nullable',
            ],
            'p_x_05'                    => [
                'string',
                'nullable',
            ],
            'p_y_05'                    => [
                'string',
                'nullable',
            ],
            'x_06'                      => [
                'string',
                'nullable',
            ],
            'y_06'                      => [
                'string',
                'nullable',
            ],
            'p_x_06'                    => [
                'string',
                'nullable',
            ],
            'p_y_06'                    => [
                'string',
                'nullable',
            ],
            'x_07'                      => [
                'string',
                'nullable',
            ],
            'y_07'                      => [
                'string',
                'nullable',
            ],
            'p_x_07'                    => [
                'string',
                'nullable',
            ],
            'p_y_07'                    => [
                'string',
                'nullable',
            ],
            'x_08'                      => [
                'string',
                'nullable',
            ],
            'y_08'                      => [
                'string',
                'nullable',
            ],
            'p_x_08'                    => [
                'string',
                'nullable',
            ],
            'p_y_08'                    => [
                'string',
                'nullable',
            ],
            'x_09'                      => [
                'string',
                'nullable',
            ],
            'y_09'                      => [
                'string',
                'nullable',
            ],
            'p_x_09'                    => [
                'string',
                'nullable',
            ],
            'p_y_09'                    => [
                'string',
                'nullable',
            ],
            'x_10'                      => [
                'string',
                'nullable',
            ],
            'y_10'                      => [
                'string',
                'nullable',
            ],
            'p_x_10'                    => [
                'string',
                'nullable',
            ],
            'p_y_10'                    => [
                'string',
                'nullable',
            ],
            'x_11'                      => [
                'string',
                'nullable',
            ],
            'y_11'                      => [
                'string',
                'nullable',
            ],
            'p_x_11'                    => [
                'string',
                'nullable',
            ],
            'p_y_11'                    => [
                'string',
                'nullable',
            ],
            'x_12'                      => [
                'string',
                'nullable',
            ],
            'y_12'                      => [
                'string',
                'nullable',
            ],
            'p_x_12'                    => [
                'string',
                'nullable',
            ],
            'p_y_12'                    => [
                'string',
                'nullable',
            ],
            'x_101'                     => [
                'string',
                'nullable',
            ],
            'y_101'                     => [
                'string',
                'nullable',
            ],
            'p_x_101'                   => [
                'string',
                'nullable',
            ],
            'p_y_101'                   => [
                'string',
                'nullable',
            ],
            'x_102'                     => [
                'string',
                'nullable',
            ],
            'y_102'                     => [
                'string',
                'nullable',
            ],
            'p_x_102'                   => [
                'string',
                'nullable',
            ],
            'p_y_102'                   => [
                'string',
                'nullable',
            ],
            'x_103'                     => [
                'string',
                'nullable',
            ],
            'y_103'                     => [
                'string',
                'nullable',
            ],
            'p_x_103'                   => [
                'string',
                'nullable',
            ],
            'p_y_103'                   => [
                'string',
                'nullable',
            ],
            'x_104'                     => [
                'string',
                'nullable',
            ],
            'y_104'                     => [
                'string',
                'nullable',
            ],
            'p_x_104'                   => [
                'string',
                'nullable',
            ],
            'p_y_104'                   => [
                'string',
                'nullable',
            ],
            'x_105'                     => [
                'string',
                'nullable',
            ],
            'y_105'                     => [
                'string',
                'nullable',
            ],
            'p_x_105'                   => [
                'string',
                'nullable',
            ],
            'p_y_105'                   => [
                'string',
                'nullable',
            ],
            'x_106'                     => [
                'string',
                'nullable',
            ],
            'y_106'                     => [
                'string',
                'nullable',
            ],
            'p_x_106'                   => [
                'string',
                'nullable',
            ],
            'p_y_106'                   => [
                'string',
                'nullable',
            ],
            'x_107'                     => [
                'string',
                'nullable',
            ],
            'y_107'                     => [
                'string',
                'nullable',
            ],
            'p_x_107'                   => [
                'string',
                'nullable',
            ],
            'p_y_107'                   => [
                'string',
                'nullable',
            ],
            'x_108'                     => [
                'string',
                'nullable',
            ],
            'y_108'                     => [
                'string',
                'nullable',
            ],
            'p_x_108'                   => [
                'string',
                'nullable',
            ],
            'p_y_108'                   => [
                'string',
                'nullable',
            ],
            'x_109'                     => [
                'string',
                'nullable',
            ],
            'y_109'                     => [
                'string',
                'nullable',
            ],
            'p_x_109'                   => [
                'string',
                'nullable',
            ],
            'p_y_109'                   => [
                'string',
                'nullable',
            ],
            'x_110'                     => [
                'string',
                'nullable',
            ],
            'y_110'                     => [
                'string',
                'nullable',
            ],
            'p_x_110'                   => [
                'string',
                'nullable',
            ],
            'p_y_110'                   => [
                'string',
                'nullable',
            ],
            'x_111'                     => [
                'string',
                'nullable',
            ],
            'y_111'                     => [
                'string',
                'nullable',
            ],
            'p_x_111'                   => [
                'string',
                'nullable',
            ],
            'p_y_111'                   => [
                'string',
                'nullable',
            ],
            'x_112'                     => [
                'string',
                'nullable',
            ],
            'y_112'                     => [
                'string',
                'nullable',
            ],
            'p_x_112'                   => [
                'string',
                'nullable',
            ],
            'p_y_112'                   => [
                'string',
                'nullable',
            ],
        ];
    }
}
