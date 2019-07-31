@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Data Tables
      <small>advanced tables</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
   </ol>
</section>
<!-- Main content -->
@if($msg=Session::get('message'))
<div class="alert alert-danger alert-dismissible fade in Danger" style="width: 50%; margin:4px auto;">
  {{$msg}}
</div>
@endif
<section class="content">
   <div class="row">
      <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
               <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr role="row">
                        <th>ID</th>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>gender</th>
                        <th>email</th>
                        <th>contactnumber</th>
                        <th>pickup location</th>
                        <th>Picture</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($viewpassenger as $value)
                     <tr>
                        <td >{{$value->id}}</td>
                        <td>{{$value->firstname}}</td>
                        <td>{{$value->lastname}}</td>
                        <td>{{$value->gender}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->contactnumber}}</td>
                        <td>{{$value->pickup_location}}</td>
                        <td style="width: 60px;"><img src="upload/{{$value->Picture}}"></td>
                        <td class="sorting_1">
                           <ul class="admin-action btn btn-default">
                              <li class="dropdown">
                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                 Action <span class="caret"></span>
                                 </a>
                                 <ul class="dropdown-menu">
                                    <li>
                                       <a href="">Reset Password</a>
                                    </li>
                                    <li>
                                      <a href="{{url('userview/'.$value->id)}}">View User</a>
                                    </li>
                                  
                                    <li role="presentation"><a  tabindex="-1" href="">View History</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation">
                                       <a  tabindex="-1" onclick="return confirm('Are you sure?');" href="{{url('user_delete/'.$value->id)}}">Delete User
                                       </a>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
            <!-- /.box-body -->
         </div>
         <!-- /.box -->
      </div>
      <!-- /.col -->
   </div>
   <!-- /.row -->
</section>
<script type="text/javascript"></script>
<style type="text/css">ul{list-style: none;}#example1 tr td img{width:100%;}</style>
<!-- /.content -->
@endsection
@section('scripts')
<script>
   $(function () {
    
     $('#example1').DataTable({
       'paging'      : true,
       'lengthChange': true,
       'searching'   : true,
       'ordering'    : true,
       'info'        : true,
       'autoWidth'   : false
     });
   });
   setTimeout(function(){ 

    $('.Danger').fadeOut();
 }, 3000);

</script>
@endsection