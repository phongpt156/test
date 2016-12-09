<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'Front\HomeController@HomeIndex');

Route::get('facebook/redirect', 'Auth\SocialController@redirectToProvider');
Route::get('facebook/callback', 'Auth\SocialController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/collection', 'Front\CollectionController@GetCollections');
Route::group(['prefix' => 'product'], function () {
	Route::get('newest', 'Front\ProductController@GetNewestProducts');
	Route::get('most-like', 'Front\ProductController@GetMostLikeProducts');
	Route::get('discount', 'Front\ProductController@GetDiscountProducts');
	Route::get('tendency', 'Front\ProductController@GetTendencyProducts');
});

Route::group(['prefix' => 'category'], function () {
	Route::get('/male', 'Front\CategoryController@GetMaleCategories');
	Route::get('/female', 'Front\CategoryController@GetFeMaleCategories');
});

Route::get('/product-feature/{feature_name?}', 'Front\ProductFeatureController@GetFeatureDefaultValue');

Route::post('/search-product', 'Front\SearchController@index')->name('search-product');

Route::get('/view/product/{id}', 'Front\HomeController@GetOneProduct')->where('id', '[0-9]+');
