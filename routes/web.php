<?php

// use Illuminate\Routing\Route;
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

Auth::routes(['verify' => true]);
// Product
Route::get('/', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
Route::get('produts/image/{imageName', 'ProductController@image')->name('products.image');

Route::name('admin.')->group(function () {
	Route::group(['prefix' => 'admin'], function () {
		Route::resource('products', 'Admin\ProductController');
		Route::get('image/{filename}', 'Admin\ProductController@viewImage')->name('image.viewImage');
	});
});

Route::get('admin', 'HomeController@index')->name('admin');


Route::get('/carts', 'CartController@index')->name('carts.index');
Route::get('/carts/add/{id}', 'CartController@add')->name('carts.add');
Route::patch('carts/update', 'CartController@update')->name('carts.update');
Route::delete('carts/remove', 'CartController@remove')->name('carts.remove');

Route::name('admin.')->group(function () {
	Route::group(['prefix' => 'admin'], function(){
		Route::resource('products', 'Admin\ProductController');
		Route::get('/products/image/{imageName}', 'Admin\ProductController@image')->name('products.image');

		Route::resource('orders', 'Admin\OrderController');
	});
});

Route::post('posts', 'ProductController@store')->name('posts.review');