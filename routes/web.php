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

Route::get('/home', 'ContactControllers@index')->name('web.home');
Route::get('/', 'ContactControllers@index')->name('web.index');
Route::post('/contacts', 'ContactControllers@store');
Route::get('/contacts/create', 'ContactControllers@create');
Route::get('/contacts/{id}', 'ContactControllers@show');
Route::get('/contacts/{id}/edit', 'ContactControllers@edit');
Route::patch('/contacts/{id}', 'ContactControllers@update');
Route::delete('/contacts/{id}', 'ContactControllers@destroy');
Route::get('/logout','ContactControllers@logout')->name('logout');

Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');
Route::get('/login', 'AuthController@getLogin')->name('login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');