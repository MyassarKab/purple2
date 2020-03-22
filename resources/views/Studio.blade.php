@extends('layouts.main')
@section('css')
<!-- Magnific-popup -->
<!-- <link rel="stylesheet" href="{{asset('main/css/magnific-popup.css')}}"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
@endsection
@section('content')
<style media="screen">
 .pb_slant-light:after{
   bottom: -20%;
 }
</style>
<!-- END section -->
  <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home" style="background-image: url({{asset($StudioAbout->image)}});height:50vh">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-6">


        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-5 relative align-self-center">


        </div>
      </div>
    </div>
  </section>

  <!-- END section -->
  <section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-features">
    <div class="container">
      <div class="row justify-content-center mb-2">
        <div class="col-md-6 text-center mb-5">
           <h1 class="text-uppercase">{{$StudioAbout->TextTrans('title')}}</h1>


        </div>
      </div>
      <div class="row justify-content-center" >
        <div class="col-lg-10 col-md-10 col-sm-12 text-center">
          {!! $StudioAbout->TextTrans('description') !!}
        </div>

      </div>

    </div>


  </section>

<style media="screen">

/* clear fix */
.grid:after {
content: '';
display: block;
clear: both;
}

/* ---- .grid-item ---- */

.grid-sizer,
.grid-item {
width: 33.333%;
}

.grid-item {
float: left;
}

.grid-item img {
display: block;
max-width: 100%;
}

</style>
  <!-- END section -->
  <section class="pb_section bg-light pb_slant-white pb_pb-250">
			<div class="container-fluid">


							<div class="row justify-content-center">
								<div class=" col-12 body_block  align-content-center">
						 <div class="portfolio">
								 <div class="container-fluid">
										 <!--=================== masaonry portfolio start====================-->

                         <div class="grid popup-gallery">
                           <div class="grid-sizer"></div>
                          <?php foreach ($StudioPortfolio as $key => $value): ?>
                            <a href="{{asset($value->image)}}" title="" class="galleryItem " data-group="{{$key}}">
                            <div class="grid-item">




                              <img src="{{asset($value->image)}}" />
                            </div>
                              </a>
                         <?php endforeach; ?>







										 </div>

                     <div class="paginateLinks">
                       {{ $StudioPortfolio->links() }}
                     </div>

										 <!--=================== masaonry portfolio end====================-->
								 </div>
						 </div>
				 </div>
							</div>
							</div>
		</section>
@endsection
@section('js')

<!--Portfolio Filter-->
  <script src="{{asset('main/js/imgloaded.js')}}"></script>
  <script src="{{asset('main/js/isotope.js')}}"></script>
<!-- Magnific-popup -->
<!-- <script src="{{asset('main/js/jquery.magnific-popup.min.js')}}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" charset="utf-8"></script>
<script src="{{asset('main/js/portfolio.js')}}"></script>
<script type="text/javascript">
var groups = {};
$('.galleryItem').each(function() {
  var id = parseInt($(this).attr('data-group'), 10);

  if(!groups[id]) {
    groups[id] = [];
  }

  groups[id].push( this );
});


$.each(groups, function() {

  $(this).magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      gallery: { enabled:true }
  })

});


var $grid = $('.grid').isotope({
  itemSelector: '.grid-item',
  percentPosition: true,
  masonry: {
    columnWidth: '.grid-sizer'
  }
});

$grid.imagesLoaded().progress( function() {
  $grid.isotope('layout');
});

</script>

@endsection
