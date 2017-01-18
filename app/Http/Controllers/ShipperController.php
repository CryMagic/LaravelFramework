<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipper;

class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippers = Shipper::all();
        return view('admin.shipper.shipper',compact('shippers'));
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
        $shipper = new Shipper();
        $shipper->shipperName = $request->ShipperName;
        $shipper->description = $request->Description;
        $shipper->phone = $request->Phone;
        $shipper->save();
        return back()->with('message-success','Thêm Shipper mới thành công');
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
        $shipper = Shipper::find($id);
        $shipper->shipperName = $request->ShipperName;
        $shipper->description = $request->Description;
        $shipper->phone = $request->Phone;
        $shipper->save();
        return back()->with('message-success','Cập nhật thông tin Shipper mới thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shipper = Shipper::find($id);
        $shipper->delete();
        return back()->with('message-success','Xóa thông tin Shipper thành công');
    }
}
