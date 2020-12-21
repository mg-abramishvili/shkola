<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class News extends Model implements HasMedia
{
    use HasMediaTrait;

    public $table = 'news';

    protected $appends = [
        'nw_pic',
    ];

    protected $dates = [
        'nw_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nw_title',
        'nw_date',
        'nw_text',
        'nw_phs_id',
        'created_at',
        'updated_at',
        'deleted_at',
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

    public function getNwDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setNwDateAttribute($value)
    {
        $this->attributes['nw_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getNwPicAttribute()
    {
        $file = $this->getMedia('nw_pic')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function nw_phs()
    {
        return $this->belongsTo(Photoalbum::class, 'nw_phs_id');
    }
}
