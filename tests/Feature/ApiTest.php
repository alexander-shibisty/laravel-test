<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiTest extends TestCase
{

    /* Company */
    public function testAddCompany()
    {
        $response = $this->post('/api/companies', [

        ]);

        $response->assertTrue(false);
    }

    public function testEditCompany()
    {
        $response = $this->post('/api/companies/2', [

        ]);

        $response->assertTrue(false);
    }

    public function testRemoveCompany()
    {
        $response = $this->post('/api/companies/1', [

        ]);

        $response->assertTrue(false);
    }

    /* User */
    public function testAddUser()
    {
        $response = $this->post('/api/users', [

        ]);

        $response->assertTrue(false);
    }

    public function testEditUser()
    {
        $response = $this->update('/api/users/1', [

        ]);

        $response->assertTrue(false);
    }

    public function testRemoveUser()
    {
        $response = $this->delete('/api/users/2', [

        ]);

        $response->assertTrue(false);
    }

}