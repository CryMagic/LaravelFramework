<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    public function hasManyOrderDetail(){
        return $this->hasMany('App\OrderDetail','orderID','id');
    }
    
    public function belongsToUser(){
        return $this->belongsTo('App\User','userID','id');
    }

    public function belongsToShipper(){
        return $this->belongsTo('App\Shipper','shipperID','id');
    }

    public function belongsToPaymentMethod(){
        return $this->belongsTo('App\PaymentMethod','paymentMethodID','id');
    }
}
