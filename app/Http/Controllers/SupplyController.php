<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supply;
use App\Product;
class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplies = Supply::all();
        $products = Product::all();
        return view('admin.supply.supply',compact('supplies','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supply = new Supply();
        $supply->companyName = $request->CompanyName;
        $supply->emailContact = $request->EmailContact;
        $supply->phoneContact = $request->PhoneContact;
        $supply->address = $request->Address;
        $supply->country = $request->Country;
        $supply->homePage = $request->HomePage;
        $supply->save();
        return back()->with(['status'=>'success','messages'=>'Thêm nhà cung cấp thành công']);
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
        $supply = Supply::find($id);
        $supply->companyName = $request->CompanyName;
        $supply->emailContact = $request->EmailContact;
        $supply->phoneContact = $request->PhoneContact;
        $supply->address = $request->Address;
        $supply->country = $request->Country;
        $supply->homePage = $request->HomePage;
        $supply->save();
        return back()->with(['status'=>'success','messages'=>'Cập nhật thông tin nhà cung cấp thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supply = Supply::find($id);
        $supply->delete();
        return back()->with(['status'=>'success','messages'=>'Xóa thông tin nhà cung cấp thành công']);
    }
}
