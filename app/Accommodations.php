<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodations extends Model
{
    protected $fillable = ['small_iamge','thumbnail_iamge','gallery_image', 'name','location','tripadvisor_link','brief'];
}
