<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Sights extends Model
{
    use softDeletes;
    protected $fillable = ['name'];

    protected $dates = ['deleted_at'];
}
