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
        Cart::add([
            'id'=>$id,
            'name'=>$product->productName,
            'qty'=>1,
            'price'=>$product->discount,
            'options'=>[
                'img'=>$product->picture,
                'alias'=>$product->alias
                ]
            ]
        );
        return redirect()->route('cart');
    }
    public function cart(){
        $content = Cart::content();
        $total = Cart::total(00,",",".");
        return view('user.pages.cart',compact('content','total'));
    }
    public function removeCart($id){
        Cart::remove($id);
        return redirect()->route('cart');
    }
    public function minusQuantity($id, $qty){
        Cart::update($id,$qty++);
        return redirect()->route('cart');
    }
    public function subQuantity($id, $qty){

    }
}
