<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Advise;
use App\Model\Tag;
use App\Model\Travel;
use App\Model\Tour;
use App\Model\Detail;
use App\Model\Detailtag;
use App\Model\Count;
use App\Model\Service;
use App\Model\Contact;
use CarBon\CarBon;
use Cache;

class IndexController extends Controller
{
    public function index(){
        $cars = Travel::where('active', 1)->limit(5)->get();
        $exps = Tag::where('name', 'Kinh nghiệm')->with('detail')->first();
        $news = Detail::where('active', 1)->limit(5)->get();
        $now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $count = Count::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Count();
            $counter->day = $day;
            $counter->month = $month;
            $counter->author = 1;
            $counter->page = 1;
            $counter->save();
            $key = 'index'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'index'.$count->id;
            if(!Cache::get($key)){
                $count->increment('author');
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
    	return view('news.index.index', compact('cars', 'exps', 'news'));
    }

    public function aboutus(){
        $now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $count = Count::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Count();
            $counter->day = $day;
            $counter->month = $month;
            $counter->author = 1;
            $counter->page = 1;
            $counter->save();
            $key = 'about'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'about'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
    	return view('news.index.aboutus');
    }

    public function contact(){
        $now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $count = Count::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Count();
            $counter->day = $day;
            $counter->month = $month;
            $counter->author = 1;
            $counter->page = 1;
            $counter->save();
            $key = 'contact'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'contact'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
    	return view('news.index.contact');
    }

    public function postContact(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'title' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'message' => $request->message
        ]);
        $contact->save();
        return redirect()->route('news.index.contact')->with('msg', 'Gửi liên hệ thành công');
    }

    public function call(Request $request){
    	$request->validate([
    		'name' => 'required',
    		'phone' => 'required',
            'service' => 'required'
    	]);
    	$advise = new Advise([
    		'name' => $request->name,
    		'phone' => $request->phone,
    	]);
    	$advise->active = 0;
    	$advise->save();
        for($i = 0; $i < count($request->service); $i++){
            $service = new Service([
                'name' => $request->service[$i],
                'advise_id' => $advise->id
            ]);
            $service->save();
        }
        $url = url()->previous();
        if($url[-1] == 'e'){
            return redirect()->route('news.index.contact')->with('msg', 'Gửi thông tin thành công');
        }else{
            return redirect()->route('news.index.index')->with('msg', 'Gửi thông tin thành công');
        }
    }
    public function sitemap(){
        $tags = Tag::all();
        $travels = Travel::all();
        $tours = Tour::all();
        $news = Detail::all();
         return response()->view('news.index.sitemap', [
          'tags' => $tags,
          'travels' => $travels,
          'tours' => $tours,
          'news' => $news,
      ])->header('Content-Type', 'text/xml');
    }
}
