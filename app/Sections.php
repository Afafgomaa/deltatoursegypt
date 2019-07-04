<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sections extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];


    public function page()
    {
        return $this->belongsTo('App\Pages');
    }


}
