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

Route::get('/', 'ProductController@index')->name('products');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/create', 'ProductController@create')->name('create');


Route::post('/product/store', 'ProductController@store')->name('storeProduct')->middleware('auth');

Route::get('/product/{id}/edit', 'ProductController@edit')->name('edit')->middleware('auth');

Route::post('/product/saveEdit', 'ProductController@store')->name('saveEdit')->middleware('auth');

Route::get('/users/roles', 'UserController@index')->name('admin')->middleware('admin');

Route::get('/users/list', 'UserController@list')->name('admin')->middleware('admin');