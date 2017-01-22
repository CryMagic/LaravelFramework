<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Supply;
class DashboardController extends Controller
{
    public function dashboard(){
        $new_user = User::orderBy('created_at','DESC')->take(5)->get();
        $new_product = Product::orderBy('created_at','DESC')->take(5)->get();
        $new_supply = Supply::orderBy('created_at','DESC')->take(5)->get();
        return view('admin.dashboard.dashboard',compact('new_user','new_product','new_supply'));
    }
}
