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


Route::get('/manifestacao', 'ManifestacaoController@manifestacao');

Route::post('/manifestacao', 'ManifestacaoController@store');

//Route::get('/manifestacao', 'ManifestacaoController@create');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
