<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    protected $table = 'supplies';

    public function hasManyProduct(){
        return $this->hasMany('App\Product','supplierID','id');
    }
}
