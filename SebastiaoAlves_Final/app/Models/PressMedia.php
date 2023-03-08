<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PressMedia extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'press_id',
        'media_id',
    ];

    public function baseMedia()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }
}
