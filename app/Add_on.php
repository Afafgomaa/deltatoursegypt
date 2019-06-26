<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Add_on extends Model
{
    use softDeletes;
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];
}
