@extends('./layouts.admin')
@section('css')

<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/scroller.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

@endsection
      @section('content')
      <style media="screen">
        .left-margin{
          margin-left: 30px;
        }
      </style>
      <!-- page content -->
      <div class="right_col" role="main">
   <div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
   <div class="x_panel">
     <div class="x_title">
       <h2>Contact Info</h2>
       <!-- <h2>All Portfolio Development  <span class="left-margin"> <a href="Portfolio-New" class="btn btn-primary"> Add New Department </a> </span> </h2> -->
       <ul class="nav navbar-right panel_toolbox">
         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
         </li>


       </ul>
       <div class="clearfix"></div>
     </div>
     <div class="x_content">
       <p class="text-muted font-13 m-b-30">

       </p>
       <table id="datatable" class="table table-striped table-bordered">
         <thead>
           <tr>

             <th>Name EN</th>
             <th>Name AR</th>
             <th>Email</th>
             <th>Map</th>
             <th>Phones</th>
             <th>Options</th>
           </tr>
         </thead>


         <tbody>


              <tr>

                         <td> {{$ContactInfo->name_en}}</td>
                         <td> {{$ContactInfo->name_ar}}</td>
                         <td> {{$ContactInfo->email}}</td>
                         <td> {{$ContactInfo->map}}</td>
                         <td>
                           <div class="">
                             {{$ContactInfo->phone1}}
                           </div>
                           <div class="">
                             {{$ContactInfo->phone2}}
                           </div>
                           <div class="">
                             {{$ContactInfo->phone3}}
                           </div>

                         </td>



             <td>
                <a href="/ContactInfo-Edit/{{$ContactInfo->id}}"   type="button"  class="btn btn-success"  title="Edit Item"  ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i></a >
             </td>
             <!-- Portfolio-About-Edit -->

              </tr>



         </tbody>
       </table>
     </div>
   </div>
 </div>
   </div>

<!-- add  form  -->
   <div class="row">
     @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
      @endif
      @if(session()->has('failed'))
     <div class="alert alert-danger">
         {{ session()->get('failed') }}
     </div>
       @endif

<!--
          <div class="col-md-12 col-sm-12 col-xs-12">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#en" aria-controls="home" role="tab" data-toggle="tab">ENINGLISH</a></li>
              <li role="presentation"><a href="#ar" aria-controls="profile" role="tab" data-toggle="tab">ARABIC</a></li>

            </ul>

            <div class="x_panel">
              <div class="x_title">
                <h2>Add new element</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>

                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/ContactInfo-Add" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}

              <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="en">


                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name EN<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" required="required" name="name_en" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>







                </div>

                <div role="tabpanel" class="tab-pane" id="ar">

                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Name AR<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" id="last-name" name="name_ar" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                  </div>


               </div>

               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email<span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="email" id="last-name" name="email" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone 1<span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="last-name" name="phone1" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone 2<span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="last-name" name="phone2" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone 3<span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="last-name" name="phone3" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Map<span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="last-name" name="map" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>
               <div class="ln_solid"></div>
               <div class="form-group">
                 <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                   <button class="btn btn-primary" type="reset">Reset</button>
                   <button type="submit" class="btn btn-success">Submit</button>
                 </div>
               </div>

              </div>
                   </form>
          </div>
            </div>
          </div> -->
        </div>

      </div>
      <!-- /page content -->
      @endsection
      @section('js')

      <!-- Datatables -->
<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('js/buttons.bootstrap.min.js')}}"></script>
<script src="{{ asset('js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('js/buttons.print.min.js')}}"></script>
<script src="{{ asset('js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{ asset('js/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset('js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('js/responsive.bootstrap.js')}}"></script>
<script src="{{ asset('js/dataTables.scroller.min.js')}}"></script>
<script src="{{ asset('js/jszip.min.js')}}"></script>
<script src="{{ asset('js/pdfmake.min.js')}}"></script>
<script src="{{ asset('js/vfs_fonts.js')}}"></script>
<!-- <script src="{{ asset('js/tinymce.js')}}?apiKey=rwogtg56h01ivhkn7ge2b3g99qvpjqylr186ajccbn5kdh1k"></script> -->
<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=rwogtg56h01ivhkn7ge2b3g99qvpjqylr186ajccbn5kdh1k"></script>
<script>tinymce.init({ selector:'textarea' });</script> -->

      @endsection
