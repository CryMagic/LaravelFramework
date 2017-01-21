<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Category;
use App\Supply;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.product-list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $supplies = Supply::all();
        return view('admin.product.product-add',compact('categories','supplies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->productName = $request->ProductName;
        $product->alias = changeTitle($request->ProductName);
        $product->price = $request->Price;
        $product->inStock = $request->InStock;
        $product->discount = $request->Discount;
        $product->isContinue = 0;
        $product->avgRating = 0;
        $product->discription = $request->Description;
        $product->note = $request->Note;
        $product->supplierID = $request->Supply;
        $product->cateID = $request->Category;
        //Save picture product
        if($request->hasFile('Picture')){
            $file = $request->file('Picture');

            $img = $file->getClientOriginalName();

            $imgName = str_random(15)."_".$img;

            while(file_exists('images/product/'.$imgName)){
                 $imgName = str_random(15)."_".$img;
            }

            //Move to Folder images/category
            $file->move('images/product/',$imgName);
            $product->picture = $imgName;
        }
        $product->save();
        return redirect()->route('product.index')->with(['status'=>'success','messages'=>'Thêm sản phẩm thành công']);
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
        $categories = Category::all();
        $supplies = Supply::all();
        $product = Product::find($id);
        return view('admin.product.product-edit',compact('product','categories','supplies'));
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
        $product = Product::find($id);
        $product->productName = $request->ProductName;
        $product->alias = changeTitle($request->ProductName);
        $product->price = $request->Price;
        $product->inStock = $request->InStock;
        $product->discount = $request->Discount;
        $product->discription = $request->Description;
        $product->note = $request->Note;
        $product->supplierID = $request->Supply;
        $product->cateID = $request->Category;
        //Save picture product
        if($request->hasFile('Picture')){
            $file = $request->file('Picture');

            $img = $file->getClientOriginalName();

            $imgName = str_random(15)."_".$img;

            while(file_exists('images/product/'.$imgName)){
                 $imgName = str_random(15)."_".$img;
            }

            //Move to Folder images/product
            $file->move('images/product/',$imgName);
            unlink("images/product/".$product->picture);
            $product->picture = $imgName;
        }
        $product->save();
        return redirect()->route('product.index')->with(['status'=>'success','messages'=>'Cập nhật thông tin sản phẩm thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product->picture != null){
            unlink("images/product/".$product->picture);
        }
        $product->delete();
        return back()->with(['status'=>'success','messages'=>'Xóa sản phẩm thành công']);
    }
    public function isContinue($id){
        $product = Product::find($id);
        if($product){
            $product->isContinue = !$product->isContinue;
            $product->save();
            return response()->json($product);
        }
        return response()->json(['code'=>'404','message'=>'Product not found']);
    }
}
