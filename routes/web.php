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

Route::get('/{msg?}','WelcomeController@welcome')->name('welcome');

Route::post('/','WelcomeController@create')->name('create');

Route::get('/usuario','UsuarioController@index')->name('usuario.index'); 