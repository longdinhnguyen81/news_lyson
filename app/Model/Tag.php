<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $primaryKey = "id";
    public $timestamps = false;
    public $fillable = ['name', 'slug_name'];

    public function detail(){
    	return $this->belongsToMany('App\Model\Detail');
    }
}