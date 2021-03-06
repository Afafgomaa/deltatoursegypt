<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Programs extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

  
  public function Highlights()
  {
    return $this->belongsToMany('App\Highlight');
  }
  public function Sights()
  {
    return $this->belongsToMany('App\Sights');
  }
  public function Accommodations()
  {
    return $this->belongsToMany('App\Accommodations');
  }
  public function Addons()
  {
    return $this->belongsToMany('App\Addon');
  }

  public function related()
  {
    return $this->belongsToMany('App\related');
  }

  public function page()
  {
    return $this->belongsTo('App\Pages','pages_id');
  }
  

  

  

}
