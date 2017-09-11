<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //

    public function users(){
    	return $this->belongsTo('App\User');
    }

    public function cartItem() {
    	return $this->hasMany('App\CartItem');
    }
}
