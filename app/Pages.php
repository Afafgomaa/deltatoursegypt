<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Pages extends Model
{

    use softDeletes;
    protected $fillable = ['name','title', 'desc','slug', 'parent_id'];


    protected $dates = ['deleted_at']; 


    public function subPages()
    {
        return $this->hasMany('App\Pages', 'parent_id');
    }

    public function mainPage()
    {
        return $this->belongsTo('App\Pages', 'id');
    }

    public function section()
    {
        return $this->hasOne('App\Sections');
    }

   

}
