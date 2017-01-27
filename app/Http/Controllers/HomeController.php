<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class HomeController extends Controller
{
    
    public function home(){
        $category_images = Category::select('picture')->where('parent',0)->get();
        $new_products = Product::orderBy('created_at','DESC')->take(10)->get();
        $products = Product::orderBy('created_at','DESC')->paginate(12);
        return view('user.pages.home',compact('new_products','products','category_images'));
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
    public function category($id){
        $category = Category::find($id);
        $cate_noneparent = Category::where('parent','<>',0)->get();
        $cate_parent = Category::where('parent',0)->get();
        $product_category = Product::where('cateID',$category->id)->paginate(12);
        return view('user.pages.category',compact('category','cate_noneparent','cate_parent','product_category'));
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
    public function productDetail($id){
        $product = Product::find($id);
        $product_recommend = Product::where('cateID',$product->cateID)->where('id','<>',$product->id)->get();
        return view('user.pages.product-detail',compact('product','product_recommend'));
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
