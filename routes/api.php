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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('register', 'AuthController@register');
Route::get('products-by-category/{category_id}', 'ProductsController@showByCategory');
Route::get('products-by-brand/{brand_id}', 'ProductsController@showByBrand');
Route::resource('products', 'ProductsController');
Route::resource('brands', 'BrandController');
Route::resource('category', 'CategoryController');
