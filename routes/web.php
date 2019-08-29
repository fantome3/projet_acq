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

Route::get('/don', function () {
    return view('container.donation');
});

Route::get('/activiter', function () {
    return view('container.activiter');
});

Route::get('/bureau', 'MembreBureauController@index');

Route::get('/cotisation', 'CotisationController@index');

Auth::routes();

Route::get('/profil', 'HomeController@index')->name('profil');

Route::get('/adherantActif', 'AdherantController@actif')->name('adh_actif');

Route::get('/adherantPassif', 'AdherantController@passif')->name('adh_passif');
