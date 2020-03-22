<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Purple Art Agency</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('main/css/bootstrap/bootstrap.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('main/css/full-slider.css')}}" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}"/>
  </head>

  <body>


    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php foreach ($DepartmentImage as $key => $value): ?>
              <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="<?php if($key==0){ echo "active";} ?>"></li>
          <?php endforeach; ?>

        </ol>
        <div class="carousel-inner" role="listbox">
          <?php foreach ($DepartmentImage as $key => $value): ?>
            <div class="carousel-item <?php if($key==0){ echo "active";} ?>" style="background-image: url({{asset($value->image)}})">

            </div>
          <?php endforeach; ?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>




    <!-- Bootstrap core JavaScript -->

        <script src="{{asset('main/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" charset="utf-8"></script>

        <script src="{{asset('main/js/bootstrap.min.js')}}"></script>

  </body>

</html>
