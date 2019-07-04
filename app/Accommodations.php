<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accommodations extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','location','tripadvisor_link','small_iamge','thumbnail_iamge','gallery_image','brief'];
    protected $dates = ['deleted_at'];

    protected $casts = [
        'gallery_image' => 'array',
    ];
    public function Programs()
    {
    	return $this->belongsToMany('App\Programs');
    }
}

