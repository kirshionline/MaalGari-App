
@extends('layouts.app')

@section('content')
<section class="content-header">
   <h1>View User<small></small></h1>
   <ol class="breadcrumb">
      <li><a href="http://nikola.world/admin"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="http://nikola.world/admin/users"><i class="fa fa-user"></i> Users</a></li>
      <li class="active"><i class="fa fa-user"></i> View User</li>
   </ol>
</section>
<!-- Main content -->

<?php// print_r($viewuser);  ?>
<section class="content">

   <div class="col-md-6 col-md-offset-3">
      <div class="box box-widget widget-user-2 user_details_outer">
         <div class="widget-user-header bg-gray">
            <div class="widget-user-image">
               <img class="img-circle" src="/upload/{{$viewuser->Picture}}" alt="User Avatar">
            </div>
            <h3 class="widget-user-username"></h3>
         </div>
         <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
               <li><a href="javascript:void(0);">Full Name <span class="pull-right">{{$viewuser->firstname}}  {{$viewuser->lastname}}</span></a></li>
               <li><a href="javascript:void(0);">Email <span class="pull-right">{{$viewuser->email}}</span></a></li>
               <li><a href="javascript:void(0);">Phone <span class="pull-right">{{$viewuser->contactnumber}}</span></a></li>
               <li><a href="javascript:void(0);">Gender <span class="pull-right">{{$viewuser->gender}}</span></a></li>
               <li><a href="javascript:void(0);">Location<span class="pull-right">{{$viewuser->pickup_location}}</span></a></li>
               <li><a href="javascript:void(0);">password<span class="pull-right">{{$viewuser->password}}</span></a></li>
               <li>
                  <a href="javascript:void(0);">
                     Average Rating 
                     <span class="pull-right">
                        <ul class="text-white list-style-none mb0">
                           <li class="fa fa-star text-warning"></li>
                           <li class="fa fa-star text-warning"></li>
                           <li class="fa fa-star text-warning"></li>
                           <li class="fa fa-star text-warning"></li>
                           <li class="fa fa-star text-warning"></li>
                        </ul>
                     </span>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>

</section>

@endsection