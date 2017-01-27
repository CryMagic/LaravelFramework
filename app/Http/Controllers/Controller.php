<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Product;
use App\Category;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        $top_product = Product::orderBy('created_at','DESC')->take(5)->get(); 
        $categories = Category::where('parent',0)->get();
        $categories_noneparent = Category::where('parent','<>',0)->get(); 
        view()->share('top_product', $top_product);
        view()->share('categories',$categories);
        view()->share('categories_noneparent',$categories_noneparent);
    }
}
