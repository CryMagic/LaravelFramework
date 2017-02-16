<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = "districts";

    public function hasManyWard(){
        return $this->hasMany('App\Ward','maqh','maqh');
    }
    public function belongsToProvince(){
        return $this->belongsTo('App\Province','matp','matp');
    }
    public function hasManyUser(){
        return $this->hasMany('App\User','district','maqh');
    }
}
