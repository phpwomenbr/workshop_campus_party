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
    return view('home');
});

Route::get('/instalacao_php', function () {
    return view('instalacao_php');
});

Route::get('/php', function () {
    return view('php');
});

Route::get('/aplicativo_to_do', function () {
    return view('aplicativo_to_do');
});

Route::get('/orientacao_a_objetos', function () {
    return view('orientacao_a_objetos');
});

Route::get('/banco_de_dados', function () {
    return view('banco_de_dados');
});

Route::get('/estrutura', function () {
    return view('estrutura');
});

Route::get('/extras', function () {
    return view('extras');
});

