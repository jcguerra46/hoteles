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

Route::get('/', function () {
    return view('welcome');
});

Route::get("hoteles", "HotelController@index");
Route::get("hoteles/{id}", "HotelController@show");
Route::post("hoteles", "HotelController@store");
Route::put("hoteles/{id}", "HotelController@update");
Route::delete("hoteles/{id}", "HotelController@destroy");