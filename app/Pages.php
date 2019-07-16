<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pages extends Model
{

    use SoftDeletes;
    protected $guarded = ['id'];


    protected $dates = ['deleted_at']; 


    public function subPages()
    {
        return $this->hasMany('App\Pages', 'parent_id');
    }

    public function mainPage()
    {
        return $this->belongsTo('App\Pages', 'id');
    }

    public function program()
    {
        return $this->hasMany('App\Programs','pages_id');
    }
    public function section()
    {
        return $this->hasMany('App\Sections','page_id');
    }
    public function faq()
    {
        return $this->belongsToMany('App\faqs');
    }

   

   

}
