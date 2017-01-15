<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';

    public function belongsToOrder(){
        return $this->belongsTo('App\Order','orderID','id');
    }

    public function belongsToProduct(){
        return $this->belongsTo('App\Product','productID','id');
    }
}
