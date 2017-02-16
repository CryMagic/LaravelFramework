<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table= 'wards';

    public function belongsToDistrict(){
        return $this->belongsTo('App\District','maqh','maqh');
    }
    public function hasManyUser(){
        return $this->hasMany('App\User','ward','xaid');
    }
}
