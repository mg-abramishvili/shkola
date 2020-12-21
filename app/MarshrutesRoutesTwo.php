<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class MarshrutesRoutesTwo extends Model
{
    public $table = 'marshrutes_routes_twos';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'marshrutesroutes_title',
        'marshrutesroutes_floor_id',
        'marshrutesroutes_floorsecond_id',
        'x_01',
        'y_01',
        'p_x_01',
        'p_y_01',
        'x_02',
        'y_02',
        'p_x_02',
        'p_y_02',
        'x_03',
        'y_03',
        'p_x_03',
        'p_y_03',
        'x_04',
        'y_04',
        'p_x_04',
        'p_y_04',
        'x_05',
        'y_05',
        'p_x_05',
        'p_y_05',
        'x_06',
        'y_06',
        'p_x_06',
        'p_y_06',
        'x_07',
        'y_07',
        'p_x_07',
        'p_y_07',
        'x_08',
        'y_08',
        'p_x_08',
        'p_y_08',
        'x_09',
        'y_09',
        'p_x_09',
        'p_y_09',
        'x_10',
        'y_10',
        'p_x_10',
        'p_y_10',
        'x_11',
        'y_11',
        'p_x_11',
        'p_y_11',
        'x_12',
        'y_12',
        'p_x_12',
        'p_y_12',
        'x_101',
        'y_101',
        'p_x_101',
        'p_y_101',
        'x_102',
        'y_102',
        'p_x_102',
        'p_y_102',
        'x_103',
        'y_103',
        'p_x_103',
        'p_y_103',
        'x_104',
        'y_104',
        'p_x_104',
        'p_y_104',
        'x_105',
        'y_105',
        'p_x_105',
        'p_y_105',
        'x_106',
        'y_106',
        'p_x_106',
        'p_y_106',
        'x_107',
        'y_107',
        'p_x_107',
        'p_y_107',
        'x_108',
        'y_108',
        'p_x_108',
        'p_y_108',
        'x_109',
        'y_109',
        'p_x_109',
        'p_y_109',
        'x_110',
        'y_110',
        'p_x_110',
        'p_y_110',
        'x_111',
        'y_111',
        'p_x_111',
        'p_y_111',
        'x_112',
        'y_112',
        'p_x_112',
        'p_y_112',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function marshrutesroutes_floor()
    {
        return $this->belongsTo(MarshrutesFloor::class, 'marshrutesroutes_floor_id');
    }

    public function marshrutesroutes_floorsecond()
    {
        return $this->belongsTo(MarshrutesFloor::class, 'marshrutesroutes_floorsecond_id');
    }
}
