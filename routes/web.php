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
    Route::resource('method-payment', 'MethodPaymentController');
    //order
    Route::group(['prefix' => 'order'], function() {
        Route::get('list',['as'=>'OrderList','uses'=>'OrderController@index']);
        Route::get('view/{id}',['as'=>'OrderView','uses'=>'OrderController@show']);
        Route::put('change-is-read/{id}',['as'=>'ChangeIsRead','uses'=>'OrderController@changeIsRead']);
    });

    Route::get('/ajax-district','UserController@ajaxDistrict');
    Route::get('/ajax-ward','UserController@ajaxWard');
    Route::post('/block-user/{id}','UserController@blockUser');
    Route::post('/continue/{id}','ProductController@isContinue');
    Route::post('/display/{id}','CategoryController@display');
});


Route::get('/',['as'=>'home','uses'=>'HomeController@home']);
Route::get('about-us',['as'=>'about-us','uses'=>'HomeController@aboutUs']);
Route::get('account-one',['as'=>'account-one','uses'=>'HomeController@accountOne']);
Route::get('login',['as'=>'account-two','uses'=>'HomeController@accountTwo']);
Route::get('add-address',['as'=>'add-address','uses'=>'HomeController@addAddress']);
Route::get('blog',['as'=>'blog','uses'=>'HomeController@blog']);
Route::get('blog-detail/{id}/{alias}',['as'=>'BlogDetail','uses'=>'HomeController@blogDetail']);
Route::get('category/{id}/{alias}',[
    'as'=>'category',
    'uses'=>'HomeController@category'
]);
Route::get('checkout',['as'=>'checkout','uses'=>'HomeController@checkout'])->middleware('Checkout');
Route::post('postCheckout',['as'=>'post.checkout','uses'=>'HomeController@postCheckout']);
Route::get('contact-us',['as'=>'contact-us','uses'=>'HomeController@contactUs']);
Route::get('error-page',['as'=>'error-page','uses'=>'HomeController@errorPage']);
Route::get('forget-password',['as'=>'forget-password','uses'=>'HomeController@forgetPassword']);
Route::get('my-address',['as'=>'my-address','uses'=>'HomeController@myAddress']);
Route::get('order-list',['as'=>'order-list','uses'=>'HomeController@orderList']);
Route::get('order-status/{id}',['as'=>'order-status','uses'=>'HomeController@orderStatus']);
Route::get('product-detail/{id}/{alias}',[
    'as'=>'ProductDetail',
    'uses'=>'HomeController@productDetail'
]);
Route::get('thank-for-order',['as'=>'thank-for-order','uses'=>'HomeController@thankForYour']);
Route::get('user-information',['as'=>'user-information','uses'=>'HomeController@userInformation']);
Route::get('wishlist',['as'=>'wishlist','uses'=>'HomeController@wishList']);


//Login user
Route::group(['prefix' => 'user'], function() {
    Route::post('login',['as'=>'user.login','uses'=>'UserLoginController@login']);
    Route::post('register',['as'=>'user.register','uses'=>'UserLoginController@register']);
    Route::get('logout',['as'=>'user.logout','uses'=>'UserLoginController@logout']);

});
//Shopping cart
Route::get('add-to-cart/{id}',['as'=>'AddToCart','uses'=>'ShoppingCartController@addToCart']);
Route::get('cart',['as'=>'cart','uses'=>'ShoppingCartController@cart']);
Route::get('remove-cart/{id}',['as'=>'RemoveCart','uses'=>'ShoppingCartController@removeCart']);
Route::get('minus-quantity/{id}/{qty}',['as'=>'Minus','uses'=>'ShoppingCartController@minusQuantity']);

//ajax
Route::get('check-email/{email}','UserLoginController@checkEmailUnique');
Route::get('/get-all-district','AjaxController@getDistrict');
Route::get('/get-all-ward','AjaxController@getWard');
Route::get('/get-product-detail/{id}','AjaxController@productDetail');