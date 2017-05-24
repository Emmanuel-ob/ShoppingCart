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



Route::get('/cart', 'CartController@show');
Route::get('/cart/view', 'CartController@showCart');
Route::get('/cart/add/{id}', 'CartController@add');
