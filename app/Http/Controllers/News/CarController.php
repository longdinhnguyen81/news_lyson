<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function index(){
    	return view('news.car.index');
    }
    public function detail(){
    	return view('news.car.detail');
    }
}
