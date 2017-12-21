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

Route::resource('Acara', 'AcaraController');
Route::resource('Notulensi', 'NotulensiController');
Route::resource('Document', 'DocumentController');
Route::resource('Tugas', 'TugasController');
Route::resource('komentar', 'KomentarController');

Route::get('/room/notulensi/{id}', 'NotulensiController@index');
Route::get('/room/upload', 'DocumentController@index', 'DocumentController@store');
Route::get('/room/tugas', 'TugasController@create');
Route::get('/room/{id_acara}', 'AcaraController@index');
Route::get('/room/{id_acara}/notulensi/{id_note}', 'NotulensiController@index');
Route::get('/room/create/{id_acara}', 'NotulensiController@create');
Route::get('/make/{id_acara}', 'NotulensiController@make');
Route::get('/room/tugas/{id_acara}', 'TugasController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
