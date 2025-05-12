<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    protected $fillable = [
        'title',
        'description',
        'preacher',
        'date',
        'location',
        'video_url',
        'audio_url',
        'thumbnail_url',
    ];
}
