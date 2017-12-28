<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'picture_path',
        'text',
        'keywords',
        'description',
    ];
}