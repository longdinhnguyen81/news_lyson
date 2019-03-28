<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Tour;

class TourController extends Controller
{
    public function index(){
    	$tours = Tour::all();
    	return view('admin.tour.index', compact('tours'));
    }
    public function getAdd(){
    	return view('admin.tour.add');
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'title' => 'required|unique:tours',
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
    		'seat' => 'required',
    		'picture' => 'required',
    		'ticket' => 'required',
    		'hotel' => 'required',
    		'plane' => 'required',
    		'time' => 'required',
    		'people' => 'required',
    		'cost' => 'required',
    		'recost' => 'required',
    	]);
    	$tour = new Tour([
    		'title' => $request->title,
            'description' => $request->description,
    		'detail' => $request->detail,
    		'seat' => $request->seat,
    		'ticket' => $request->ticket,
    		'hotel' => $request->hotel,
    		'plane' => $request->plane,
    		'time' => $request->time,
    		'people' => $request->people,
    		'cost' => $request->cost,
    		'recost' => $request->recost,
    	]);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $tour->picture = $picture;
        }
    	$tour->keywords = $request->keywords;
    	$tour->slug = str_slug($request->title);
    	$tour->save();

    	return redirect(route('admin.tour.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$tour = Tour::find($id);
    	return view('admin.tour.edit', compact('tour'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'title' => 'required|unique:tours,title,'.$id,
    		'keywords' => 'required',
            'description' => 'required',
    		'detail' => 'required',
    		'seat' => 'required',
    		'ticket' => 'required',
    		'hotel' => 'required',
    		'plane' => 'required',
    		'time' => 'required',
    		'people' => 'required',
    		'cost' => 'required',
    		'recost' => 'required',
    	]);
    	$tour = Tour::find($id);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$tour->picture;
            unlink($file_path);
            $tour->picture = $picture;
        }

    	$tour->title = $request->title;
        $tour->slug = str_slug($request->title);
    	$tour->keywords = $request->keywords;
    	$tour->description = $request->description;
    	$tour->detail = $request->detail;
    	$tour->seat = $request->seat;
    	$tour->ticket = $request->ticket;
    	$tour->hotel = $request->hotel;
    	$tour->plane = $request->plane;
    	$tour->time = $request->time;
    	$tour->people = $request->people;
    	$tour->cost = $request->cost;
    	$tour->recost = $request->recost;
    	
    	$tour->update();
    	return redirect(route('admin.tour.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$tour = Tour::find($id);
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$tour->picture;
        unlink($file_path);
    	$tour->delete();
    	return redirect(route('admin.tour.index'))->with('msg', 'Xoá thành công');
    }
}
