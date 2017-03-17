<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Product;
use App\Category;
use App\Order;
use Cart;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        $orderNotReads = Order::where('isRead',false)->orderBy('updated_at','DESC')->paginate(4);
        $countOrderNotRead = Order::where('isRead',false)->count();
        $top_product = Product::orderBy('created_at','DESC')->take(5)->get(); 
        $categories = Category::where('parent',0)->get();
        $categories_noneparent = Category::where('parent','<>',0)->get(); 
        $contents = Cart::content();
        view()->share('top_product', $top_product);
        view()->share('categories',$categories);
        view()->share('categories_noneparent',$categories_noneparent);
        view()->share('contents',$contents);
        view()->share('orderNotReads',$orderNotReads);
        view()->share('countOrderNotRead',$countOrderNotRead);
    }
    public function uploadImg($file){
    	\Cloudinary::config(array(
            "cloud_name" => "thientq",
            "api_key" => "342737156978658",
            "api_secret" => "Mn6Oth1kGnrbkUbaA8XrUuk4tHg"
        ));
        //$result = \Cloud
        $result = \Cloudinary\Uploader::upload($file);
        return $result;
    }

    public function uploadImgInServer($file){
        //Lấy tên file
        $name = $file->getClientOriginalName();
        //$Hinh = str_random(10)."_".$name;
        while(file_exists('upload/product/'.$Hinh)){
            $Hinh = str_random(4)."_".$name;
        }
        //Di chuyển đến thư mục chứa hình ảnh
        $file->move('upload/product/',$name);
        $product->hinhanh = $name;
    }
    public function responseOK($result, $code = 200)
    {
        return response()->json(['code' => $code, 'result' => $result], $code);
    }

    public function responseFail($code, $message = null)
    {
        return response()->json(['code' => $code, 'message' => $message], $code);
    }
    
    public function responseUnknownError($message)
    {
        return $this->responseFail(520, $message);
    }
    public function responseTokenError($message)
    {
        return $this->responseFail(401, $message);
    }
}
