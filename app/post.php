<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['image', 'title', 'desc', 'add_to_home_page'];
}
