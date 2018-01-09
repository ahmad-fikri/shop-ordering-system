<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coffee extends Model
{	
	protected $guarded = ['id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function getCoffee(){
    	return $this->name;
    }

    public function orders()
	{
	    return $this->hasMany('App\Order', 'order_id');
	}
}
