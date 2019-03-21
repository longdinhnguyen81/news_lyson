<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $primaryKey = "id";
    public $timestamps = true;
    public $fillable = ['title', 'description', 'detail', 'user_id', 'picture', 'img'];

    public function tag(){
    	return $this->belongsToMany('App\Model\Tag');
    }
}
