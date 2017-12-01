<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    public function menu()
    {
    	return $this->belongsTo('App\Menu');
    }

    public function users()
    {
    	return $this->belongsTo('App\User');
    }
}
