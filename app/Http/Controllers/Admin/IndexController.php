<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Count;
use App\Model\Contact;
use App\Model\Detail;
use App\Model\Advise;

class IndexController extends Controller
{
    public function index(){
    	$contact = Contact::all();
    	$new = Detail::all();
		$counts = Count::limit(7)->get();
        $advises = Advise::where('active', 0)->get();
    	return view('admin.index.index', compact('counts', 'new', 'contact', 'advises'));
    }
    public function count(){
        $count = Count::limit(7)->get();
        return response()->json(['data' => $count]);
    }
}
