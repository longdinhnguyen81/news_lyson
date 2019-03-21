<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailTag extends Model
{
    protected $table = "detail_tag";
    protected $primaryKey = "id";
    public $timestamps = false;
    public $fillable = ['detail_id', 'tag_id'];

    public function detail(){
    	return $this->hasMany('App\Model\Detail', 'detail_id');
    }

    public function tag(){
    	return $this->hasMany('App\Model\Tag', 'tag_id');
    }
}
