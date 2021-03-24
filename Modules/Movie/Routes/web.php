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

Route::prefix('movie')->group(function() {
    Route::middleware(['auth'])->group(function(){
        Route::get('/create/{id}', 'MovieController@create')->name("add_movie");
        Route::post("/create", 'MovieController@store')->name("save_movie");
    });
});
