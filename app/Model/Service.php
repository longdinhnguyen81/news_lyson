<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $fillable = ['name', 'advise_id'];

    public function advise(){
    	return $this->belongsTo('App\Model\Advise');
    }
}
