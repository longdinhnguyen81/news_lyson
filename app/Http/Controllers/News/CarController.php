<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Travel;
use App\Model\Count;
use App\Model\Tour;
use CarBon\CarBon;
use Cache;


class CarController extends Controller
{
    public function index(){
    	$now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $count = Count::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Counter();
            $counter->day = $day;
            $counter->month = $month;
            $counter->author = 1;
            $counter->page = 1;
            $counter->save();
            $key = 'index-car'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'index-car'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }

    	$travels = Travel::where('active', 1)->get();
    	return view('news.car.index', compact('travels'));
    }
    public function detail($slug){
    	$travels = Travel::where('slug', $slug)->where('active', 1)->with('car')->first();
        $tours = Tour::where('id', '!=', $travels->id)->where('active', 1)->get();
    	if($travels){
	    	$now = Carbon::now();
	        $day = $now->day;
	        $month = $now->month;
	        $count = Count::where('day', $day)->where('month', $month)->first();
	        if(!$count){
	            $counter = new Counter();
	            $counter->day = $day;
	            $counter->month = $month;
	            $counter->author = 1;
	            $counter->page = 1;
	            $counter->save();
	            $key = 'car'.$counter->id;
	            Cache::put($key, 1, 30);
	        }else{
	            $key = 'car'.$count->id;
	            if(!Cache::get($key)){
	                $count->increment('page');
	                Cache::put($key, 1, 30);
	            }
	        }
    		$moretravels = Travel::where('id', '!=', $travels->id)->where('active', 1)->get();
    		return view('news.car.detail', compact('travels', 'moretravels', 'tours'));
    	}
    }
}
