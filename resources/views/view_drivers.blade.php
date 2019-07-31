

@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Dashboard
      <small>Control panel</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
   </ol>
</section>

<?php //print_r($driver_detail);  ?>
<!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-xs-12">
         <div class="box box-info">
            <div class="box-body">
               <div class="section_h1">
                  <h1>Personal Info</h1>
               </div>
               
               <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
              
                  <div class="row">
                     <div class="col-sm-12">
                           <table id="driver_detail" class="table table-bordered table-striped">
                           <thead>
                              <tr role="row">
                                 <th>Full Name</th>
                                 <th>Email Id</th>
                                 <th>Date Of Birth</th>
                                 <th>Gender</th>
                                 <th>Mobilenumber</th>
                                 <th>Address</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($driver_detail as $value)
                               <tr role="row" class="odd">
                               <td>{{$value->firstname}} {{$value->lastname}}</td>
                               <td>{{$value->email_id}} </td>
                               <td>{{$value->date_of_birth}} </td>
                               <td>{{$value->gender}} </td>
                               <td>{{$value->mobilenumber}} </td>
                               <td>{{$value->address}}</td>
                               <td>
                                    <ul class="admin-action btn btn-default">
                                       <li class="dropdown">
                                          <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                          Action <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu">
                         
                                        <li><a href="viewdriver_info/_token/{{$value->driver_id}}">View Driver</a></li>  

                                         
                                             <li>
                                                <a onclick="return confirm('Are you sure want to Delete?')" href="">Delete</a>
                                             </li>
                                             <li>
                                                <a href="">View History</a>
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
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<style type="text/css">#viewdriver_info{border: none;background: #fff;margin: 0px 10px;}</style>
<!-- /.content -->
@endsection

