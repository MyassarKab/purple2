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
                      <h3> Portfolio Gallery    </h3>
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
                    <div class="col-md-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Add Portfolio Media Gallery  </h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>


                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <div class="row">

                            <p> Add Images</p>

                            @if ($errors->any())
                            <div class="alert alert-danger">
                              <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                              </ul>
                            </div>
                            @endif
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/Portfolio-Images-Update/{{$portfolioImage->id}}" method="post" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                <div class="row">


                              <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Portfolio<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="orm-control col-md-7 col-xs-12" name="portfolio_id" required="required">
                                    @foreach($Portfolio as $item )
                                    <option value="{{$item->id}}"     @if($portfolioImage->portfolio_id == $item->id) selected @endif>{{$item->name_en}}</option>
                                    @endforeach
                                  </select>
                                 </div>
                              </div>
                             </div>
                             <div class="col-md-12 col-sm-12 col-xs-12">
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title EN<span class="required">*</span>
                               </label>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="text" name="title_en" value="{{$portfolioImage->title_en}}" class="form-control  col-md-7 col-xs-12" required >
                                </div>
                             </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title AR<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="title_ar" value="{{$portfolioImage->title_ar}}" class="form-control  col-md-7 col-xs-12"  >
                               </div>
                            </div>
                           </div>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Imaegs<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="file" id="last-name" name="image"   class="  col-md-7 col-xs-12" value=" " >
                                </div>
                              </div>
                              </div>

                              </div>
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                  <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                              </div>

                            </form>




                          </div>
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

      @endsection
