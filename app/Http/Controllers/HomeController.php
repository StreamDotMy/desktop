<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use View;
use App\VideoCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{


    public function __construct(){
        $categories = VideoCategory::all();
        View::share ( compact('categories' ));
    }


    public function index(){
		
		$videos = Video::where([['video_category_id','=',1]])
					->orderBy('ordering','ASC')
					->skip(0)
					->take(10)
					->get();

		$continue =  Video::where([['video_category_id','=',3]])
			 ->orderBy('ordering','ASC')
			 ->skip(0)
			 ->take(10)
			 ->get();
		
        return view('home')->with(compact('videos','continue'));
    }
	
	public function play($id){
	

		 $video = Video::findOrFail($id);
		 return view('video')->with(compact('video'));
	}


    public function signup(){
        return view('signup');
    }
}
