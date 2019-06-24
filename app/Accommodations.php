<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Accommodations extends Model
{
    use softDeletes;

    protected $fillable = ['name','location','tripadvisor_link','small_iamge','thumbnail_iamge','gallery_image','brief'];
    protected $dates = ['deleted_at'];

    protected $casts = [
        'gallery_image' => 'array',
    ];
}

