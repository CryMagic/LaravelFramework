<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('id','DESC')->get();
        return view('admin.category.category-product',compact('category'));
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
        
        if($request->hasFile('Picture')){
            $file = $request->file('Picture');

            $img = $file->getClientOriginalName();

            $imgName = str_random(4)."_".$img;

            while(file_exists('images/avatar/'.$imgName)){
                 $imgName = str_random(4)."_".$img;
            }

            //Move to Folder images/category
            $file->move('images/category/',$imgName);
            $category->picture = $imgName;
        }
        $category->save();
        return back();
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

        if($request->hasFile('Picture')){
            $file = $request->file('Picture');
            $img = $file->getClientOriginalName();
            $imgName = str_random(4)."_".$img;
            while(file_exists('images/avatar/'.$imgName)){
                 $imgName = str_random(4)."_".$img;
            }
            //Move to Folder images/category
            $file->move('images/category/',$imgName);
            unlink("images/category/".$category->picture);
            $category->picture = $imgName;
        }

        $category->save();

        return back();
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
        unlink("images/category/".$category->picture);
        $category->delete();
        return back();
    }
}
