<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Highlight extends Model
{
    use softDeletes;
    protected $fillable = ['name'];

    protected $dates = ['deleted_at'];
}
