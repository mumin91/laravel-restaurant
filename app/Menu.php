<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    public function rating()
    {
    	return $this->hasMany('App\Rating');
    }
    

}
