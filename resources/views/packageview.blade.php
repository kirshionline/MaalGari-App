@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="margin: 0px;">
   <section class="content-header">
      <h1>Vehicle type<small></small></h1>
      <ol class="breadcrumb">
         <li><a href="http://nikola.world/admin"><i class="fa fa-dashboard"></i>Home</a></li>
         <li class="active"><i class="fa fa-user"></i> Vehicle Types</li>
      </ol>
   </section>
   <!-- Main content -->

   <?php  //print_r($viewpackage); ?>
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box box-info">
               <div class="box-body">
                  <div class="box-header">
                     <div class="map_content">
                        <p class="lead ">
                           Use this screen to manage all the Vehicle Type's entered in the system
                        </p>
                        <p class="lead ">
                           Note: Deleting a Vehicle type will also remove it from the Passenger app.
                        </p>
                     </div>
                  </div>
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th class="min">Vehicle Types</th>
                           <th class="min">Number of hours</th>
                           <th class="min">Price</th>
                           <th class="min">distance</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($viewpackage as $value)
                        <tr>
                           <td>{{$value->id}}</td>
                           <td>{{$value->service_type}}</td>
                           <td>{{$value->number_hours}}</td>
                           <td>{{$value->price}}</td>
                           <td>{{$value->distance}}</td>
                           <td class="btn-left">
                              <div class="input-group-btn">
                                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                                 <span class="caret"></span>
                                 </button>
                                 <ul class="dropdown-menu">
                                    <li>
                                       <a href="">Edit</a>
                                    </li>
                                    <li>
                                       <a onclick="return confirm('Are you sure want to Delete?')" href="/package_delete/{{$value->id}}">Delete</a>
                                    </li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                       @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection

