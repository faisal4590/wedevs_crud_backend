<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/// JWT routes
Route::group(
    [
        'prefix' => 'auth'
    ],
    function () {

        Route::post('login', 'AuthController@login');
        Route::post('register', 'AuthController@register');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
    }
);


Route::POST('add_product', 'ProductController@addProduct');
Route::POST('fetch_products', 'ProductController@fetchProducts');
Route::POST('edit_product', 'ProductController@editProduct');
Route::POST('fetch_updated_products', 'ProductController@fetchUpdatedProducts');
Route::POST('delete_product', 'ProductController@deleteProduct');
