<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'picture_path',
        'text',
        'keywords',
        'description',
    ];
}
