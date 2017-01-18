<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.list-user',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.user-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'Email'      => 'unique:users,email|email',
        ];
        $messages = [
            'Email.unique'       =>  'Email bạn đăng ký đã tồn tại',
        ];

        $user = new User();
        $user->email = $request->Email;
        $user->password = Hash::make($request->Password);
        $user->firstname = $request->FirstName;
        $user->lastname = $request->LastName;
        $user->phone = $request->Phone;
        $user->birthday = $request->BirthDay;
        $user->gender = $request->Gender;
        //Save avatar user
        if($request->hasFile('Avatar')){
            $file = $request->file('Avatar');

            $img = $file->getClientOriginalName();

            $imgName = str_random(4)."_".$img;

            while(file_exists('images/user/'.$imgName)){
                 $imgName = str_random(4)."_".$img;
            }

            //Move to Folder images/category
            $file->move('images/user/',$imgName);
            $user->picture = $imgName;
        }
        $user->level = $request->Level;
        $user->point = 0;
        $user->province = $request->Province;
        $user->district = $request->District;
        $user->ward = $request->Ward;
        $user->remember_token = $request->_token;
        $user->save();
        return back()->with('message-success','Thêm tài khoản thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
