<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;

class ShoppingCartController extends Controller
{
    //
    public function addToCart($id){
        $product = Product::where('id',$id)->first();
        Cart::add(array(
            'id'=>$id,
            'name'=>$product->productName,
            'qty'=>1,
            'price'=>$product->discount,
            'options'=>array(
                'img'=>$product->picture,
                )
            )
        );
        return redirect()->route('cart');
    }
    public function cart(){
        $content = Cart::content();
        $total = Cart::total(00,",",".");
        return view('user.pages.cart',compact('content','total'));
    }
}
