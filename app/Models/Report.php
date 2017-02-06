<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

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
        return DB::table('companies')
            ->select(
                    'companies.quota',
                    'companies.name', 
                    DB::raw('SUM(reports.transferrend) as total')
            )
            ->join('users', 'companies.id', '=', 'users.company_id')
            ->join('reports', 'users.id', '=', 'reports.user_id')
            ->havingRaw('SUM(reports.transferrend) > companies.quota')
            ->groupBy('companies.id')
            ->get();
    }

    public static function getList() {
        return static::select('reports.*', 'users.name as user')
            ->leftJoin('users', 'users.id', '=', 'reports.user_id')
            ->get();
    }
}
