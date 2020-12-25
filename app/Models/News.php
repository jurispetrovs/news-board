<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_id',
        'title',
        'channel_id',
        'is_paid',
        'url',
        'picture',
        'picture_alt',
        'publish_date',
    ];
}
