<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'id',
        'name',
        'email',
        'company_id'
        'created_at',
        'updated_at',
    ];

    protected $hidden = [

    ];
}
