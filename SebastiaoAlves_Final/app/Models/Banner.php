<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'remark',
        'link'
    ];

    public function media()
    {
        return $this->hasMany(BannerMedia::class);
    }
}
