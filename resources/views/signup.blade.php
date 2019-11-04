<!DOCTYPE html>
<html>

<head>
    @include('partials.head')
</head>

<body>

<div class="login-bg" id="login-bg">
    <div class="login-details">
        <div class="login-logo">
            <a href="../"><img src="assets/login-logo.png"></a>
        </div>
        <div class="col-md-12">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="slogan">
                    <h1>SO</h1>
                    <h1>MUCH</h1>
                    <h1>TO TELL</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12" style="padding-top: 100px;">
                <div class="login-form">
                    <form class="form-horizontal" method="" action="">

                        <div class="form-group">
                            <h2 class="signin-title">Sign In</h2>
                            <div class="">
                                <h3>Email</h3>
                                <input type="email" placeholder="example@example.com" class="form-control" name="email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <h3>Password</h3>
                            <div class="">
                                <input id="password-field" placeholder="•••••••••" type="password" class="form-control" name="password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>

                        <div class="forgot-pass">
                            <a href="forgot-pass.php">
                                <p>Forgot your email or password?</p>
                            </a>
                        </div>
                        <div class="signin-btn">
                            <a href="dashboard.php">
                                <button>Sign In</button>
                            </a>
                        </div>
                        <div class="remember-me">
                            <input type="checkbox" class="remember-checkbox" checked="true" name=""> <span>Remember me</span>
                        </div>

                    </form>
                    {{-- <div class="fb-login">
                        <img class="fb-login-icon" src="assets/fb.png"><span>Login with Facebook</span>
                    </div> --}}
                    <div class="new-to-insight">New to Insight Malaysia? <a href="signup.php">Sign up now.</a></div>
                </div>
            </div>
        </div>

    </div>
</div>

</body>

</html>
