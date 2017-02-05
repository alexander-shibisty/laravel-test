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

Route::post('/users', function (Request $request) {
    return response()->json([]);
});

Route::put('/users/{id}', function (Request $request) {
    return response()->json([]);
});

Route::delete('/users/{id}', function (Request $request) {
    return response()->json([]);
});

Route::post('/companies', function (Request $request) {
    return response()->json([]);
});

Route::put('/companies/{id}', function (Request $request) {
    return response()->json([]);
});

Route::delete('/companies/{id}', function (Request $request) {
    return response()->json([]);
});
