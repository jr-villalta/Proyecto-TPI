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
//rutas authentication
Auth::routes();
//rutas users
Route::get('/user/setting','UserController@setting')->name('setting');
Route::put('/user/roleUpdate/{user}','UserController@roleUpdate');
Route::resource('/user','UserController');
//rutas home
Route::get('/','HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
//rutas movie
Route::get('/movie/details/{movie}','MovieController@details');
Route::get('/movie/like/{movie}','MovieController@like')->middleware('auth');
Route::resource('/movie','MovieController')->middleware('isadmin');