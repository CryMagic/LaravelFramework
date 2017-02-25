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
            return 'ok'; 
        }
        return "fail";
    }
    public function checkEmailUnique($email){
        $user = User::where('email',$email)->first();
        if($user){
            return "found";
        }
        return "not found";
    }
    public function register(Request $request){
        $user = new User();
        $user->firstname = $request->FirstName;
        $user->lastname = $request->LastName;
        $user->email = $request->Email;
        $user->password = Hash::make($request->Password);
        $user->point = 0;
        $user->level = 0;
        $user->status = 0;
        $user->save();
        return redirect()->route('account-two')->with(['messages'=>'Tạo tài khoản thành công','status'=>'success']);
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
