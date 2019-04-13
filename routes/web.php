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



Route::get('/', 'PagesController@index');

Route::get('/display', 'ImagesController@display');

Route::get('/admin', 'ImagesController@index')->middleware('auth')->name('admin');

Route::get('/addItem', 'ImagesController@additem');

Route::post('/addItem', 'ImagesController@store');

Route::get('/edit/{id}', 'ImagesController@edit');

Route::post('/updating/{id}', 'ImagesController@update');

Route::get('/delete/{id}', 'ImagesController@delete');

Route::get('/cart/{id}', 'ImagesController@addtocart');

Route::get('/cartitems', 'CartController@viewcart');

Route::get('/remove/{id}', 'CartController@delete');

Route::get('/placeorder', 'HouseController@place');

Route::post('/placeorder', 'HouseController@store');

Route::get('/myorders', 'ImagesController@orders');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


