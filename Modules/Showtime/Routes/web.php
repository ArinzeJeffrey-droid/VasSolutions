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

Route::prefix('showtime')->group(function() {
    Route::get('/', 'ShowtimeController@index');
    Route::get('/{id}', 'ShowtimeController@show')->name("view_showtime");
});