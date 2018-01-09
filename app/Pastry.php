<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pastry extends Model
{
    protected $guarded = ['id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function getCoffee(){
    	return $this->name;
    }
}
