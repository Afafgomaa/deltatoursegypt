<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Programs extends Model
{
    use softDeletes;

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

   

  public function page()
  {
      return $this->belongsTo('App\Pages','page_id');
  }
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


}
