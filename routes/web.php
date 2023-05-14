<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('user', 'App\Http\Controllers\TestController@createUser');
Route::get('user', 'App\Http\Controllers\TestController@getUser');

Route::post('listProperty', 'App\Http\Controllers\TestController@listProperty');
Route::get('listProperty', 'App\Http\Controllers\TestController@getPropertyListed');

Route::post('shortlistProperty', 'App\Http\Controllers\TestController@shortlistProperty');
Route::get('shortlistProperty', 'App\Http\Controllers\TestController@getShortlistProperty');

Route::post('propertySold', 'App\Http\Controllers\TestController@propertySold');


Route::get('/', function () {
//    return 'Hi';
    return view('welcome');
});

Route::post('test', 'App\Http\Controllers\TestController@test');

