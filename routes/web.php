<?php

Route::get('/', 'TestController@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}','ProductController@show');
Route::post('/cart','CartDetailController@store');
Route::delete('/cart','CartDetailController@destroy');
Route::post('/order','CartController@update');
Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('admin')->group(function (){

	Route::get('/products','ProductController@index');//listado de productos
	Route::get('/products/create','ProductController@create');//ver formulario de registro
	Route::post('/products','ProductController@store');//registrar datos 
	Route::get('/products/{id}/edit','ProductController@edit');//formulario para la edicion del producto
	Route::post('/products/{id}/edit','ProductController@update');//edicion de producto
	Route::delete('/products/{id}/delete','ProductController@destroy');//formulario para la eliminacion del producto

	Route::get('/products/{id}/images','ImageController@index');//listado de imagenes
	Route::post('/products/{id}/images','ImageController@store');//registrar 
	Route::delete('/products/{id}/images', 'ImageController@destroy'); 
});

