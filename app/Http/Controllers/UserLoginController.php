<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;
class UserLoginController extends Controller
{
    public function login(Request $request){
        $email = $request->Email;
        $password = $request->Password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect('/');
        }
        return redirect()->route('account-two');
    }
    public function register(Request $request){
        $user = new User();
        $user->firstname = $request->FirstName;
        $user->lastname = $request->LastName;
        $user->email = $request->Email;
        $user->password = Hash::make($request->Password);
        $user->save();
        return redirect()->route('account-two');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
