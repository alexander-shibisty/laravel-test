<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';

    protected $fillable = [
        'id',
        'transferrend',
        'resource',
        'user_id',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [];

    public static function getViolation() {
        
    }

    public static function getList() {
        return static::select('reports.*', 'users.name as user')
            ->leftJoin('users', 'users.id', '=', 'reports.user_id')
            ->get();
    }
}
