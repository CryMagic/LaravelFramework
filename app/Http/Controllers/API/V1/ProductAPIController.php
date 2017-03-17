<?php

namespace App\Http\Controllers\API\V1;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;

class ProductAPIController extends Controller
{
    public function getAllProduct(){
        $result = collect();
        $products = Product::take(4)->get();
        $result->push(['products'=>$products]);
        return $this->responseOK($result);
    }   
}
