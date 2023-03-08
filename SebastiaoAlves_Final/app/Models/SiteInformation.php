<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SiteInformation extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'email',
        'phone',
        'address',
        'author_name',
        'author_text',
        'latest_text',
        'facebook_url',
        'instagram_url',
        'linkedin_url'
    ];

    public function baseMedia()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }
}
