
@extends('layouts.main')

@section('content')

<?php foreach ($Departments as $key => $value): ?>


   <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home">
     <div class="container">
       <div class="row align-items-center justify-content-center">
         <div class="col-md-6">
           <h2 class="heading mb-3 ">{{$value->TextTrans('title')}}</h2>
           <div class="sub-heading">
             <?php $linkValue=str_replace(' ', '-', $value->title_en) ?>
              <p class="mb-5"><a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="/Department/{{$linkValue}}"><span class="pb_font-14 text-uppercase pb_letter-spacing-1">See More</span></a> <span class="arrow-right"></span> </p>


           </div>
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
           <!-- <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Features</strong></h5> -->
           <h1 class="text-uppercase">{{$value->TextTrans('title')}}</h1>


         </div>
       </div>
       <div class="row justify-content-center" >
         <div class="col-lg-10 col-md-10 col-sm-12 text-center">
           <p class="details">{!!$value->TextTrans('description')!!}</p>
           <p class="mb-5"><a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="/Department/{{$linkValue}}"><span class="pb_font-14 text-uppercase pb_letter-spacing-1">See More</span></a> <span class="arrow-right"></span> </p>

         </div>

       </div>
     </div>
   </section>
<?php endforeach; ?>
   <!-- END section -->
   <!-- END section -->
 <section class="pb_section">
   <div class="container">
       <div class="row row justify-content-center">
         <div class="large-12 columns">
          <div class="twentytwenty-container">
            <?php foreach ($Sketch as $key => $value): ?>
              <img src="{{asset($value->sketch)}}" />
              <img src="{{asset($value->final)}}" />
            <?php endforeach; ?>


          </div>
         </div>
       </div>
   </div>
 </section>
 <!-- END section -->

 <!-- END section -->
		<section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-features">
			<div class="container"  >
				<div class="row justify-content-center mb-2">
					<div class="col-md-6 text-center mb-5">
						 <h1 class="text-uppercase">Our services</h1>


					</div>
				</div>
				<div class="row justify-content-center" >
					<div class="col-lg-10 col-md-10 col-sm-12 text-center">
						<p class="details">in the supermarket the decision of buying is linked to the  brilliant design colors and quality we make super food brands that can strongy compete and win the admiration</p>

					</div>

				</div>


			</div>


			<div class="container-fluid" id="service">
				<div class=" row wrapper">
          <?php foreach ($Service as $key => $value): ?>


				<div class="card">
						<input type="checkbox" id="card1" class="more" aria-hidden="true">
						<div class="content">
								<div class="front" style="background-image: url({{asset($value->image)}})">
										<div class="inner">
												<h2>{{$value->TextTrans('title')}}</h2>
												<div class="rating">

												</div>
												<label for="card1" class="button" aria-hidden="true">
														Details

												</label>

										</div>
								</div>
								<div class="back">
										<div class="inner">
											<h2>{{$value->TextTrans('title')}}</h2>

												<div class="description">
												     {!!$value->TextTrans('description')!!}
												</div>

												<label for="card1" class="button return" aria-hidden="true">
														<i class="fa fa-arrow-left"></i>
												</label>
										</div>
								</div>
						</div>
				</div>

  <?php endforeach; ?>
				<!--  -->

		</div>
			</div>
		</section>
		<!-- END section -->
    <!-- END section -->
      <section class="pb_section  " id="section-reviews">
        <div class="container">
          <div class="row justify-content-center mb-1">
            <div class="col-md-6 text-center mb-5">

              <h2>Our Clients Reviews</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="pb_slide_testimonial_sync_v1">
                <div class="pb_slider_content js-pb_slider_content2">
                  <?php foreach ($Testimonial as $key => $value): ?>


                  <div>
                    <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                      <div class="media-body">
                        <div class="quote">&ldquo;</div>
                        <blockquote class="mb-5">{!! $value->TextTrans('description') !!}</blockquote>
                        <p>
                          <i class="ion-ios-star text-warning"></i>
                          <i class="ion-ios-star text-warning"></i>
                          <i class="ion-ios-star text-warning"></i>
                          <i class="ion-ios-star-half text-warning"></i>
                          <i class="ion-ios-star-outline text-warning"></i>
                        </p>
                        <h3 class="heading">{{$value->TextTrans('name')}}</h3>
                        <span class="subheading">{{$value->TextTrans('position')}} </span>

                      </div>
                    </div>
                  </div>
                    <?php endforeach; ?>

                </div>

                <div class="row">
                  <div class="col-md-6 mx-auto">
                    <div class="pb_slider_nav js-pb_slider_nav2">

                      <?php foreach ($Testimonial as $key => $value): ?>
                      <div class="author">
                        <img class="img-fluid rounded-circle" src="{{asset($value->image)}}" alt="Generic placeholder image">
                      </div>
                      <?php endforeach; ?>

                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>

      </section>

      <section class=" overflow-hidden  pb_gradient_v1 cover-bg-opacity-8 footer2 "  id="Contact" style="background-image: url({{asset('main/img/b3.svg')}})">

     			 <div class="text-center  contact-us">
     							 <h2 class="hider-last"> Contact Us </h2>

     				</div>

     		  <div class="container ">


             <div class="row  ">

     					<div class="col-md-5">
     						 <form action="#" class="bg-white_tr rounded pb_form_v1">

     							<div class="form-group">
     								<input type="text" class="form-control py-3 reverse" placeholder="Full name">
     							</div>
     							<div class="form-group">
     								<input type="text" class="form-control py-3 reverse" placeholder="Email">
     							</div>
     							<div class="form-group">
     								<input type="number" class="form-control py-3 reverse" placeholder="Phone">
     							</div>
     							<div class="form-group">
     							<textarea name="name" rows="2" cols="80" class="form-control py-3 reverse" placeholder="Messsage"></textarea>
     							</div>
     							<div class="form-group">
     								<input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Send">
     							</div>
     						</form>
     					</div>

     					<div class="col-md-3">

     					</div>
     					<div class="col-md-4 withe-color">
      						<h2>contact info</h2>

     						<div class="">
     							<h3>Address</h3>
     							<p>{{$ContactInfo->TextTrans('name')}}</p>
     						</div>
     						<div class="">
     							<h3>Phone</h3>
                  <p>{{$ContactInfo->phone1}}</p>
                   <p>{{$ContactInfo->phone2}}</p>
                   <p>{{$ContactInfo->phone3}}</p>

     						</div>
     						<div class="">
     								<h3>Email</h3>
     								<p>{{$ContactInfo->email}}</p>
     						</div>
     					</div>


             </div>
           </div>
         </section>



@endsection
