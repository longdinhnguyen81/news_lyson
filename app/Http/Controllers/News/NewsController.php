<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Detail;
use App\Model\Tag;
use App\Model\Detailtag;
use App\Model\Count;
use CarBon\CarBon;
use Cache;

class NewsController extends Controller
{
    public function news(){
        $news = Detail::where('active', 1)->with('tag')->paginate(5);
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
            $key = 'news'.$counter->id. $news->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'news'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
    	return view('news.news.news', compact('news'));
    }
    public function tag(Request $request, $slug){
        $tags = Tag::where('slug_name', $slug)->first();
        $tagss = $tags->name;
        $details = Detailtag::where('tag_id', $tags->id)->with('detail')->paginate(5);
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
            $key = 'tag'.$counter->id. $tags->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'tag'.$count->id. $tags->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
        return view('news.news.tag', compact('details', 'tagss'));
    }
    public function search(Request $request){
        $name = $request->name;
        $news = Detail::where('title', 'like','%'. $name.'%')->where('active',1)->paginate(5);

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
            $key = 'search'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'search'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
        return view('news.news.search', compact('news'));
    }
    public function detail($slug, $id){
    	$news = Detail::where('active', 1)->with('tag')->where('id',$id)->first();
    	$next = Detail::where('id', '>', $news->id)->first();
    	$pre = Detail::where('id', '<', $news->id)->first();
    	
    	$sames = Detail::where('id', '!=', $news->id)->inRandomOrder()->limit(5)->get();

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
            $key = 'detail'.$counter->id. $news->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'detail'.$count->id. $news->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
    	return view('news.news.detail', compact('news', 'next', 'pre', 'sames'));
    }
}
