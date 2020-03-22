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

        <div class="x_panel">
          <div class="x_title">
            <h2>About Info </h2>
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

          </div>
        </div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#en" aria-controls="home" role="tab" data-toggle="tab">ENINGLISH</a></li>
              <li role="presentation"><a href="#ar" aria-controls="profile" role="tab" data-toggle="tab">ARABIC</a></li>

            </ul>

            <div class="x_panel">
              <div class="x_title">
                <h2>Edit Element</small></h2>
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
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/About-Update/{{$about->id}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- ////////////////////////////////////////////////////////////////////// -->
                    <div role="tabpanel" class="tab-pane active" id="en">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Manegar Name  EN<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" name="manegarName_en" value="{{$about->manegarName_en}}" required class="form-control col-md-7 col-xs-12">

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Manegar Message EN  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="manegarText_en" rows="8" cols="80"   class="form-control col-md-7 col-xs-12">
                            {!! $about->manegarText_en !!}
                          </textarea>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Vision EN  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="vision_en" rows="8" cols="80"   class="form-control col-md-7 col-xs-12">
                            {!! $about->vision_en !!}
                          </textarea>

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mission EN  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="mission_en" rows="8" cols="80"   class="form-control col-md-7 col-xs-12">
                            {!! $about->mission_en !!}
                          </textarea>

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Message EN  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="message_en" rows="8" cols="80"   class="form-control col-md-7 col-xs-12">
                            {!! $about->message_en !!}
                          </textarea>

                        </div>
                      </div>




                    </div>
                    <!--  -->
                    <!-- ////////////////////////////////////////////////////////////////////// -->
                    <div role="tabpanel" class="tab-pane" id="ar">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Manegar Name  AR<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" name="manegarName_ar" value="{{$about->manegarName_ar}}" required class="form-control col-md-7 col-xs-12">

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Manegar Message AR  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="manegarText_ar" rows="8" cols="80"   class="form-control col-md-7 col-xs-12">
                                {!! $about->manegarText_ar !!}
                          </textarea>

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Vision AR  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="vision_ar" rows="8" cols="80"   class="form-control col-md-7 col-xs-12">
                              {!! $about->vision_ar !!}
                          </textarea>

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mission AR  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="mission_ar" rows="8" cols="80"   class="form-control col-md-7 col-xs-12">
                            {!! $about->mission_ar !!}
                          </textarea>

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Message AR  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="message_ar" rows="8" cols="80"   class="form-control col-md-7 col-xs-12">
                              {!! $about->message_ar !!}
                          </textarea>

                        </div>
                      </div>



                    </div>
                    <!-- ////////////////////////////////////////////////////////////////////// -->



                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Image  <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" name="image" value=""  >

                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a href="/About" class="btn btn-primary" type="button">Cancel</a>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </div>
                </form>
              </div>

            </div>
          <!--end x_panel  -->
        </div>
        <!--end col  -->
      </div>
      <!-- end row -->





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
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=rwogtg56h01ivhkn7ge2b3g99qvpjqylr186ajccbn5kdh1k"></script>
<script>tinymce.init({ selector:'textarea' });</script>

      @endsection
