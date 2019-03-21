<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    public function index(){
    	return view('news.tour.index');
    }
    public function detail(){
    	return view('news.tour.detail');
    }
}
