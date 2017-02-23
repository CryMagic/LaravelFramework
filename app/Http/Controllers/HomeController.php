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
use App\PaymentMethod;
use Carbon\Carbon;

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
        $blogs = Product::orderBy('created_at','DESC')->paginate(5);
        return view('user.pages.blog',compact('blogs'));
    }
    public function blogDetail($id){
        $blog = Product::find($id);
        $blog_recommend = Product::where('cateID',$blog->cateID)->where('id','<>',$blog->id)->get();
        return view('user.pages.blog-detail',compact('blog','blog_recommend'));
    }
    public function category($id){
        $category = Category::find($id);
        $cate_noneparent = Category::where('parent','<>',0)->get();
        $cate_parent = Category::where('parent',0)->get();
        $product_category = Product::where('cateID',$category->id)->paginate(12);
        return view('user.pages.category',compact('category','cate_noneparent','cate_parent','product_category'));
    }
    public function checkout(){
        $payment_methods = PaymentMethod::all();
        return view('user.pages.checkout',compact('payment_methods'));
    }
    public function postCheckout(Request $request){
        $order = new Order();
        $currentDate = Carbon::now();
        $order->userID = Auth::user()->id;
        $order->orderDate = $currentDate;
        $order->statusChecked = 0;
        $order->isRead=false;
        $order->isClose=false;
        $order->isPaid = 0;
        $order->paymentMethodID=$request->PaymentMethod;
        $order->totalPrice = Cart::total(00,",","");
        $order->note = $request->Note;
        $option = $request->add;

        if($option == 'option1'){
            $order->shipAddress = $request->ShipAddress;
            $order->shipName = Auth::user()->firstname.' '.Auth::user()->lastname;
            $order->shipPhone = Auth::user()->phone;
            $order->shipEmail = Auth::user()->email;
            $order->shipWard = Auth::user()->belongsToWard->name;
            $order->shipDistrict = Auth::user()->belongsToDistrict->name;
            $order->shipProvince = Auth::user()->belongsToProvince->name;
        }
        else{
            $order->shipName = $request->ShipName;
            $order->shipPhone = $request->ShipPhone;
            $order->shipEmail = $request->ShipEmail;
            $order->shipWard = $request->ShipWard;
            $order->shipDistrict = $request->ShipDistrict;
            $order->shipProvince = $request->ShipProvince;
            $order->shipAddress = $request->ShipAddress;
        }
        $order->save();
        Cart::destroy();
        foreach(Cart::content() as $item){
            $order_detail = new OrderDetail();
            $order_detail->orderID = $order->id;
            $order_detail->productID = $item->id;
            $order_detail->price = $item->price;
            $order_detail->quantity = $item->qty;
            $order_detail->save();
        }
        return redirect()->route('thank-for-order')->with(['messages'=>'Thành công','status'=>'success']);
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
    public function addProductWishList(){
        
    }
}
