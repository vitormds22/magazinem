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

Route::get('/', 'ClienteController@index')->name('clientes.index');

Route::get('/create', 'ClienteController@create')->name('clientes.create');

Route::post('/store', 'ClienteController@store')->name('clientes.store');