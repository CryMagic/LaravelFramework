<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $table = 'shippers';

    public function hasManyProduct(){
        return $this->hasMany('App\Order','shipperID','id');
    }


}
