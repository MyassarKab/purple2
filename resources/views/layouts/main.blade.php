<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Purple Art Agency</title>
      <meta name="description" content="">
      <meta name="keywords" content="">

      <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">
      <link href="{{asset('main/css/foundation.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{asset('main/css/bootstrap/bootstrap.css')}}">
      <link href="{{asset('main/css/twentytwenty.css')}}" rel="stylesheet" type="text/css" />

      <link rel="stylesheet" href="{{asset('main/css/bootstrap/bootstrap.css')}}">

      <!-- <link rel="stylesheet" href="{{asset('main/fonts/law-icons/font/flaticon.css')}}"> -->

      <link rel="stylesheet" href="{{asset('main/fonts/fontawesome/css/font-awesome.min.css')}}">


      <link rel="stylesheet" href="{{asset('main/css/slick.css')}}">
      <link rel="stylesheet" href="{{asset('main/css/slick-theme.css')}}">

      <link rel="stylesheet" href="{{asset('main/css/helpers.css')}}">
      <link rel="stylesheet" href="{{asset('main/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('main/css/landing-2.css')}}">
    @yield('css')
      <link rel="stylesheet" href="{{asset('main/css/custom.css')}}">
      <link rel="shortcut icon" type="image/png" href="{{asset('main/img/logo3.png')}}"/>
    </head>
    <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"> <img src="{{asset('main/img/logo.png')}}" alt="" width="200"> </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fa fa-bars" aria-hidden="true"></i> </span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/About-us">About</a></li>
            <li class="dropdown"><a class="nav-link dropdown-toggle" role="button" id="Portfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>
              <ul class="dropdown-menu" role="menu">
                      <?php foreach ($Portfolio as $key => $value): ?>
                 <li><a href="/Our-Portfolio/{{$value->name_en}}">{{$value->name_en}}</a></li>
                      <?php endforeach; ?>

              </ul>
            </li>
            <li class="dropdown"><a class="nav-link dropdown-toggle" role="button" id="Portfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Studio</a>
              <ul class="dropdown-menu" role="menu">
                      <?php foreach ($Studio as $key => $value): ?>
                 <li><a href="/Our-Studio/{{$value->name_en}}">{{$value->name_en}}</a></li>
                      <?php endforeach; ?>

              </ul>
            </li>



            <li class="nav-item"><a class="nav-link" href="{{url('/Our-News')}}">News</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('/')}}#Contact">Contact us</a></li>
           </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->


    @yield('content')

    <section class="pb_section bg-light pb_slant-white pb_pb-250"  id="footer">
 	<div class="container">
 		<div class="row justify-content-center">
 			<div class="col-lg-4">
 				<img src="{{asset('main/img/logo.png')}}" alt="logo" width="300">
 			</div>
 			<div class="col-lg-4">
 				<h3>Adress</h3>
 				<p>{{$ContactInfo->TextTrans('name')}}</p>
 				<h3>Email</h3>
 				<p>{{$ContactInfo->email}}</p>
 				<h3>Phone</h3>
 				<p>{{$ContactInfo->phone1}}</p>
        <p>{{$ContactInfo->phone2}}</p>
        <p>{{$ContactInfo->phone3}}</p>

 			</div>
 			<div class="col-lg-4" id="site">
 				<h3>Site Map</h3>
        <?php foreach ($SiteMap as $key => $value): ?>
          <a href="{{url($value->link)}}">{{$value->TextTrans('title')}}</a>
        <?php endforeach; ?>

 			</div>
 		</div>
 	</div>
 </section>
 <!--  -->
        <footer class="pb_footer bg-light" role="contentinfo">
              <div class="container">
                <div class=" text-center">
                  <div class="col">
                    <ul class="list-inline">
                      <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="">
                  <div class="col text-center">
                    <p class="pb_font-14">&copy; 2019 <a href="http://963ad.net"></a>All Rights Reserved. <br> Designed &amp; Developed by <a href="http://963ad.net">963ad.net</a> </p>

                  </div>
                </div>
              </div>
            </footer>


           <!-- <div id="pb_loader" class="show fullscreen">
        		 <svg class="circular" width="48px" height="48px">
        			 <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        			 <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#752b90"/>
        		 </svg>
        	 </div> -->


           <script src="{{asset('main/js/jquery.min.js')}}"></script>

                     <script src="{{asset('main/js/popper.min.js')}}"></script>
                     <script src="{{asset('main/js/bootstrap.min.js')}}"></script>
                     <script src="{{asset('main/js/slick.min.js')}}"></script>
                     <script src="{{asset('main/js/jquery.mb.YTPlayer.min.js')}}"></script>

                     <script src="{{asset('main/js/jquery.waypoints.min.js')}}"></script>
                     <script src="{{asset('main/js/jquery.easing.1.3.js')}}"></script>

                    <script src="{{asset('main/js/main.js')}}"></script>
                 		<script src="{{asset('main/js/jquery.event.move.js')}}"></script>
                    <script src="{{asset('main/js/jquery.twentytwenty.js')}}"></script>

                    <!--Portfolio Filter-->
                      <script src="{{asset('main/js/imgloaded.js')}}"></script>
                      <script src="{{asset('main/js/isotope.js')}}"></script>
                    <!-- Magnific-popup -->
                    <script src="{{asset('main/js/jquery.magnific-popup.min.js')}}"></script>
                    <script src="{{asset('main/js/portfolio.js')}}"></script>
                    @yield('js')

                    <script>
                    $(function(){
                      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
                      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
                    });
                    </script>


        	</body>
        </html>
