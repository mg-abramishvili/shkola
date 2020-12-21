<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class Teacher extends Model implements HasMedia
{
    use HasMediaTrait;

    public $table = 'teachers';

    protected $appends = [
        'tch_pic',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'tch_name',
        'tch_spec',
        'tch_text',
        'tch_category',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const TCH_CATEGORY_SELECT = [
        'tch_category_01' => 'Директор',
        'tch_category_02' => 'Административно-управленческий персонал',
        'tch_category_03' => 'Психолого- логопедическая служба',
        'tch_category_04' => 'Московский кадетский музыкальный корпус(мальчики) Коломенская набережная, дом 20',
        'tch_category_05' => 'Московский кадетский музыкальный корпус(девочки) Судостроительная улица, дом 43, к.2',
        'tch_category_06' => 'Школа разных возможностей. Нагатинская набережная, дом 56',
        'tch_category_07' => 'Непоседы Нагатинская набережная, дом 58, корпус 3',
        'tch_category_08' => 'Детство Нагатинская набережная, дом 46, корпус 1',
        'tch_category_09' => 'Кнопочки Судостроительная улица, дом 30, корпус 1',
        'tch_category_10' => 'Мозаика Коломенская улица, дом 27, корпус 2',
        'tch_category_11' => 'Бригантина Корабельная улица, дом 11А',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getTchPicAttribute()
    {
        $file = $this->getMedia('tch_pic')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }
}
