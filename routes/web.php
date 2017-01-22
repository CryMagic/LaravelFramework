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

Route::get('admin/login',['as'=>'login','uses'=>'Auth\LoginController@getLogin']);
Route::post('admin/login','Auth\LoginController@postLogin');
Route::get('admin/logout',['as'=>'logout','uses'=>'Auth\LoginController@getLogout']);

Route::group(['prefix'=>'admin','middleware'=>'AdminLogin'], function(){
    Route::get('dashboard',['as'=>'dashboard', 'uses'=>'DashboardController@dashboard']);
    Route::resource('category', 'CategoryController');
    Route::resource('supply', 'SupplyController');
    Route::resource('shipper', 'ShipperController');
    Route::resource('user','UserController');
    Route::resource('product', 'ProductController');
    
    Route::get('/ajax-district','UserController@ajaxDistrict');
    Route::get('/ajax-ward','UserController@ajaxWard');
    Route::post('/block-user/{id}','UserController@blockUser');
    Route::post('/continue/{id}','ProductController@isContinue');
    Route::post('/display/{id}','CategoryController@display');
});

