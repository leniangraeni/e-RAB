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

Route::get('/hitung/detail-print', function () {
    return view('hitung.detail-print');
});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', 'HitungController@index')->name('home');

    Route::get('/harga', 'HargaController@index')->name('harga.index');
    Route::get('/harga/create', 'HargaController@create')->name('harga.create');
    Route::post('/harga/create', 'HargaController@store')->name('harga.store');
    Route::get('/harga/{id}/edit', 'HargaController@edit')->name('harga.edit');
    Route::patch('/harga/{id}/edit','HargaController@update')->name('harga.update');

    //Route::get('/hitung', 'HitungController@index')->name('hitung.index');
    Route::get('/hitung/create', 'HitungController@create')->name('hitung.create');
    Route::post('/hitung/create', 'HitungController@store')->name('hitung.store');
    Route::get('/hitung/{id}/edit', 'HitungController@edit')->name('hitung.edit');
    Route::patch('/hitung/{id}/edit','HitungController@update')->name('hitung.update');

    Route::get('/hitung/{id}/detail', 'HitungController@detail')->name('hitung.detail');
});