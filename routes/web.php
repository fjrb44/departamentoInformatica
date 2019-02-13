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

Route::resource('ciclos', 'CicloController');

Route::get('/', 'StaticController@index');
Route::get('/curso/{id}', 'CursoController@show');

Route::resource('miembros', 'MiembroController');
Route::resource('interfazs', 'InterfazController');
