<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', 'Auth\PassportController@login');
Route::post('register', 'Auth\PassportController@register');
// Route::get('get-product', 'ProductController@getProduct');
Route::post('contact-us', 'ContactUsController@contactUs');
 
Route::middleware('auth:api')->group(function () {
    Route::get('user', 'Auth\PassportController@details');
    Route::get('product-count', 'ProductController@productCount');
    Route::get('get-product', 'ProductController@getProduct');
    Route::post('add-product', 'ProductController@addProduct');
    Route::resource('products', 'ProductController');
});