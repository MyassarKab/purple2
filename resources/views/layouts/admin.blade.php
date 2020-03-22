<html>
    <head>
        <title>Admin - @yield('title')</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      	<link rel="icon" href="{{ asset('images/purplelogo.png') }}" type="image/ico" />
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <!-- <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <!-- NProgress -->
        <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{ asset('css/purple.css') }}" rel="stylesheet">
   <!-- <script>
alert('fff');
   </script> -->
        <!-- bootstrap-progressbar -->
        <link href="{{ asset('css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{{ asset('css/jqvmap.min.css') }}" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">
          @yield('css')
        <!-- Custom Theme Style -->
        <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">

    </head>
    <body class="nav-md">
      <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title">  <span>Purple Art Agency </span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{asset('images/purplelogo.png')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Admin</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-picture-o" aria-hidden="true"></i> Portfolio <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/Portfolio-Show">All Portfolio</a></li>
                    <li><a href="/Portfolio-About ">About Portfolio</a></li>
                    <li><a href="/Portfolio-Images">Images Portfolio</a></li>
                    <li><a href="/AdPortfolio-Show">963ad Portfolio</a></li>
                    <li><a href="/AdPortfolio-Images">Images 963ad Portfolio</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-camera" aria-hidden="true"></i> Studio <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                  <li><a href="\Studio-All"> Studio Info </a></li>
                  <li><a href="\Studio-About">

                    Studio About Info </a> </li>
                    <li><a href="\StudioPortfolio">

                      Studio Portfolio </a> </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-object-group" aria-hidden="true"></i> Department <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/Department-All">ALL Department</a></li>
                    <li><a href="/Department-Images">Images Department</a></li>

                  </ul>
                </li>
                <li><a href="\Sketch-All"><i class="fa fa-paint-brush" aria-hidden="true"></i> Sketches </a></li>
                <li><a href="\Service-All"><i class="fa fa-handshake-o" aria-hidden="true"></i> Services </a></li>
                <li><a href="\Testimonial-All"><i class="fa fa-certificate" aria-hidden="true"></i> Testimonial </a></li>
                <!-- <li><a href="\Client-All"><i class="fa fa-users" aria-hidden="true"></i> Clients </a></li> -->
                <li><a href="\News-All"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News </a></li>
                <li><a href="\SiteMap-All"><i class="fa fa-sitemap" aria-hidden="true"></i> SiteMap </a></li>
                <li><a href="\ContactInfo-All"><i class="fa fa-address-book" aria-hidden="true"></i> Contact Info </a></li>
                <!-- <li><a href="\WeAre-All"><i class="fa fa-user-circle" aria-hidden="true"></i> We Are Info </a></li> -->
                <li><a href="\About"><i class="fa fa-address-card-o" aria-hidden="true"></i> About us Info </a></li>
                <li><a href="\Timeline"><i class="fa fa-clock-o" aria-hidden="true"></i> Timeline Info </a></li>
                <!-- <li><a href="\Team-All"><i class="fa fa-odnoklassniki" aria-hidden="true"></i> Team Info </a></li> -->
                <li><a href="\Counter-All"><i class="fa fa-sort-numeric-desc" aria-hidden="true"></i> Counter Info </a></li>
                <li><a href="\Contact-All"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact Message </a></li>



              </ul>
            </div>


          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="{{asset('images/purplelogo.png')}}" alt="">Admin
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="\Admin-Edit"> Profile</a></li>
                  <li>
                    <a href="\admin"> Admin Home</a>
                  </li>



                  <li>  <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out pull-right"></i>   {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                    </form></li>
                </ul>
              </li>


            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->


        @yield('content')

<!-- footer content -->
<footer>
  <div class="pull-right">
      build whit love <a href="http://purpleartagency.com">  Purple Art Agency </a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>
<!-- jQuery -->
   <script src="{{ asset('js/jquery.min.js') }}"></script>
   <!-- Bootstrap -->
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <!-- FastClick -->
   <script src="{{ asset('js/fastclick.js') }}"></script>
   <!-- NProgress -->
   <script src="{{ asset('js/nprogress.js') }}"></script>
   <!-- Chart.js -->
   <script src="{{ asset('js/Chart.min.js') }}"></script>
   <!-- gauge.js -->
   <script src="{{ asset('js/gauge.min.js') }}"></script>
   <!-- bootstrap-progressbar -->
   <script src="{{ asset('js/bootstrap-progressbar.min.js') }}"></script>
   <!-- iCheck -->
   <script src="{{ asset('js/icheck.min.js') }}"></script>
   <!-- Skycons -->
   <script src="{{ asset('js/skycons.js') }}"></script>
   <!-- Flot -->
   <script src="{{ asset('js/jquery.flot.js') }}"></script>
   <script src="{{ asset('js/jquery.flot.pie.js') }}"></script>
   <script src="{{ asset('js/jquery.flot.time.js') }}"></script>
   <script src="{{ asset('js/jquery.flot.stack.js') }}"></script>
   <script src="{{ asset('js/jquery.flot.resize.js') }}"></script>
   <!-- Flot plugins -->
   <script src="{{ asset('js/jquery.flot.orderBars.js') }}"></script>
   <script src="{{ asset('js/jquery.flot.spline.min.js') }}"></script>
   <script src="{{ asset('js/curvedLines.js') }}"></script>
   <!-- DateJS -->
   <script src="{{ asset('js/date.js') }}"></script>
   <!-- JQVMap -->
   <script src="{{ asset('js/jquery.vmap.js') }}"></script>
   <script src="{{ asset('js/jquery.vmap.world.js') }}"></script>
   <script src="{{ asset('js/jquery.vmap.sampledata.js') }}"></script>
   <!-- bootstrap-daterangepicker -->
   <script src="{{ asset('js/moment.min.js') }}"></script>
   <script src="{{ asset('js/daterangepicker.js') }}"></script>
    @yield('js')
   <!-- Custom Theme Scripts -->
   <script src="{{ asset('js/custom.min.js') }}"></script>



</body>
</html>
