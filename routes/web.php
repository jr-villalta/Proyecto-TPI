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
//rutas home
Route::get('/','HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
//rutas users
Route::get('/user/setting','UserController@setting')->name('setting');
Route::put('/user/roleUpdate/{user}','UserController@roleUpdate');
Route::resource('/user','UserController');
// Route::get('/user/setting', [UserController::class, 'setting']); laravel 8+
//rutas movie
Route::get('/movie/details/{movie}','MovieController@details');
Route::get('/movie/like/{movie}','MovieController@like')->middleware('auth');
Route::get('/movie/shopping/{movie}', 'MovieController@shopping')->middleware(['hascard','auth']);
Route::get('/movie/rental/{movie}', 'MovieController@rentar')->middleware(['hascard','auth']);
Route::resource('/movie','MovieController')->middleware('isadmin');
//rutas creditcard
/* Route::get('creditcard/create','CreditCardController@create'); */
Route::post('creditcard','CreditCardController@store')->name('creditcard.store');
Route::delete('creditcard/{creditcard}','CreditCardController@destroy')->name('creditcard.destroy');
//rutas shopping
Route::post('shopping','ShoppingController@store')->name('shopping.store');
