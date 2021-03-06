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
  <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home" style="background-image: url({{asset('main/img/news_banner2.jpg')}});height:50vh">
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
           <h1 class="text-uppercase">{{$News->TextTrans('title')}}</h1>


        </div>
        <div class="col-lg-12 col-md-12 col-12">
              <article class="blog_card">
                          <div class="blog_card_top">
                              <img src="{{asset($News->image)}}" alt="blog title " />
                              <div class="blog_date">
                                {{ $News->created_at->format('d') }}
                                  <span>
                                    {{ $News->created_at->format(' M Y') }}
                                  </span>
                              </div>
                          </div>
                          <div class="blog_card_bottom">

                                    {!! $News->TextTrans('details') !!}
                          </div>
                      </article>
                    </div>

      </div>


    </div>


  </section>

<style media="screen">

.blog_card {
margin-bottom: 30px;
padding: 15px;
}
article{
    display: block;
    background: #f2f4f9;
}
.blog_card_top img{

    max-width: 100%;
}
.blog_card .blog_card_top .blog_date {
background-color: #ffffff;
width: 60px;
text-align: center;
border: solid 1px #99896e;
position: absolute;
top: -15px;
left: 15px;
font-weight: 400;
font-size: 30px;
line-height: 0.7;
padding: 15px 5px;
word-break: break-word;
color: #18181c;
}
.blog_card .blog_card_top .blog_date span {
font-size: 12px;
font-weight: 400;
color: #9c9ca9;
line-height: 2em;
}
.blog_card .blog_card_top {
position: relative;
}
.blog_card {
margin-bottom: 30px;
padding: 15px;
}
.blog_card .blog_card_bottom {
padding: 25px 0;
}
.blog_card .blog_card_bottom .meta_data {
font-size: 13px;
font-weight: 300;
margin-bottom: 30px;
}

</style>
  <!-- END section -->
  <section class="pb_section bg-light pb_slant-white pb_pb-250">
			<div class="container">
        <div class="row">





        </div>
        <div class="row ">
          <div class="paginateLinks">

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
