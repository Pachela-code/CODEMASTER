<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Press extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
    ];

    public function media()
    {
        return $this->hasOne(PressMedia::class);
    }
}
