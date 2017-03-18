<?php

namespace App\Http\Controllers\API\V1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductAPIController extends Controller
{
    public function getAllProduct(){
        try{
            $result = collect();
            $products = Product::OrderBy('id','DESC')->take(10)->get();
            $result->push(['products'=>$products]);
            return $this->responseOK($result);
        }catch(\Exception $e){
            return $this->responseUnknownError($e->getMessage());
        }
    }
    public function getProduct($id){
        try{
            $result = collect();

            $product = Product::find($id);
            $result->push(['product'=>$product]);
            return $this->responseOK($result);
        }catch(\Exception $e){
            return $this->responseUnknownError($e->getMessage());
        }
        
    }   
}
