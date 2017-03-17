<?php

namespace App\Http\Controllers\API\V1;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;

class ProductAPIController extends Controller
{
    public function getAllProduct(){
        $result = collect();
        $products = Product::OrderBy('id','DESC')->take(10)->get();
        $result->push(['products'=>$products]);
        return $this->responseOK($result);
    }   
}
