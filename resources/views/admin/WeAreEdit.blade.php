@extends('./layouts.admin')
@section('css')

<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection
      @section('content')
      <style media="screen">
        .left-margin{
          margin-left: 30px;
        }
      </style>
      <!-- page content -->
              <div class="right_col" role="main">
                <div class="">
                  <div class="page-title">
                    <div class="title_left">
                      <h3> We Are   Info    </h3>
                    </div>

                    <div class="title_right">
                      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="clearfix"></div>
                  <div class="row">
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
                         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/WeAre-Update/{{$weAre->id}}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}

                       <div class="tab-content">

                         <div role="tabpanel" class="tab-pane active" id="en">


                                       <div class="form-group">
                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name EN<span class="required">*</span>
                                         </label>
                                         <div class="col-md-6 col-sm-6 col-xs-12">
                                           <input type="text" id="first-name" required="required" name="title_en" value="{{$weAre->title_en}}" class="form-control col-md-7 col-xs-12">
                                         </div>
                                       </div>

                                       <div class="form-group">
                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description EN<span class="required">*</span>
                                         </label>
                                         <div class="col-md-6 col-sm-6 col-xs-12">
                                           <textarea name="description_en" rows="8" cols="80">
                                             {!!$weAre->description_en!!}
                                           </textarea>
                                         </div>
                                       </div>





                         </div>

                         <div role="tabpanel" class="tab-pane" id="ar">

                                           <div class="form-group">
                                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Name AR<span class="required">*</span>
                                             </label>
                                             <div class="col-md-6 col-sm-6 col-xs-12">
                                               <input type="text" id="last-name" name="title_ar" value="{{$weAre->title_ar}}" required="required" class="form-control col-md-7 col-xs-12">
                                             </div>
                                           </div>

                                           <div class="form-group">
                                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description AR<span class="required">*</span>
                                             </label>
                                             <div class="col-md-6 col-sm-6 col-xs-12">
                                               <textarea name="description_ar" rows="8" cols="80">
                                                 {!!$weAre->description_ar!!}
                                               </textarea>
                                             </div>
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
                   </div>
                  </div>
                  <!-- form row -->


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
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=rwogtg56h01ivhkn7ge2b3g99qvpjqylr186ajccbn5kdh1k"></script>
<script>tinymce.init({ selector:'textarea' });</script>
      @endsection
