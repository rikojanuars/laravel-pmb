<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model implements Authenticatable
{
    use AuthenticableTrait;

    protected $table = 'admin';
    protected $fillable = ['username', 'password'];

    protected $hidden = [
        'password',
    ];
}