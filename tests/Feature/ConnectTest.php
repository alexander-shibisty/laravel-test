<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ConnectTest extends TestCase
{

    public function testIndexConnect()
    {
        $response = $this->get('/');

        $response->assertSee('Добро пожаловать!');
    }


    /* Company */
    public function testcompaniesConnect()
    {
        $response = $this->get('/companies');

        $response->assertSee('Список компаний');
    }

    public function testcompaniesEditConnect()
    {
        $response = $this->get('/companies/1');

        $response->assertSee('Редактирование компании');
    }

    public function testcompaniesAddConnect()
    {
        $response = $this->get('/companies/add');

        $response->assertSee('Редактирование компании');
    }

    /* User */
    public function testusersConnect()
    {
        $response = $this->get('/users');

        $response->assertSee('Пользователи');
    }

    public function testusersEditConnect()
    {
        $response = $this->get('/users/1');

        $response->assertSee('Редактирование пользователя');
    }

    public function testusersAddConnect()
    {
        $response = $this->get('/users/add');

        $response->assertSee('Редактирование пользователя');
    }

    /* Report */
    public function testlogsConnect()
    {
        $response = $this->get('/logs');

        $response->assertSee('Логи');
    }

    public function testreportsConnect()
    {
        $response = $this->get('/reports');

        $response->assertSee('Сообщения о превышение');
    }
}