<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Tour;

class TourController extends Controller
{
    public function index(){
    	$tours = Tour::all();
    	return view('news.tour.index', compact('tours'));
    }
    public function detail($slug){
        $tour = Tour::where('slug', $slug)->first();
    	return view('news.tour.detail', compact('tour'));
    }
}
