<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-slide-dropdown">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-slide-dropdown">
        <ul class="nav navbar-nav">
            <li><div><a class="logo-link" href="/"><img src="/assets/logo.png"></a></div></li>
            <li class="active"><a href="#">HOME</a></li>
            <li><a href="#">IM ORIGINALS</a></li>
            <li><a href="#">FRESH</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">GENRE <span class="caret"></span></a>               
              <ul class="dropdown-menu" role="menu">
                <div class="dropdown-arrow"></div>
{{--
                <li><a href="#">ACTION/ADVENTURE</a></li>
                <li><a href="#">COMEDY</a></li>
                <li><a href="#">DRAMA</a></li>
                <li><a href="#">DOCUMENTRARY</a></li>
                <li><a href="#">HORROR/THRILLER</a></li>
                <li><a href="#">ROMANCE</a></li>
--}}
                @foreach($categories as $category)
                    <li><a href="#"> {{ $category->title }}</a></li>
                @endforeach

              </ul>                
            </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <li>
            <form class="navbar-form navbar-left" role="search">
              <div class="search-box">
                <input class="search-txt" type="text" name=" " placeholder="Type to search"></input>
                <a href="#" class="search-btn">
                  <i class="fa fa-search fa-2x"></i>
                </a>
              </div>
            </form>
          </li>
          <li>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn login-btn" data-toggle="modal" data-target="#myModal">LOGIN</button>
          </li>
        </ul>
  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <!-- Modal -->
  <div class="modal fade login-modal" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="col-md-6 col-sm-12 registration-sec">
            <p class="registration-title">I’m anywhere, anytime</p>
            <p class="registration-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            <div class="">
                <a href="dashboard.php">
                    <button class="register">Register</button>
                </a>
              </div>
            </div>
          <div class="col-md-6 col-sm-12 login-sec">
                          <div class="login-form">
                    <form class="form-horizontal" method="" action="">
                        <p class="signin-title">Sign In</p>
                        <div class="form-group username-sec">
                            <div class="">
                                <p>Email</p>
                                <input type="email" placeholder="example@example.com" class="form-control" name="email" value="">
                            </div>
                        </div>
                        <div class="form-group password-sec">
                            <p>Password</p>
                            <div class="">
                                <input id="password-field" placeholder="**********" type="password" class="form-control" name="password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>

                        <div class="">
                            <a href="dashboard.php">
                                <button class="login">Login</button>
                            </a>
                        </div>
                        <div class="remember-me">
                            <input type="checkbox" class="remember-checkbox"  name=""> 
                            <span>Remember me</span>
                            <a href="#" class="need-help">Need Help?</a>
                        </div>
                    </form>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>

