<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $primaryKey = "id";
    public $timestamps = false;
    public $fillable = ['seat', 'type', 'cost', 'travel_id'];

    public function travel(){
    	return $this->hasMany('App\Model\Travel', 'travel_id');
    }
}
