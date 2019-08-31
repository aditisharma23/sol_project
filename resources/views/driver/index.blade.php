<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sol Recycling - Driver Sign Up</title>
    <!-- Bootstrap CSS -->
     <meta name="user-id" content="<?php if(Auth::user()){ echo Auth::user()->id; } ?>">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{ asset('vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
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
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center">
                <a href="index.php"><img src="{{ asset('images/sol-recycling-logo.png')}}" alt="Sol Recycling Logo" class="middle-img" title="Sol Recycling Logo"></a>
                <p>Looking to become a driver for Sol Recycling. Sign Up Now</p>
            </div>
            <div class="card-body">

              <div class="row buttons-haulers">
                
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a href="{{route('driver')}}" class="btn btn-success btn-block">Drivers</a>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a href="{{route('hauler')}}" class="btn btn-primary btn-block">Haulers</a> 
              </div>
              </div>
                
<div id="app">

    <router-view name="driverIndex"></router-view>
    <router-view></router-view>

</div>


            </div>
            <div class="card-footer bg-white">
                <p>Already a member? <a href="{{ route('login')}}" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>

 
</html>