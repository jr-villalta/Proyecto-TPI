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
Route::get('/user/setting','UserController@setting')->name('setting')->middleware('auth');
Route::put('/user/roleUpdate/{user}','UserController@roleUpdate')->middleware('isadmin');
Route::get('/user','UserController@index')->name('user.index')->middleware('isadmin');
Route::get('/user/{user}','UserController@show')->name('user.show')->middleware('isadmin');
// Route::get('/user/setting', [UserController::class, 'setting']); laravel 8+
//rutas movie
Route::get('/movie/details/{movie}','MovieController@details');
Route::get('/movie/play/{movie}','MovieController@play')->middleware('auth','hasmovie');
Route::get('/movie/like/{movie}','MovieController@like')->middleware('auth');
Route::get('/movie/shopping/{movie}', 'MovieController@shopping')->middleware(['hascard','auth']);
Route::get('/movie/rental/{movie}', 'MovieController@rentar')->middleware(['hascard','auth']);
Route::get('/movie/returnRent/{movie}', 'MovieController@returnRent')->middleware('auth','hasmovie');
Route::resource('/movie','MovieController')->middleware('isadmin');
//rutas creditcard
/* Route::get('creditcard/create','CreditCardController@create'); */
Route::post('creditcard','CreditCardController@store')->name('creditcard.store');
Route::delete('creditcard/{creditcard}','CreditCardController@destroy')->name('creditcard.destroy');
//rutas shopping
Route::post('shopping','ShoppingController@store')->name('shopping.store');
Route::get('/shopping/mymovies/{id}','ShoppingController@indexbyuser')->name('shopping.indexbyuser')->middleware('auth','ishe');
Route::get('/shopping','ShoppingController@index')->name('shopping.index')->middleware('isadmin');
//rutas rental
Route::post('rental','RentalController@store')->name('rental.store');
Route::get('/rental/mymovies/{id}','RentalController@indexbyuser')->name('rental.indexbyuser')->middleware('auth','ishe');
Route::get('/rental','RentalController@index')->name('rental.index')->middleware('isadmin');
Route::get('/rental/{rental}','RentalController@show')->name('rental.show')->middleware('auth');
