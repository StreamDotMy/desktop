<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
    *      * Get the VideoCategory that owns the video.
    * 
    *           
    */
     public function video_category()
     {
        return $this->belongsTo('App\VideoCategory');
     }
}
