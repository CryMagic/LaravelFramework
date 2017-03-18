<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\District;
use App\Ward;
use App\Product;
use Illuminate\Support\Facades\Input;

class AjaxController extends Controller
{
    public function getDistrict(){
        $province_id = Input::get('province_id');
        $districts = District::where('matp',$province_id)->get();
        return response()->json($districts);
    }
    public function getWard(){
        $district_id = Input::get('district_id');
        $wards = Ward::where('maqh',$district_id)->get();
        return response()->json($wards);
    }
    public function productDetail($id){
        $product = Product::find($id);
        return response()->json($product);
    }
}
