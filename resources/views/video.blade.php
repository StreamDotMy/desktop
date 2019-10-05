<!DOCTYPE html>
<html>

<head>
    @include('partials.head')
</head>

<body>
  <div class="search-box">
        <input class="search-txt" type="text" name=" " placeholder="Type to search"> </input>
        <a href="#" class="search-btn">
            <!--font-awesome-->
            <i class="fa fa-search fa-2x"></i>
        </a>
    </div>
    <div class="logo">
        <a href="../"><img src="/assets/logo.png"></a>
    </div>
   

        <div class="video-bg">
        <video class="main-video"  poster="/storage/{{$video->id }}/image/image2.jpg"  autoplay="false" metadata muted="true" playsinline></video>
        <div class="play-icon">
            <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><img src="/assets/play-icon.png"></button>
        </div>

    </div>

  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 100%;">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <video id="my-video" class="video-js video-modal" controls preload="video-js vjs-default-skin vjs-big-play-centered" poster="poster.png" data-setup='{}' autoplay="false">
        <source src="/storage/{{$video->id }}/raw/source.mp4" type='video/mp4'>

      </video>
        </div>
      </div>

    </div>
  </div>


      <div class="curve-lines">
        <img class="desk-line" src="/assets/curved-desk.png">
        <img class="mob-line" src="/assets/curved-mob.png">
    </div>

    <div class="movie-type">
	
        <h1>{{ $video->title }}</h1>

    </div>
    <div class="col-md-12 col-sm-12 movie-summary">
	        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">{{ $video->title }}</li>
        </nav>
	
        <h1 class="summary">Synopsis</h1>
        <p>{{ $video->description }}</p>
		
    </div>

   

    <div class="footer col-md-12">
        <div class="col-md-12">
            <i class="fa fa-facebook fa-2x footer-icons"></i>
            <i class="fa fa-instagram fa-2x footer-icons"></i>
            <i class="fa fa-twitter fa-2x footer-icons"></i>
            <i class="fa fa-youtube fa-2x footer-icons"></i>
        </div>

        <div class="col-md-12 col-sm-12">
            <div class="col-md-3 col-sm-3">
                <li><a href="#">Audio and Subtitles</a></li>
                <li><a href="#">Media Centre</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Contact Us</a></li>
            </div>
            <div class="col-md-3 col-sm-3">
                <li><a href="#">Audio Description</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Legal Notices</a></li>
            </div>
            <div class="col-md-3 col-sm-3">
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Cookies Preferences</a></li>
            </div>
            <div class="col-md-3 col-sm-3">
                <li><a href="#">Gift Cards</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Corporate Information</a></li>
            </div>
        </div>
        <div class="col-md-12 copyright">
            <h4>A Collaborative Effort with</h4>
            <img class="rtm" src="/assets/rtm-finas.png">
            <p>© 2019 Insight Malaysia, All Right Reserved</p>
        </div>
    </div>

    <!-- this slide should inherit the sizes attr from the parent slider -->
    <img data-lazy="http://placehold.it/350x300?text=6-350w" data-srcset="http://placehold.it/650x300?text=6-650w 650w, http://placehold.it/960x300?text=6-960w 960w">
    </div>
    </section>

    @include('partials.scripts')


</body>

</html>