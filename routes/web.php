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


Route::get('/', 'StaticController@getIndex');

Route::get('/miembros', 'MiembroController@index');
Route::get('/miembros/{miembro}', 'MiembroController@show');

Route::get('/ciclos', 'CicloController@index');
Route::get('/ciclos/{ciclo}', 'CicloController@show');


Route::get('/prueba', 'StaticController@prueba');
