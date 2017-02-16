<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hasManyOrder(){
        return $this->hasMany('App\Order','userID','id');
    }

    public function hasManyRating(){
        return $this->hasMany('App\Rating','userID','id');
    }

    public function hasManyWishList(){
        return $this->hasMany('App\WishList','userID','id');
    }
    public function belongsToWard(){
        return $this->belongsTo('App\Ward','ward','xaid');
    }
    public function belongsToDistrict(){
        return $this->belongsTo('App\District','district','maqh');
    }
    public function belongsToProvince(){
        return $this->belongsTo('App\Province','province','matp');
    }
}
