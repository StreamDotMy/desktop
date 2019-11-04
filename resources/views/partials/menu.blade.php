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
            <li class="active"><a href="/">HOME</a></li>
            <li><a href="#">IM ORIGINALS</a></li>
            <li><div><a class="logo-link" href="/signup"><img src="/assets/logo.png"></a></div></li>
            <li><a href="/signup">SIGNUP</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">GENRE <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <div class="dropdown-arrow"></div>
                @foreach($categories as $category)
                    <li><a href="#"> {{ $category->title }}</a></li>
                @endforeach
              </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left" role="search">
            <div class="search-box">
        <input class="search-txt" type="text" name=" " placeholder="Type to search"></input>
        <a href="#" class="search-btn">
            <i class="fa fa-search fa-2x"></i>
        </a>
    </div>
        </form>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

