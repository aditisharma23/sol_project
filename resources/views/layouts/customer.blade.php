<!doctype html>
<html lang="{{ app()->getLocale() }}">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-id" content="<?php if(Auth::user()){ echo Auth::user()->id; } ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Sol Recycling</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="#"><img src="{{ asset('images/sol-recycling-logo.png') }}" alt="Sol Recycling Logo" title="Sol Recycling Logo"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                         @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                         @else
                            <li class="nav-item dropdown notification">
                                <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                    <li>
                                        <div class="notification-title"> Notifications</div>
                                        <div class="notification-list">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action active">
                                                    <div class="notification-info">
                                                        <div class="notification-list-user-block">
                                                            <span class="notification-list-user-name">Pickup Completed by Driver Name</span><br/>
                                                            <span class="small"><i class="fa fa-map"></i> 1655 Finfar Crt Unit 2B, Mississauga - ID #549453 - <strong class="notification-list-user-name">Rate Now</strong></span>
                                                            <div class="notification-date">1 Hour ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                     <div class="notification-info">
                                                        <div class="notification-list-user-block">
                                                            <span class="notification-list-user-name">Invoice for the amount of $55.99 is ready</span><br/>
                                                            <span class="small"><i class="fa fa-map"></i> 1655 Finfar Crt Unit 2B, Mississauga - ID #549453 - <strong class="notification-list-user-name">View Invoice</strong></span>
                                                            <div class="notification-date">1 Hour ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                     <div class="notification-info">
                                                        <div class="notification-list-user-block">
                                                            <span class="notification-list-user-name">Your payment of $55.88 has been processed for Invoice #42444</span><br/>
                                                            <span class="small"><i class="fa fa-map"></i> 1655 Finfar Crt Unit 2B, Mississauga - ID #549453 - <strong class="notification-list-user-name">View Invoice</strong></span>
                                                            <div class="notification-date">1 Hour ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-footer"> <a href="notifications.php">View all notifications</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary solid-primary" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false"> + Add A Service</a>
                            </li>
                            <li class="nav-item dropdown nav-user">
                                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/avatar-1.jpg') }}" alt="" class="user-avatar-md rounded-circle"></a>
                                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="nav-user-info">
                                        <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->name }} </h5>
                                        <span class="status"></span><span class="ml-2">{{ Auth::user()->email }}</span>
                                    </div>
                                    <a class="dropdown-item" href="{{route('customer.profilesetting')}}"><i class="fas fa-user mr-2"></i>Account</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-power-off mr-2"></i>Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                         @endguest
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active home" href="{{route('customer.customer.index')}}"><i class="fa fa-fw fa-user-circle"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link services" href="{{route('customer.customer.services')}}"><i class="fas fa-fw fa-recycle"></i>Services</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link feedback" href="{{route('customer.customer.feedback')}}"><i class="fas fa-fw fa-comment-alt"></i>Feedback</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link pickups" href="{{route('customer.customer.pick-ups')}}"><i class="fas fa-fw fa-truck-moving"></i>Pick ups</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link invoices" href="{{route('customer.customer.invoices')}}"><i class="fab fa-fw fa-wpforms"></i>Invoices</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link setting" href="{{route('customer.profilesetting')}}"><i class="fa fa-fw fa-cogs"></i>Settings</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>



    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
     <!-- footer -->
   <!-- ============================================================== -->
   <footer class="footer">
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
               Copyright © 2018 Sol Recycling Inc. All rights reserved. Powered by <a href="#">DE Digital Inc</a>.
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
               <div class="text-md-right footer-links d-none d-sm-block">
                  <a href="javascript: void(0);">About</a>
                  <a href="javascript: void(0);">Support</a>
                  <a href="javascript: void(0);">Contact Us</a>
               </div>
            </div>
         </div>
      </div>
   </footer>

            <!-- ============================================================== -->
            <!-- end footer -->
</div>
 <!-- end wrapper  -->
         <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{ asset('vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<!-- bootstap bundle js -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<!-- slimscroll js -->
<script src="{{ asset('vendor/slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('vendor/parsley/parsley.js') }}"></script>

<!-- main js -->
<script src="{{ asset('libs/js/main-js.js') }}"></script>
<!-- chart chartist js -->
<!-- <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
<! sparkline js -->
<!--<script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<!morris js -->
<!--<script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>-->
<!--<script src="assets/vendor/charts/morris-bundle/morris.js"></script>-->
<!-- chart c3 js -->
<!--<script src="assets/vendor/charts/c3charts/c3.min.js"></script>
<script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="assets/libs/js/dashboard-ecommerce.js"></script> -->
 <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
     @yield('scripts')
</body>
</html>