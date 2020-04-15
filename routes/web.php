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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/tienda', 'HomeController@index')->name('categories');
Route::get( '/tienda/01/{organization}/{chanel}/{sector}','ProductsController@getCategories' )->name( 'categories' );


