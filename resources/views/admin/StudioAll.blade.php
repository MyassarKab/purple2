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
   <div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
   <div class="x_panel">
     <div class="x_title">
       <h2>All Studio  </h2>
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
             <th>Slug</th>
             <th>Image</th>
             <th>Options</th>
           </tr>
         </thead>


         <tbody>

             @foreach($Studio as $item)
              <tr>
             <td> {{$item->name_en}}</td>
             <td> {{$item->name_ar}}</td>
             <td> {{$item->slug}}</td>
             <td> <img src="{{asset($item->image)}}" alt="" width="200" height="200"> </td>
             <td>
               <a href="/Studio-Delete/{{$item->id}}" class="btn btn-danger" title="Delete Item" ><i class="fa fa-trash" aria-hidden="true"></i></a>

               <button class="btn btn-success"  title="Show Details"  type="button" data-toggle="modal" data-target="#{{$item->id}}" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button >

             </td>
             <!-- Modal -->
            <div class="modal fade" id="{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
                  <div class="modal-body" >
                    <!--  -->
                        <div class="row">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/Studio-Update/{{$item->id}}" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name EN<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" required="required" value="{{$item->name_en}}" name="name_en" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>

                              <!-- ////////////////// -->
                            </div>
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Name AR<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="last-name" name="name_ar" value="{{$item->name_ar}}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <!-- ......................... -->
                            </div>
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug-name">Slug<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="slug-name" name="slug" value="{{$item->slug}}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image-name">Image<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="file" id="image-name" name="image"   class="  col-md-7 col-xs-12">
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
              </tr>
             @endforeach


         </tbody>
       </table>
     </div>
   </div>
 </div>
   </div>
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

       @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
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
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/Studio-Add" method="post" enctype="multipart/form-data">
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug-name">Slug<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="slug-name" name="slug" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image-name">Image<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="image-name" name="image" required="required" class="  col-md-7 col-xs-12">
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
