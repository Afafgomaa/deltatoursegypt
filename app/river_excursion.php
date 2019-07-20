<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class river_excursion extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];


  public function related()
  {
    return $this->belongsToMany('App\related');
  }
  public function page()
  {
    return $this->belongsTo('App\Pages','pages_id');
  }
}
