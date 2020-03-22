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
                      <h3> Department Gallery    </h3>
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
                          <h2>Add Department Media Gallery  </h2>
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
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/Department-Images-Add" method="post" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                <div class="row">


                              <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Department<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="orm-control col-md-7 col-xs-12" name="department_id" required="required">
                                    @foreach($Department as $item )
                                    <option value="{{$item->id}}">{{$item->title_en}}</option>
                                    @endforeach
                                  </select>
                                 </div>
                              </div>
                             </div>


                              <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Imaegs<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="file" id="last-name" name="image" required="required" class="  col-md-7 col-xs-12" value=" " >
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

                  <div class="row">
                    <div class="col-md-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Department Media Gallery  </h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>


                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <div class="row">

                            <p> Department media gallery</p>

                            {{ $DepartmentImage->links() }}

                            @foreach($DepartmentImage as $item)
                            <div class="col-md-55">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img style="width: 100%; display: block;" src="{{asset($item->image)}}" alt="image" />
                                  <div class="mask">
                                    <p>{{$item->Department->title_en}}   </p>
                                    <div class="tools tools-bottom">

                                      <a href="/Department-Images-Delete/{{$item->id}}"><i class="fa fa-times"></i></a>
                                      <button type="button" style="background: transparent;border-color: transparent;"  data-toggle="modal" data-target="#{{$item->id}}" > <i class="fa fa-pencil"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p> {{$item->Department->title_en}} </p>
                                </div>
                              </div>
                            </div>
                            <!-- Modal -->
                           <div class="modal fade" id="{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>

                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <div class="modal-body" >
                                   <!--  -->
                                       <div class="row">
                                       <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                                       </div> -->
                                           <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/Department-Images-Update/{{$item->id}}" method="post">
                                                 {{ csrf_field() }}
                                               <div class="row">


                                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                                 <div class="form-group">
                                                   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Department<span class="required">*</span>
                                                   </label>
                                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                                     <select class="orm-control col-md-7 col-xs-12" name="department_id" required="required">
                                                       @foreach($Department as $item )
                                                       <option value="{{$item->id}}" >{{$item->title_en}}</option>
                                                       @endforeach
                                                     </select>
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
                                     <!--  -->
                                 </div>
                                 <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                 </div>
                               </div>
                             </div>
                           </div>
                              @endforeach




                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
