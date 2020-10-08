<?php

use Illuminate\Support\Facades\Route;


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


Route::get('/configIndex', 'ConfigController@index') -> name('configIndex');
Route::get('/configurazione/{id}', 'ConfigController@show') -> name('config-show');
Route::get('/create/configurazione', 'ConfigController@create') -> name('config-create');
Route::post('/create/configurazione', 'ConfigController@store') -> name('config-store');


Route::get('/', 'StanzaController@index') -> name('stanze-index');
Route::get('/stanza/{id}','StanzaController@show') -> name('stanza-show');
Route::get('/create/stanze','StanzaController@create') -> name('stanza-create');
Route::post('/create/stanze','StanzaController@store') -> name('stanza-store');
