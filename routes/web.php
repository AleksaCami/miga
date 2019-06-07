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

Route::get('/', 'PocetnaController@index');
Route::get('/create', 'PocetnaController@create');
Route::post('/store', 'PocetnaController@store');
Route::get('/edit/{id}', 'PocetnaController@edit');
Route::put('/update/{id}', 'PocetnaController@update');
Route::delete('/destroy/{id}', 'PocetnaController@destroy');
