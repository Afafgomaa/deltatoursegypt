<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use SoftDeletes;
    protected $fillable = ['image', 'title', 'desc', 'add_to_home_page'];

    protected $dates = ['deleted_at'];
}
