<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $products = Product::all();
        return view('admin.category.category-product',compact('category','products'));
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
        $category = new Category();
        $category->cateName = $request->CateName;
        $category->alias = changeTitle($request->CateName);
        $category->description = $request->Description;
        $category->isDisplay = $request->isDisplay;
        $category->parent = $request->Parent;
        
        if($request->hasFile('Picture')){
            $file = $request->file('Picture');

            $img = $file->getClientOriginalName();

            $imgName = str_random(4)."_".$img;

            while(file_exists('images/category/'.$imgName)){
                 $imgName = str_random(4)."_".$img;
            }

            //Move to Folder images/category
            $file->move('images/category/',$imgName);
            $category->picture = $imgName;
        }
        $category->save();
        return back()->with(['status'=>'success','messages'=>'Thêm danh mục sản phẩm thành công']);
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
        $category = Category::find($id);
        $category->cateName = $request->CateName;
        $category->alias = changeTitle($request->CateName);
        $category->description = $request->Description;
        $category->isDisplay = $request->isDisplay;
        $category->parent = $request->Parent;
        if($request->hasFile('Picture')){
            $file = $request->file('Picture');
            $img = $file->getClientOriginalName();
            $imgName = str_random(4)."_".$img;
            while(file_exists('images/category/'.$imgName)){
                 $imgName = str_random(4)."_".$img;
            }
            //Move to Folder images/category
            $file->move('images/category/',$imgName);
            unlink("images/category/".$category->picture);
            $category->picture = $imgName;
        }

        $category->save();
        return back()->with(['status'=>'success','messages'=>'Cập nhật thông tin danh mục sản phẩm thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        foreach($categories as $item){
            if($item->parent == $category->id){
                return redirect()->route('category.index')->with(['status'=>'error','messages'=>'Danh mục có tồn tại các danh mục con']);
            }
        }
        if($category->picture != null){
            unlink("images/category/".$category->picture);
        }
        $category->delete();
        return back()->with(['status'=>'success','messages'=>'Xóa danh mục sản phẩm thành công']);
    }
    public function display($id){
        $category = Category::find($id);
        if($category){
            $category->isDisplay = !$category->isDisplay;
            $category->save();
            return response()->json($category);
        }
        return response()->json(['code'=>'404','message'=>'category not found']);
    }
}
