<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use DB;

class DBTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testConnect()
    {
        $dbName = DB::connection()->getDatabaseName();

        $this->assertTrue($dbName === env('DB_DATABASE'));
    }
}
