<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $table = 'wish_lists';

    public function belongsToUser(){
        return $this->belongsTo('App\User','userID','id');
    }
    public function belongsToProduct(){
        return $this->belongsTo('App\Product','productID','id');
    }
}
