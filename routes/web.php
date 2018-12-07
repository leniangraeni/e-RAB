<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/database/create', 'DatabaseController@create')->name('database.create');
Route::get('/database', 'DatabaseController@index')->name('database.index');
Route::post('/database/create', 'DatabaseController@store')->name('database.store');
Route::get('/database/{id_barang}/edit', 'DatabaseController@edit')->name('database.edit');
Route::patch('/database/{id_barang}/edit', 'DatabaseController@update')->name('database.update');
Route::delete('/database/{id_barang}/delete', 'DatabaseController@destroy')->name('database.destroy');
