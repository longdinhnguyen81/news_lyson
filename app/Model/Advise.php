<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Advise extends Model
{
    protected $primaryKey = "id";
    public $timestamps = false;
    public $fillable = ['name', 'phone'];

    public function service(){
    	return $this->hasMany('App\Model\Service');
    }
}
