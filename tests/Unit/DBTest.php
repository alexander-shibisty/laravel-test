<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use DB;

class DBTest extends TestCase
{

    public function testConnect()
    {
        $dbName = DB::connection()->getDatabaseName();

        $this->assertTrue($dbName === env('DB_DATABASE'));
    }

    public function testGetViolation() {
        $this->assertTrue(false);
    }

    public function getUsersListWithCompanies() {
        $this->assertTrue(false);
    }
}
