<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    protected $guard='admin';

    protected $fillable = [
        'name', 'email','mobile_number', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
