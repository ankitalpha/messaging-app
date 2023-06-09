<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('user', 'App\Http\Controllers\TestController@createUser');
//Route::post('listProperty', 'App\Http\Controllers\TestController@listProperty');
//Route::get('listProperty', 'App\Http\Controllers\TestController@getPropertyListed');
//
//Route::post('shortlistProperty', 'App\Http\Controllers\TestController@shortlistProperty');
//Route::get('shortlistProperty', 'App\Http\Controllers\TestController@getShortlistProperty');
