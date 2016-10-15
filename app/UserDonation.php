<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDonation extends Model
{
    use SoftDeletes;

    protected $table = 'user_donation';
    protected $dates = ['deleted_at'];
}
