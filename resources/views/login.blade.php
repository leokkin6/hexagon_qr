<!DOCTYPE html>
<html>
    <head>
        <title>Employee On Screen View</title>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Elegant Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } 
        </script>
        <!-- //custom-theme  -->
        <link rel="stylesheet" href="css/style.css">
        <!-- font-awesome icons -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- //font-awesome icons -->
        <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    </head>
    <body>
        <div class="login-form w3_form">
            <!--  Title-->
            <div class="login-title w3_title">
            </div>
            <div class="login w3_login">
                <h2 class="login-header w3_header">Log in</h2>
                @if(isset(Auth::user()->email))
                <script>window.location="/";</script>
                @endif
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="w3l_grid">
                    <!-- <form class="login-container" action="post" method="{{ url('/main/checklogin') }}">
                        {{ csrf_field() }}
                           <input type="email" placeholder="Email" name="email" required="" >
                           <input type="password" placeholder="Password" name="password" required="">
                           <input type="submit" name="login" value="Login">
                        </form> -->
                    <form class="login-container" method="post" action="{{ url('/main/checklogin') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Enter Email</label>
                            <input type="email" name="email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" name="password" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-primary" value="Login" />
                        </div>
                    </form>
                    <div class="second-section w3_section">
                        <div class="bottom-header w3_bottom">
                        </div>
                    </div>
                    <div class="bottom-text w3_bottom_text">
                        <p>No account yet?<a href="#">Signup</a></p>
                        <h4> <a href="#">Forgot your password?</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>