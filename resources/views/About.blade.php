
@extends('layouts.main')

@section('content')
<style media="screen">
	.pb_slant-light:after{
		bottom: -20%;
	}
</style>

<!-- END section -->
<section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home" style="background-image: url({{asset($About->image)}});height:50vh;    background-position: bottom;">
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
				<h1 class="text-uppercase">About Us</h1>


			</div>
		</div>
		<div class="row justify-content-center" >
			<div class="col-lg-10 col-md-10 col-sm-12 text-center">
				<p class="details"> {!!$About->TextTrans('manegarText') !!}</p>

			</div>

		</div>

	</div>


</section>

<!-- END section -->

<section class="pb_section bg-light pb_slant-white pb_pb-250" >
	<div class="container-fluid">
		<div class="row justify-content-center">
			<h1 class="text-uppercase">Timeline</h1>
		</div>

		<div class="row   ">




			<div id="timeline">
        <?php foreach ($Timeline as $key => $value): ?>
          <div class="dot" id="Timeline{{$key}}">
            <span></span>
            <date>{{$value->date}}</date>
          </div>
        <?php endforeach; ?>


				<div class="inside"></div>
			</div>

			<!-- Modals -->
      <?php foreach ($Timeline as $key => $value): ?>
        <article class='modal Timeline{{$key}}'>
          <date>{{$value->date}}</date>
          <h2>{{$value->TextTrans('title')}}</h2>
          {!! $value->TextTrans('description')!!}
         </article>

      <?php endforeach; ?>

			<article class='modal two'>
				<date>08/09 - 1649</date>
				<h2>Salut les louzeurs</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates magnam excepturi laboriosam minima soluta, quae. Sunt repellat totam non, et sed in veniam fuga odio eius! Nesciunt amet optio recusandae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum sit dolor sint amet, corporis aperiam nihil, quas, accusantium enim suscipit rem non possimus officiis. Recusandae hic at, fugiat eos eveniet.</p>
			</article>

			<article class='modal three'>
				<date>21/07 - 1831</date>
				<h2>Eat 'em all !</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates magnam excepturi laboriosam minima soluta, quae. Sunt repellat totam non, et sed in veniam fuga odio eius! Nesciunt amet optio recusandae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum sit dolor sint amet, corporis aperiam nihil, quas, accusantium enim suscipit rem non possimus officiis. Recusandae hic at, fugiat eos eveniet.</p>
			</article>

			<article class='modal four'>
				<date>03/02 - 1992</date>
				<h2>Mais pourquoi?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates magnam excepturi laboriosam minima soluta, quae. Sunt repellat totam non, et sed in veniam fuga odio eius! Nesciunt amet optio recusandae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum sit dolor sint amet, corporis aperiam nihil, quas, accusantium enim suscipit rem non possimus officiis. Recusandae hic at, fugiat eos eveniet.</p>
			</article>
		</div>
	</div>
</section>

<section class="pb_section bg-light pb_slant-white pb_pb-250"  >

</section>

<section class="pb_section" id="counter">
	<div class="container">
		<div class="row">
		    <br/>
		   <div class="col text-center">

			</div>



		</div>
			<div class="row text-center">

        <?php foreach ($Counter as $key => $value): ?>
          <div class="col-md-3">
            <div class="counter">
              <!-- <i class="fa fa-calendar fa-4x" aria-hidden="true"></i> -->
              <img src="{{asset($value->image)}}" alt="">
              <h2 class="timer count-title count-number" data-to="{{$value->number}}" data-speed="1500"></h2>
              <p class="count-text ">{{$value->TextTrans('name')}}</p>
            </div>
          </div>
        <?php endforeach; ?>


	              <!-- <div class="col">
	               <div class="counter">
	      <i class="fa fa-child fa-4x" aria-hidden="true"></i>
	      <h2 class="timer count-title count-number" data-to="217" data-speed="1500"></h2>
	      <p class="count-text ">Happy Clients</p>
	    </div>
	              </div>
	              <div class="col">
	                  <div class="counter">
	      <i class="fa fa-lightbulb-o fa-4x"></i>
	      <h2 class="timer count-title count-number" data-to="9760" data-speed="1500"></h2>
	      <p class="count-text ">Design Complete</p>
	    </div></div>
	              <div class="col">
	              <div class="counter">
	     <i class="fa fa-handshake-o fa-4x" aria-hidden="true"></i>
	      <h2 class="timer count-title count-number" data-to="3" data-speed="1500"></h2>
	      <p class="count-text ">Our Partners</p>
	    </div>
	              </div> -->
	         </div>
	</div>
</section>
<!-- end section -->

