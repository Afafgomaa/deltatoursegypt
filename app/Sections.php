<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Sections extends Model
{
    use softDeletes;
    protected $guarded = ['id'];


    public function page()
    {
        return $this->belongsTo('App\Pages');
    }


}
