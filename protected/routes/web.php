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



Route::get('/classic/{nomor}', 'QuranController@pertanyaan');

Route::get('/home',['as' => '/home','uses' => 'UserController@home']);

Route::get('/contact',['as' => '/contact','uses' => 'UserController@contact_us']);

Route::get('/quiz',['as' => '/quiz','uses' => 'UserController@list_surah']);

Route::post('/quiz',['as' => '/quiz','uses' => 'UserController@list_surah_submit']);

Route::get('/quiz_classic_first',['as' => '/quiz_classic_first','uses' => 'UserController@quiz_classic_first']);


Route::post('/quiz_classic_first',['as' => 'quiz_classic_first_submit/', 'uses' => 'UserController@quiz_classic_first_submit']);


Route::get('/quiz2',['as' => '/quiz2','uses' => 'UserController@quiz2']);


// Sementara untuk lihat template asli
//quiz time attack

Route::get('/quiz_time',['as' => '/quiz_time','uses' => 'UserController@list_surah_time']);

Route::post('/quiz_time',['as' => '/quiz_time','uses' => 'UserController@list_surah_time_submit']);

Route::get('/quiz_time_first',['as' => '/quiz_time_first','uses' => 'UserController@quiz_time_first']);


Route::post('/quiz_time_first',['as' => 'quiz_time_first/', 'uses' => 'UserController@quiz_time_first_submit']);



Route::get('/kill',['as' => 'killSession/', 'uses' => 'UserController@killSession']);


// untuk feedback

Route::get('/feedback',['as' => 'feedback','uses' => 'UserController@showFeedbackForm']);

Route::post('/feedback',['as' => 'feedback','uses' => 'UserController@storeFeedback']);


//
Route::get('/highscore',['as' => '/highscore','uses' => 'UserController@highscore']);


//kodingan versi1

Route::get('/lol','TestController@index');

Route::post('/lol','TestController@index_submit');

Route::get('/test',['as' => '/test','uses' => 'UserController@awal_pertanyaan']);

Route::get('test/{valueBenar}',['as' => 'test/', 'uses' => 'TestController@pertanyaan']);

Route::get('elements', function () {
    return view('elements');
});

Route::get('generic', function () {
    return view('generic');
});

Route::get('/list-user', 'UserController@showAll');

Route::get('/muhasabah', ['as' => '/muhasabah','uses' => 'MuhasabahController@index']);