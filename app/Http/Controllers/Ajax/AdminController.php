<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Detail;
use App\Model\Tour;
use App\Model\Travel;

class AdminController extends Controller
{
    public function news(Request $request){
    	$id = $request->id;
    	$news = Detail::find($id);
    	if($news->active == 0){
    		$news->active = 1;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/active.png" /></a>';
    	}else{
    		$news->active = 0;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/deactive.png" /></a>';
    	}
    	$news->save();
    	return $return;
    }
    public function tour(Request $request){
    	$id = $request->id;
    	$news = Tour::find($id);
    	if($news->active == 0){
    		$news->active = 1;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/active.png" /></a>';
    	}else{
    		$news->active = 0;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/deactive.png" /></a>';
    	}
    	$news->save();
    	return $return;
    }
    public function travel(Request $request){
    	$id = $request->id;
    	$news = Travel::find($id);
    	if($news->active == 0){
    		$news->active = 1;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/active.png" /></a>';
    	}else{
    		$news->active = 0;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/deactive.png" /></a>';
    	}
    	$news->save();
    	return $return;
    }
}
