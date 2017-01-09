<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donations extends Model
{
    use SoftDeletes;
  
    protected $dates = ['deleted_at'];
}
