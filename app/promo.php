<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class promo extends Model
{
    use SoftDeletes;
    protected $fillable = ['code'];
}
