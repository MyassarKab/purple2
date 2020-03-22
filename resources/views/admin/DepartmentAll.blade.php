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
       <h2>All Department </h2>
       <h2> <span class="left-margin"> <a href="/Department-New" class="btn btn-primary"> Add New Department </a> </span> </h2>
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
             <th>Title EN</th>
             <th>Title AR</th>
             <th>Description EN</th>
             <th>Description AR</th>
             <th>Options</th>
           </tr>
         </thead>


         <tbody>

             @foreach($Department as $item)
              <tr>
             <td> {{$item->title_en}}</td>
             <td> {{$item->title_ar}}</td>
             <td> {!! $item->description_en !!}</td>
             <td> {!! $item->description_ar !!}</td>
             <td>
               <a href="/Department-Delete/{{$item->id}}" class="btn btn-danger" title="Delete Item" ><i class="fa fa-trash" aria-hidden="true"></i></a>
               <a href="/Department-Edit/{{$item->id}}"   class="btn btn-success"  title="Edit Item"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i></a >
               <button class="btn btn-success"  title="Show Details"  type="button" data-toggle="modal" data-target="#{{$item->id}}" > Show Details</button >

             </td>
             <!-- Modal -->
            <div class="modal fade" id="{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">More Details</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
                  <div class="modal-body" >
                    <!--  -->
                        <div class="row">
                        <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                        </div> -->
                            <img src="{{asset($item->image)}}" alt="" width="300" height="300">

                            <div class="">
                              Details AR {!! $item->details_ar !!}
                            </div>
                            <hr>
                            <div class="">
                              Details EN {!! $item->details_en !!}
                            </div>

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
