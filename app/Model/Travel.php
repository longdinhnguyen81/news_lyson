<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $primaryKey = "id";
    public $timestamps = true;
    public $fillable = ['title', 'slug', 'description', 'picture'];

    public function car(){
    	return $this->hasMany('App\Model\Car');
    }
}
