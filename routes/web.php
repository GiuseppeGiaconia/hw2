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



Route::get('descri', 'App\Http\Controllers\DescriController@visualizza' );

Route::get('login', 'App\Http\Controllers\LoginController@login_form' );
Route::post('login', 'App\Http\Controllers\LoginController@do_login' );

Route::get('register', 'App\Http\Controllers\RegisterController@register_form' );
Route::post('register', 'App\Http\Controllers\RegisterController@do_register' );
Route::get('/register/email/{query}', 'App\Http\Controllers\RegisterController@checkEmail' );

Route::get('logout', 'App\Http\Controllers\LogoutController@logout' );

Route::get('home', 'App\Http\Controllers\HomeController@home');
Route::get('home_api', 'App\Http\Controllers\HomeController@api');


Route::get('nuove', 'App\Http\Controllers\NuoveController@nuove');
Route::get('nuove_salva/{t}/{i}', 'App\Http\Controllers\NuoveController@salva');


Route::get('cerca', 'App\Http\Controllers\CercaController@cerca');
Route::get('cerca_salva/{t}/{i}', 'App\Http\Controllers\CercaController@salva');



Route::get('playlist', 'App\Http\Controllers\PlaylistController@playlist');
Route::get('stampa', 'App\Http\Controllers\PlaylistController@stampa');
Route::get('elimina/{titolo}', 'App\Http\Controllers\PlaylistController@elimina');
