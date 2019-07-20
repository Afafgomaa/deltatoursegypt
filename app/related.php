<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class related extends Model
{
    public function progams()
    {
         return $this->belongsToMany('App\programs');
    }
    public function river_excursion()
    {
         return $this->belongsToMany('App\river_excursion');
    }
}
