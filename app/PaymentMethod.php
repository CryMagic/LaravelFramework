<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table = 'payment_methods';

    public function hasManyPaymentMethod(){
        return $this->hasMany('App\Order','paymentMethodID','id');
    }
}
