<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'productName', 'alias', 'price', 'inStock', 'discount','isContinue','relatedImage','avgRating','description','note',
    ];
    public function belongsToSupplies(){
        return $this->belongsTo('App\Supply','supplierID','id');
    }

    public function belongsToCategories(){
        return $this->belongsTo('App\Category','cateID','id');
    }

    public function hasManyOrderDetail(){
        return $this->hasMany('App\OrderDetail','productID','id');
    }

    public function hasManyRating(){
        return $this->hasMany('App\Rating','productID','id');
    }

    public function hasManyWishList(){
        return $this->hasMany('App\WishList','productID','id');
    }
}
