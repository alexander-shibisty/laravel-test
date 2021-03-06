<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'id',
        'name',
        'quota',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [];
}
