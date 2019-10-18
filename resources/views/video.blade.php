<!DOCTYPE html>
<html>

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.menu')

    <div class="video-bg">
        <video class="main-video" src="/videos/mystical.mp4" autoplay="true" metadata muted="true" playsinline></video>

        <div class="play-icon">
            <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><img src="/assets/play-icon.png"></button>
        </div>

    </div>

    <!--Video pop up -->
    <div class="play-icon">
        <img src="/assets/play-icon.png" data-toggle="modal" data-target="#homeVideo" class="img-responsive" onclick="playVid()">
    </div>
    <div class="modal fade" id="homeVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="video-close-btn" data-dismiss="modal" onclick="pauseVid()"><span class="x">&times;</span></button>
                <div class="">

                    <video id="gossVideo" class="embed-responsive-item video-js video-modal" controls preload="video-js vjs-default-skin vjs-big-play-centered"  poster="/storage/{{$video->id }}/image/image2.jpg" data-setup='{}'>
                        <source src="/storage/{{$video->id }}/raw/source.mp4" type='video/mp4'>
                    </video>
                </div>
            </div>
        </div>
    </div>
    <!--Video pop up -->

    <div class="curve-lines">
        <img class="desk-line" src="/assets/curved-desk.png">
        <img class="mob-line" src="/assets/curved-mob.png">
    </div>

    <div class="movie-type">
        <h1>{{ $video->title }}</h1>
        <div class="date-time">
            <span class="date">2017</span>
            <span class="duration">90 Minute</span>
            <span class="category">{{ $video->video_category->title }}</span>
        </div>
        <i class="fa fa-star fa-2x" style="color: #f2bc44"></i>
        <i class="fa fa-star fa-2x" style="color: #f2bc44"></i>
        <i class="fa fa-star fa-2x" style="color: #f2bc44"></i>
        <i class="fa fa-star fa-2x" style="color: #f2bc44"></i>
        <i class="fa fa-star fa-2x rating-border"></i>
        <span class="movie-episode">PG13</span>
    </div>
    <div class="col-md-12 col-sm-12 movie-summary">
        <h1 class="summary">Summary</h1>
        <p>{{ $video->description }}</p>
        <div class="col-md-12 summary-icons">
            <div class="col-md-3 col-sm-3">
                <i class="fa fa-plus"></i>
                <h4>My List</h4>
            </div>
            <div class="col-md-3 col-sm-3">
                <i class="fa fa-star"></i>
                <h4>Rate</h4>
            </div>
            <div class="col-md-3 col-sm-3">
                <i class="fa fa-share-alt"></i>
                <h4>Share</h4>
            </div>
            <div class="col-md-3 col-sm-3">
                <i class="fa fa-download"></i>
                <h4>Download</h4>
            </div>
        </div>
    </div>

    <div class="categories">
        <div class="titles">
            <h3>Similar</h3>
        </div>
        <section class="regular slider">
            <div>
                <img src="../assets/classics/Poster Film-70.jpg">
            </div>
            <div>
                <img src="../assets/classics/Poster Film-72.jpg">
            </div>
            <div>
                <img src="../assets/classics/Poster Film-73.jpg">
            </div>
            <div>
                <img src="../assets/classics/Poster Film-80.jpg">
            </div>
            <div>
                <img src="../assets/engaging/Poster Film-11.jpg">
            </div>
            <div>
                <img src="../assets/engaging/Poster Film-12.jpg">
            </div>
            <div>
                <img src="../assets/engaging/Poster Film-13.jpg">
            </div>
            <div>
                <img src="../assets/engaging/Poster Film-14.jpg">
            </div>
            <div>
                <img src="../assets/engaging/Poster Film-15.jpg">
            </div>
            <div>
                <img src="../assets/engaging/Poster Film-16.jpg">
            </div>
        </section>
    </div>

    <div class="categories">
        <div class="titles">
            <h3>Popular</h3>
        </div>

        <section class="regular slider">
            <div>
                <img src="../assets/popular/pop1.png">
            </div>
            <div>
                <img src="../assets/popular/pop2.png">
            </div>
            <div>
                <img src="../assets/popular/pop3.png">
            </div>
            <div>
                <img src="../assets/popular/pop4.png">
            </div>
            <div>
                <img src="../assets/popular/pop5.png">
            </div>
            <div>
                <img src="../assets/spectacular/Poster Film-44.jpg">
            </div>
            <div>
                <img src="../assets/spectacular/Poster Film-45.jpg">
            </div>
            <div>
                <img src="../assets/spectacular/Poster Film-59.jpg">
            </div>
            <div>
                <img src="../assets/spectacular/Poster Film-76.jpg">
            </div>
            <div>
                <img src="../assets/spectacular/Poster Film-79.jpg">
            </div>
        </section>
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
            <img class="rtm" src="../assets/rtm-finas.png">
            <p>© 2019 Insight Malaysia, All Right Reserved</p>
        </div>
    </div>

    <!-- this slide should inherit the sizes attr from the parent slider -->
    <img data-lazy="http://placehold.it/350x300?text=6-350w" data-srcset="http://placehold.it/650x300?text=6-650w 650w, http://placehold.it/960x300?text=6-960w 960w">
    </div>
    </section>
    <script>
        var vid = document.getElementById("gossVideo");

        function playVid() {
            vid.play();
        }

        function pauseVid() {
            vid.pause();
        }
    </script>

    @include('partials.scripts')

</body>

</html>
