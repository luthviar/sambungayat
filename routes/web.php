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


// Daftar Surat Classic
Route::get('/classic/pilihsurat','PertanyaanController@index');

// Mulai Pertanyaan Classic
Route::get('/classic/{id}','PertanyaanController@quest');


Route::get('/',['as' => '/','uses' => 'UserController@index']);

Route::get('/registrasi',['as' => '/registrasi','uses' => 'UserController@registrasi']);

Route::post('/registrasi','UserController@registrasi_submit');


Route::get('/logout',['as' => '/logout','uses' => 'UserController@logout']);


Route::get('/login',['as' => '/login','uses' => 'UserController@login']);

Route::post('/login','UserController@login_submit');

Route::get('/ganti_profil',['as' => '/ganti_profil','uses' => 'UserController@ganti_profil']);



Route::post('/ganti_profil',['as' => '/ganti_profil','uses' => 'UserController@ganti_profil_submit']);



Route::get('/test',['as' => '/test','uses' => 'TestController@awal_pertanyaan']);

Route::get('test/{valueBenar}',['as' => 'test/', 'uses' => 'TestController@pertanyaan']);

Route::get('/classic/{nomor}', 'QuranController@pertanyaan');

Route::get('contohquiz', function () {
    return view('quiz');
});

Route::get('index', function () {
    return view('index');
});