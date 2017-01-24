<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('user.pages.home');
    }
    public function aboutUs(){
        return view('user.pages.about-us');
    }
    public function accountOne(){
        return view('user.pages.account-one');
    }
    public function accountTwo(){
        return view('user.pages.account-two');
    }
    public function addAddress(){
        return view('user.pages.add-address');
    }
    public function blog(){
        return view('user.pages.blog');
    }
    public function blogDetail(){
        return view('user.pages.blog-detail');
    }
    public function cart(){
        return view('user.pages.cart');
    }
    public function category(){
        return view('user.pages.category');
    }
    public function checkoutFive(){
        return view('user.pages.checkout-five');
    }
    public function checkoutFour(){
        return view('user.pages.checkout-four');
    }
    public function checkoutThree(){
        return view('user.pages.checkout-three');
    }
    public function checkoutTwo(){
        return view('user.pages.checkout-two');
    }
    public function checkoutOne(){
        return view('user.pages.checkout-one');
    }
    public function contactUs(){
        return view('user.pages.contact-us');
    }
    public function errorPage(){
        return view('user.pages.error-page');
    }
    public function forgetPassword(){
        return view('user.pages.forget-password');
    }
    public function myAddress(){
        return view('user.pages.my-address');
    }
    public function orderList(){
        return view('user.pages.order-list');
    }
    public function orderStatus(){
        return view('user.pages.order-status');
    }
    public function productDetail(){
        return view('user.pages.product-detail');
    }
    public function thankForYour(){
        return view('user.pages.thank-for-your');
    }
    public function userInformation(){
        return view('user.pages.user-information');
    }
    public function wishList(){
        return view('user.pages.wishlist');
    }
}
