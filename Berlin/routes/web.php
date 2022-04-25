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

Route::get('/', 'OpenController@welcome');

Route::get('home', 'PhotoController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/ej', 'HomeController@ej')->name("ej");


Route::get('/about', 'OpenController@about')->name('about');



Route::get('/product', 'HomeController@product');


Route::get('/admin', 'AdminController@index');

Route::get('/admin/orinak', function () {
    return view('admin/orinak');
});
Route::get('/admin/users/create', 'UserController@index');

Route::get('/admin/users/', 'UserController@index')->name('users');

Route::get('/admin/users/create', 'UserController@create')->name('user_create');
Route::post('/admin/users/store', 'UserController@store')->name('user_store');
Route::get('/admin/users/delete/{id}', 'UserController@destroy');
Route::get('/admin/users/edit/{id}', 'UserController@edit');
Route::post('/admin/users/update', 'UserController@update')->name('user_update');

/////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/admin/products/create', 'Products@index');

Route::get('/admin/products/', 'Products@index')->name('products');

Route::get('/admin/products/create', 'Products@create')->name('products_create');
Route::post('/admin/products/store', 'Products@store')->name('products_store');
Route::get('/admin/products/delete/{id}', 'Products@destroy');
Route::get('/admin/products/edit/{id}', 'Products@edit');
Route::post('/admin/products/update', 'Products@update')->name('products_update');



Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
