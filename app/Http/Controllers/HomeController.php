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
}
