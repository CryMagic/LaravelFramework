<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';

    public function belongsToUser(){
        return $this->belongsTo('App\User','userID','id');
    }

    public function belongsToProduct(){
        return $this->belongsTo('App\Product','productID','id');
    }
}
