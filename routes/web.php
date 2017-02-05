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

Route::get('/companies', 'CompaniesController@show');

Route::get('/users', 'UsersController@show');

Route::get('/logs', 'ReportsController@showLogs');
Route::get('/reports', 'ReportsController@showReports');

