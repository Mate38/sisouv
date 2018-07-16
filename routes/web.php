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

Route::get('/forma', function () {
    return view('manifestacao.forma');
});

Route::get('/cadastro', function () {
    return view('manifestacao.cadastro');
});

Route::get('/manifestacao', function () {
    return view('manifestacao.manifestacao');
});

//Route::get('/manifestacao', 'ManifestacaoController@create');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
