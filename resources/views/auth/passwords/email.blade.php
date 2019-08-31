<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sol Recycling - Forgot Password</title>
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- forgot password  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
              <div class="card-header text-center"> <a href="index.php"><img src="{{ asset('images/sol-recycling-logo.png') }}" alt="Sol Recycling Logo" class="middle-img" title="Sol Recycling Logo"></a>
            <span class="splash-description">Don't worry, we'll send you an email to reset your password.</span></div>

            <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                @endif
                 <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="EnterEmailAddress">Enter Your Email Address</label>
                        <input class="form-control form-control-lg" type="email" name="email" value="{{ old('email') }}" required="" placeholder="Your Email" autocomplete="off">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group pt-1"><button type="submit" class="btn btn-primary btn-lg btn-block">Reset Password</button></div>
                </form>
            </div>
           <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="{{ route('register') }}" class="footer-link">Customer Sign Up</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="{{ route('hauler') }}" class="footer-link">Hauler Sign Up</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="{{ route('driver') }}" class="footer-link">Driver Sign Up</a></div>
               <div class="card-footer-item card-footer-item-bordered">
                    <a href="{{route('login')}}" class="footer-link">Login</a></div>
                
                
            </div>
           
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end forgot password  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

 
</html>
