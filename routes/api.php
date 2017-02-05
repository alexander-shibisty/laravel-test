<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/users', 'Api\UsersApiController@add');
Route::put('/users/{id}', 'Api\UsersApiController@edit');
Route::delete('/users/{id}', 'Api\UsersApiController@remove');

Route::post('/companies', 'Api\CompaniesApiController@add');
Route::put('/companies/{id}', 'Api\CompaniesApiController@edit');
Route::delete('/companies/{id}', 'Api\CompaniesApiController@remove');
