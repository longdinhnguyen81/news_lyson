<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
    	return view('news.index.index');
    }
    public function aboutus(){
    	return view('news.index.aboutus');
    }
    public function contact(){
    	return view('news.index.contact');
    }
}
