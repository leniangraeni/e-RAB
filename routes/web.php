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

Route::get('/login', function () {
  return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/database/create', 'DatabaseController@create')->name('database.create');
Route::get('/database', 'DatabaseController@index')->name('database.index');
Route::post('/database/create', 'DatabaseController@store')->name('database.store');
Route::get('/database/{id_pekerjaan}/edit', 'DatabaseController@edit')->name('database.edit');
Route::patch('/database/{id_pekerjaan}/edit', 'DatabaseController@update')->name('database.update');
Route::delete('/database/{post}/delete', 'DatabaseController@destroy')->name('database.destroy');

Route::get('/database/galiandanurugan', 'DatabaseController@galiandanurugan')->name('galiandanurugan');
Route::get('/database/galiandanurugan/{post}', 'DatabaseController@showgaliandanurugan')->name('database.showgaliandanurugan');

Route::get('/database/instalasiair', 'DatabaseController@instalasiair')->name('instalasiair');
Route::get('/database/instalasiair/{post}', 'DatabaseController@showinstalasiair')->name('database.showinstalasiair');

Route::get('/database/instalasilistrik', 'DatabaseController@instalasilistrik')->name('instalasilistrik');
Route::get('/database/instalasilistrik/{post}', 'DatabaseController@showinstalasilistrik')->name('database.showinstalasilistrik');

Route::get('/database/kusendanpintu', 'DatabaseController@kusendanpintu')->name('kusendanpintu');
Route::get('/database/kusendanpintu/{post}', 'DatabaseController@showkusendanpintu')->name('database.showkusendanpintu');
 
Route::get('/database/lantaidinding', 'DatabaseController@lantaidinding')->name('lantaidinding');
Route::get('/database/lantaidinding/{post}', 'DatabaseController@showlantaidinding')->name('database.showlantaidinding');

Route::get('/database/pasangandanplesteran', 'DatabaseController@pasangandanplesteran')->name('pasangandanplesteran');
Route::get('/database/pasangandanplesteran/{post}', 'DatabaseController@showpasangandanplesteran')->name('database.showpasangandanplesteran');

Route::get('/database/pekerjaanatap', 'DatabaseController@pekerjaanatap')->name('pekerjaanatap');
Route::get('/database/pekerjaanatap/{post}', 'DatabaseController@showpekerjaanatap')->name('database.showpekerjaanatap');

Route::get('/database/pekerjaanplafon', 'DatabaseController@pekerjaanplafon')->name('pekerjaanplafon');
Route::get('/database/pekerjaanplafon/{post}', 'DatabaseController@showpekerjaanplafon')->name('database.showpekerjaanplafon');

Route::get('/database/pembersihan', 'DatabaseController@pembersihan')->name('pembersihan');
Route::get('/database/pembersihan/{post}', 'DatabaseController@showpembersihan')->name('database.showpembersihan');

Route::get('/database/pengecatan', 'DatabaseController@pengecatan')->name('pengecatan');
Route::get('/database/pengecatan/{post}', 'DatabaseController@showpengecatan')->name('database.showpengecatan');

Route::get('/database/perlengkapanpintu', 'DatabaseController@perlengkapanpintu')->name('perlengkapanpintu');
Route::get('/database/perlengkapanpintu/{post}', 'DatabaseController@showperlengkapanpintu')->name('database.showperlengkapanpintu');

Route::get('/database/pondasidanpintu', 'DatabaseController@pondasidanpintu')->name('pondasidanpintu');
Route::get('/database/pondasidanpintu/{post}', 'DatabaseController@showpondasidanpintu')->name('database.showpondasidanpintu');

Route::get('/database/sanitair', 'DatabaseController@sanitair')->name('sanitair');
Route::get('/database/sanitair/{post}', 'DatabaseController@showsanitair')->name('database.showsanitair');

Route::get('/hitungRAB/create', 'HitungController@create')->name('hitung.create');
Route::post('/hitungRAB/create', 'HitungController@store')->name('hitung.store');
Route::get('/hitungRAB/{id_pekerjaan}/edit', 'HitungController@edit')->name('hitung.edit');
Route::get('/hitungRAB', 'HitungController@index')->name('hitung.index');
Route::patch('/hitungRAB{id_pekerjaan}/edit', 'HitungController@update')->name('hitung.update');
Route::delete('hitungRAB/{post}/delete', 'HitungController@destroy')->name('hitung.destroy');
