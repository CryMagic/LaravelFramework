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
Route::group(['prefix'=>'admin'], function(){
    Route::get('dashboard', function () {
        return view('admin.dashboard.dashboard');
    });
    Route::resource('category', 'CategoryController');
    Route::resource('supply', 'SupplyController');
    Route::resource('shipper', 'ShipperController');
    Route::resource('user','UserController');
    Route::get('/ajax-district','UserController@ajaxDistrict');
    Route::get('/ajax-ward','UserController@ajaxWard');
});

