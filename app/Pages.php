<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = ['name','title', 'desc', 'parent_id'];

    public function subPages()
    {
        return $this->hasMany('App\Pages', 'parent_id');
    }
}
