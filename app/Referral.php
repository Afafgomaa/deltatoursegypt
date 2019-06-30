<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Referral extends Model
{
    use softDeletes;
    protected $fillable = ['code'];
}
