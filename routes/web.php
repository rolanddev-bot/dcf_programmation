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

Route::get('/', function () {
    return view('welcome');
});

// route tout un test//
 /* Route::group(['namespace' => 'Api'], function () {
    Route::get('/products', 'ProductsController@index');
    Route::get('/products/{product}', 'ProductsController@show');

    Route::get('/cart', 'ProductsCartController@index');
    Route::post('/cart', 'ProductsCartController@store');
    Route::delete('/cart/{productId}', 'ProductsCartController@destroy');
    Route::delete('/cart', 'ProductsCartController@destroyAll');
});*/
