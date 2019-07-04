<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Addon extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];
    public function Programs()
    {
    	return $this->belongsToMany('App\Programs');
    }
}
