<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Detail;
use App\Model\Detailtag;
use App\Model\Tag;

class NewsController extends Controller
{
    public function index(){
    	$news = Detail::orderBy('id', 'desc')->with('tag')->get();
    	return view('admin.news.index', compact('news'));
    }
    public function getAdd(){
    	$tags = Tag::all();
    	return view('admin.news.add', compact('tags'));
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'title' => 'required|unique:details',
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
    		'tag_id' => 'required',
    		'picture' => 'required',
    		'img' => 'required',
    	]);
    	$news = new Detail([
    		'title' => $request->title,
            'description' => $request->description,
    		'detail' => $request->detail,
    		'user_id' => 1,
    	]);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $news->picture = $picture;
        }
    	if($request->file('img') != null){
    		$path2 = $request->file('img');
			$img =  $path2->store('/', ['disk' => 'upload']);
            $news->img = $img;
        }
        $news->keywords = $request->keywords;
        $news->active = 1;
    	$news->save();
    	foreach($request->tag_id as $tid){
    		$tag = new Detailtag();
    		$tag->tag_id = $tid;
    		$tag->detail_id = $news->id;
    		$tag->save();
    	}

    	return redirect(route('admin.news.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$tags = Tag::all();
    	$news = Detail::with('tag')->where('id', $id)->first();
    	return view('admin.news.edit', compact('news', 'tags'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'title' => 'required|unique:details,title,'.$id,
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
    		'tag_id' => 'required',
    	]);
    	$news = Detail::with('tag')->where('id', $id)->first();
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$news->picture;
            unlink($file_path);
            $news->picture = $picture;
        }
    	if($request->file('img') != null){
    		$path2 = $request->file('img');
			$img =  $path2->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $img_path = $app_path.'/upload/'.$news->img;
            unlink($img_path);
            $news->img = $img;
        }

    	$news->title = $request->title;
    	$news->keywords = $request->keywords;
    	$news->description = $request->description;
        $news->detail = $request->detail;
        $tagdetail = Detailtag::where('detail_id',$news->id)->get();
        foreach($tagdetail as $tags){
        	$tags->delete();
        }
    	foreach($request->tag_id as $tid){
    		$tag = new Detailtag();
    		$tag->tag_id = $tid;
    		$tag->detail_id = $news->id;
    		$tag->save();
    	}

    	$news->update();
    	return redirect(route('admin.news.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$news = Detail::find($id);
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$news->picture;
        $img_path = $app_path.'/upload/'.$news->img;
        unlink($file_path);
        unlink($img_path);
    	$news->delete();
    	return redirect(route('admin.news.index'))->with('msg', 'Xoá thành công');
    }
}
