<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sights extends Model
{
    use SoftDeletes;
    protected $fillable = ['name'];

    protected $dates = ['deleted_at'];

    public function Programs()
    {
    	return $this->belongsToMany('App\Programs');
    }
}
