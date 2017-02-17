<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('admin.order.order-list',compact('orders'));        
    }
    public function edit($id){

    }
    public function show($id){
        $order = Order::find($id);
        return view('admin.order.order-view',compact('order'));
    }
    public function changeIsRead($id){
        $order = Order::find($id);
        $order->isRead = 1;
        $order->save();
        return redirect()->route('OrderView',$id);
    }
    public function store(Request $request){

    }
    public function update(Request $request){

    }
}
