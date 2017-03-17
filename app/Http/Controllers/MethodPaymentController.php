<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentMethod;
class MethodPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $method_payment = PaymentMethod::all();
        return view('admin.method-payment.method-payment',compact('method_payment'));
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
        $method_payment = new PaymentMethod();
        $method_payment->name = $request->MethodName;
        $method_payment->description = $request->Description;
        $method_payment->save();
        return redirect()->back()->with(['messages'=>'Thêm phương thức thanh toán mới thành công!!!','status'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $method_payment = PaymentMethod::find($id);
        return response()->json($method_payment);
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
        $method_payment = PaymentMethod::find($id);
        $method_payment->name = $request->MethodName;
        $method_payment->description = $request->Description;
        $method_payment->save();
        return redirect()->back()->with(['messages'=>'Chỉnh sửa phương thức thanh toán mới thành công!!!','status'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $method_payment = PaymentMethod::find($id);
        $method_payment->delete();
        return redirect()->back()->with(['messages'=>'Hủy bỏ phương thức thanh toán mới thành công!!!','status'=>'success']);
    }
}
