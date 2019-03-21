<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function news(){
    	return view('news.news.news');
    }
    public function detail(){
    	return view('news.news.detail');
    }
}
