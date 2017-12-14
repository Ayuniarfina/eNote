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
Route::resource('Sidebar', 'SidebarController');

Route::get('/room/notulensi/{id}', 'NotulensiController@index');
Route::get('/room/{id_acara}', 'AcaraController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
