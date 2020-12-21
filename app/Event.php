<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class Event extends Model implements HasMedia
{
    use HasMediaTrait;

    public $table = 'events';

    protected $appends = [
        'ev_pic',
    ];

    protected $dates = [
        'ev_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ev_title',
        'ev_date',
        'ev_text',
        'ev_cat',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const EV_CAT_SELECT = [
        '2015_2016' => '2015-2016 Учебный год',
        '2016_2017' => '2016-2017 Учебный год',
        '2017_2018' => '2017-2018 учебный год',
        '2018_2019' => '2018-2019 Учебный год',
        '2019_2020' => '2019-2020 Учебный год',
        '2020_2021' => '2020-2021 Учебный год',
        '2021_2022' => '2021-2022 Учебный год',
        '2022_2023' => '2022-2023 Учебный год',
        '2023_2024' => '2023-2024 Учебный год',
        '2024_2025' => '2024-2025 Учебный год',
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

    public function getEvDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEvDateAttribute($value)
    {
        $this->attributes['ev_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEvPicAttribute()
    {
        $files = $this->getMedia('ev_pic');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
            $item->preview   = $item->getUrl('preview');
        });

        return $files;
    }
}
