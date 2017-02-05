<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@show');

Route::get('/companies', 'CompaniesController@showList');
Route::get('/companies/{id}', 'CompaniesController@editItem')
    ->where(['id' => '[0-9]+'])
    ->name('editCompany');
Route::get('/companies/add', 'CompaniesController@addItem')
    ->name('addCompany');

Route::get('/users', 'UsersController@showList');
Route::get('/users/{id}', 'UsersController@editItem')
    ->where(['id' => '[0-9]+'])
    ->name('editUser');
Route::get('/users/add', 'UsersController@addItem')
    ->name('addUser');

Route::get('/logs', 'ReportsController@showLogs');
Route::get('/reports', 'ReportsController@showReports');

