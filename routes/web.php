<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PageHomeController@index')->name('home');

Route::prefix('pages')->namespace('Pages')->group(function(){
	Route::get('/store/{id}','PageStoresController@index')->name('pages.stores');
	//Route::get('')->name('');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('panel')->namespace('Panel')->group(function(){

	Route::get('/','PanelController@index')->name('panel.index');

	Route::prefix('user')->namespace('User')->group(function(){
		Route::get('/','UserController@index')->name('panel.user.index');
	});

	Route::prefix('product')->namespace('Product')->group(function(){
		Route::get('/','ProductController@index')->name('panel.product.index');
		Route::get('/create','ProductController@create')->name('panel.product.create');
		Route::post('/store','ProductController@store')->name('panel.product.store');
	});

	Route::prefix('stores')->namespace('Stores')->group(function(){
		Route::get('/','StoresController@index')->name('panel.stores.index');
		Route::get('/create','StoresController@create')->name('panel.stores.create');
		Route::post('/store','StoresController@store')->name('panel.stores.store');
	});
});
