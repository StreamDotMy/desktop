

@extends('layout.master')

@section('content')

<div class="video-bg">
        <a href="video">
            <video class="main-video" src="assets/video-bg.mp4" autoplay="true" metadata muted="true" playsinline></video>
            <div class="col-md-12 video-desc">
                <div class="col-md-6 col-sm-6">
                    <h1>Mangrove.</h1>
                    <p>Together with Malaysian Nature Society (MNS) of Pahang , around 100 volunteers which comprised of our employees & their family members, MNS representatives and members of the community planted 1,500 mangrove saplings, cleaned the beach and released some baby turtles at Pantai Chendor, Cherating.</p>
                    <i class="fa fa-star fa-2x" style="color: #f2bc44"></i>
                    <i class="fa fa-star fa-2x" style="color: #f2bc44"></i>
                    <i class="fa fa-star fa-2x" style="color: #f2bc44"></i>
                    <i class="fa fa-star fa-2x" style="color: #f2bc44"></i>
                    <i class="fa fa-star fa-2x"></i>
                </div>
                <div class="col-md-6 col-sm-6"></div>
            </div>
        </a>
        <div class="play-icon">
            <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><img src="assets/play-icon.png"></button>
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
                        <video id="my-video" class="video-js video-modal" controls preload="video-js vjs-default-skin vjs-big-play-centered" poster="../insight/videos/poster.png" data-setup='{}' autoplay>
                            <source src="videos/video-bg.mp4" type='video/mp4'>
                            <track kind="captions" src="../insight/videos/examples/shared/example-captions.vtt" srclang="en" label="English">
                                <track kind="subtitles" src="../insight/videos/examples/shared/example-captions.vtt" srclang="en" label="English">
                        </video>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="curve-lines">
        <img class="desk-line" src="assets/curved-desk.png">
        <img class="mob-line" src="assets/curved-mob.png">
    </div>

        <div class="categories">
        <div class="titles">
            <h3>IM Originals</h3>
        </div>

        <section class="regular slider">
		
		@foreach($videos as $key => $value)
            <div>
				<a href="{{ route('play', $value->id) }}">
                <img src="/storage/{{$value->id }}/image/image1.jpg">
				</a>
            </div>
		@endforeach	
      
        </section>
		@include('partials.contents')
    </div>

 
    @endsection
