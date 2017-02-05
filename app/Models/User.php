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
        'company_id',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [

    ];

    public static function getItem($id) {
        return static::where('id', $id)
            ->first();
    }

    public static function getList() {
        return static::select('users.*', 'companies.name as company')
            ->leftJoin('companies', 'companies.id', '=', 'users.company_id')
            ->get();
    }
}
