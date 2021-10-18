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



Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/product/show/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

Route::get('/product/create', 'App\Http\Controllers\ProductController@create')->name("product.create");

Route::post('/product/save', 'App\Http\Controllers\ProductController@save')->name("product.save");


Route::get('/cart/index', 'App\Http\Controllers\CartController@index')->name("cart.index");

Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");

Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name("cart.removeAll");

Route::get('/image/index', 'App\Http\Controllers\ImageController@index')->name("image.index");

Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name("image.save");


