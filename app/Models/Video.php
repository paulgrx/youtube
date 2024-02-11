<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'channel_name', 'photo_url', 'duration', 'views_count', 'realise_date','channel_photo_url', 'url'
    ];
}
