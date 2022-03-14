<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register' , 'App\Http\Controllers\AuthController@register');
Route::post('login' , 'App\Http\Controllers\AuthController@login');


Route::get('list_cars','App\Http\Controllers\apiController@list_cars');
Route::get('list_houses','App\Http\Controllers\apiController@list_houses');
Route::post('add_car','App\Http\Controllers\apiController@add_car');
Route::post('add_house','App\Http\Controllers\apiController@add_house');
Route::post('book_car','App\Http\Controllers\apiController@book_car');
Route::post('book_house','App\Http\Controllers\apiController@book_house');




