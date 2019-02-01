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

// Chamando um controle pela rota
Route::get('/name', 'MyController@getName');

// Chamando um controle pela rota
Route::get('/age', 'MyController@getAge');

// Passando parâmetros para o controlador
Route::get('/multiply/{n1}/{n2}', 'MyController@multiply');

// Passando parâmetros para o controlador
Route::get('/names/{id}', 'MyController@getNameByID');