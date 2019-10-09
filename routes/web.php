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

use Illuminate\Support\Facades\Route;

Route::get('/','ProductController@home')->name('products.home');
Route::prefix('customers')->group(function (){
    Route::get('/','CustomerController@index')->name('customers.index');
});
Route::prefix('products')->group(function (){
    Route::get('/','ProductController@index')->name('products.index');
    Route::get('/{id}/edit','ProductController@edit')->name('products.edit');
    Route::post('/{id}/update','ProductController@update')->name('products.update');
});
Route::prefix('bills')->group(function (){
    Route::get('/','BillController@index')->name('bills.index');
    Route::get('/{id}/product','BillController@product')->name('bills.product');
    Route::get('/create','BillController@create')->name('bills.create');
    Route::post('/create','BillController@insert')->name('bills.add');
    Route::get('/{id}/delete','BillController@destroy')->name('bills.delete');
});
Route::middleware('auth')->prefix('/shop')->group(function (){
    Route::get('/','ShopController@index')->name('shop.index');
    Route::get('/{id}/add-to-cart','ShopController@addToCart')->name('shop.addToCart');
    Route::get('/{id}/delete','ShopController@destroy')->name('shop.destroy');
});

Auth::routes();

Route::get('/home', 'ProductController@home')->name('home');

Auth::routes();

Route::get('/home', 'ProductController@home')->name('home');
