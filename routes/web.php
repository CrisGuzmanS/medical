<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', 'Product\ProductController@index')->name('products.index');
Route::post('products', 'Product\ProductController@store');
Route::get('products/create', 'Product\ProductController@create');
Route::get('products/{product}','Product\ProductController@show')->name('products.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