<!-- start section -->
<section class="pb_section"  >

	<div class="container">
		<div class="row">

			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-12">
						<div class="card    " style="width:100%;height:auto">

						<div class="card-body">
						<h4 class="card-title">Our Vision</h4>
             {!!$About->TextTrans('vision') !!}
						</div>

						</div>
					</div>
					<div class="col-lg-12">
						<div class="card   " style="width:100%;height:auto">

						<div class="card-body">
						<h4 class="card-title">Our Mission</h4>
            {!!$About->TextTrans('mission') !!}
						</div>

						</div>
					</div>
				</div>



			</div>
			<!--  -->

			<!--  -->
			<div class="col-lg-6">
				<div class="card  " style="width:100%;height:auto">

				<div class="card-body">
				<h4 class="card-title">Our Messsage</h4>
        {!!$About->TextTrans('message') !!}
				</div>

				</div>
			</div>
			<!--  -->

		</div>
	</div>

</section>


<!-- end section -->
@endsection
@section('js')

<script type="text/javascript">
$('.dot:nth-child(1)').click(function(){
$('.inside').animate({
  'width' : '20%'
}, 500);
});
$('.dot:nth-child(2)').click(function(){
$('.inside').animate({
  'width' : '40%'
}, 500);
});
$('.dot:nth-child(3)').click(function(){
$('.inside').animate({
  'width' : '60%'
}, 500);
});
$('.dot:nth-child(4)').click(function(){
$('.inside').animate({
  'width' : '80%'
}, 500);
});
if ($('#switch1').not(':checked')){
$('.modal').wrap('<div class="mask"></div>')
$('.mask').click(function(){
  $(this).fadeOut(300);
  $('.mask article').animate({
    'top' : '-100%'
  }, 300)
});

$('.dot').click(function(){
  var modal = $(this).attr('id');
  $('.mask').has('article.' + modal).fadeIn(300);
  $('.mask article.' + modal).fadeIn(0).animate({
    'top' : '10%'
  }, 300);
});
}

</script>
</script>
 <script type="text/javascript">
 var lastScrollTop = 600;
 var counter=0;
 $(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop && counter ==0){
		 
		 counter++;
(function ($) {
$.fn.countTo = function (options) {
	options = options || {};

	return $(this).each(function () {
		// set options for current element
		var settings = $.extend({}, $.fn.countTo.defaults, {
			from:            $(this).data('from'),
			to:              $(this).data('to'),
			speed:           $(this).data('speed'),
			refreshInterval: $(this).data('refresh-interval'),
			decimals:        $(this).data('decimals')
		}, options);

		// how many times to update the value, and how much to increment the value on each update
		var loops = Math.ceil(settings.speed / settings.refreshInterval),
			increment = (settings.to - settings.from) / loops;

		// references & variables that will change with each update
		var self = this,
			$self = $(this),
			loopCount = 0,
			value = settings.from,
			data = $self.data('countTo') || {};

		$self.data('countTo', data);

		// if an existing interval can be found, clear it first
		if (data.interval) {
			clearInterval(data.interval);
		}
		data.interval = setInterval(updateTimer, settings.refreshInterval);

		// initialize the element with the starting value
		render(value);

		function updateTimer() {
			value += increment;
			loopCount++;

			render(value);

			if (typeof(settings.onUpdate) == 'function') {
				settings.onUpdate.call(self, value);
			}

			if (loopCount >= loops) {
				// remove the interval
				$self.removeData('countTo');
				clearInterval(data.interval);
				value = settings.to;

				if (typeof(settings.onComplete) == 'function') {
					settings.onComplete.call(self, value);
				}
			}
		}

		function render(value) {
			var formattedValue = settings.formatter.call(self, value, settings);
			$self.html(formattedValue);
		}
	});
};

$.fn.countTo.defaults = {
	from: 0,               // the number the element should start at
	to: 0,                 // the number the element should end at
	speed: 1000,           // how long it should take to count between the target numbers
	refreshInterval: 100,  // how often the element should be updated
	decimals: 0,           // the number of decimal places to show
	formatter: formatter,  // handler for formatting the value before rendering
	onUpdate: null,        // callback method for every time the element is updated
	onComplete: null       // callback method for when the element finishes updating
};

function formatter(value, settings) {
	return value.toFixed(settings.decimals);
}
}(jQuery));


jQuery(function ($) {
// custom formatting example
$('.count-number').data('countToOptions', {
formatter: function (value, options) {
	return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
}
});

// start all the timers
$('.timer').each(count);

function count(options) {
var $this = $(this);
options = $.extend({}, options || {}, $this.data('countToOptions') || {});
$this.countTo(options);
}
});

}
});
</script>

@endsection
