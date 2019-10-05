<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index(){
		
		$videos = Video::where([['video_category_id','=',4]])
					->orderBy('id','DESC')
					->skip(0)
					->take(10)
					->get();
		
        return view('home')->with(compact('videos'));
    }
	
	public function play($id){
	

		 $video = Video::findOrFail($id);
		 return view('video')->with(compact('video'));
	}
}
