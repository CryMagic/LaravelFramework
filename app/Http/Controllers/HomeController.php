<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;
use Auth;
use App\Province;
use App\District;
use App\Ward;
use App\Order;
use App\OrderDetail;
use Cart;

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
        $blogs = Product::paginate(5);
        return view('user.pages.blog',compact('blogs'));
    }
    public function blogDetail($id){
        $blog = Product::find($id);
        return view('user.pages.blog-detail',compact('blog'));
    }
    public function category($id){
        $category = Category::find($id);
        $cate_noneparent = Category::where('parent','<>',0)->get();
        $cate_parent = Category::where('parent',0)->get();
        $product_category = Product::where('cateID',$category->id)->paginate(12);
        return view('user.pages.category',compact('category','cate_noneparent','cate_parent','product_category'));
    }
    public function checkoutThree(){
        $content = Cart::content();
        $total = Cart::total(00,",",".");
        return view('user.pages.checkout-three',compact('content','total'));
    }
    public function checkoutTwo(){
        return view('user.pages.checkout-two');
    }
    public function checkoutOne(){
        $userId = Auth::user()->id;
        $user = User::find($userId);
        $provinces = Province::all();
        $districts = District::all();
        $wards = Ward::all();
        $name_province = "";
        $name_district = "";
        $name_ward = "";
        foreach($provinces as $item){
            if($user->province == $item->matp){
                $name_province = $item->name;
                break;
            }
        }
        foreach($districts as $item){
            if($user->district == $item->maqh){
                $name_district = $item->name;
                break;
            }
        }
        foreach($wards as $item){
            if($user->ward == $item->xaid){
                $name_ward = $item->name;
                break;
            }
        }
        return view('user.pages.checkout-one',compact('user','name_province','name_district','name_ward'));
    }
    public function postCheckoutOne(Request $request){
        $order = new Order();
        $order->userID = Auth::user()->id;
        $order->shipName = $request->ShipName;
        $order->shipPhone = $request->ShipPhone;
        $order->shipEmail = $request->ShipEmail;
        $order->shipWard = $request->ShipWard;
        $order->shipDistrict = $request->ShipDistrict;
        $order->shipProvince = $request->ShipProvince;
        $order->shipAddress = $request->ShipAddress;
        $order->statusChecked = 0;
        $order->isRead=false;
        $order->isClose=false;
        $order->isPaid = 0;
        $order->save();
        return redirect()->route('checkout-two')->with(['messages'=>'Thêm địa chỉ giao hàng thành công','status'=>'success']);
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
