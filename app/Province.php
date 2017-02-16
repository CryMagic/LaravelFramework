<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = "provinces";

    public function hasManyDistrict(){
        return $this->hasMany('App\District','matp','matp');
    }
    public function hasManyUser(){
        return $this->hasMany('App\User','province','matp');
    }
}
