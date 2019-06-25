<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Programs extends Model
{
    use softDeletes;

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

}
