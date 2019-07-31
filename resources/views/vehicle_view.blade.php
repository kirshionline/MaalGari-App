
@extends('layouts.app')

@section('content')

  <div class="content-wrapper" style="margin: 0px;">
            <section class="content-header">
               <h1>Rentals Management<small></small></h1>
               <ol class="breadcrumb">
                  <li><a href="http://nikola.world/admin"><i class="fa fa-dashboard"></i>Home</a></li>
                  <li class="active"><i class="fa fa-user"></i> Rentals Management</li>
               </ol>
            </section>
          
         
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="box box-info">
                        <div class="box-body">
                           <div class="box-header">
                              <div class="map_content">
                                 <p class="lead para_mid">
                                    Here you can manage all the Hourly packages created earlier.
                                 </p>
                                 <p class="lead para_mid">
                                    Note: Deleting a package will remove it from the Passenger app display as well.
                                 </p>
                              </div>
                           </div>
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>Id</th>
                                    <th>Vehicle Type</th>
                                    <th>capacity</th>
                                    <th>Base Fare</th>
                                    <th>Minimum Fare</th>
                                    <th>Booking Fee</th>
                                    <th>Price Per Minute</th>
                                    <th>Price Per Mile or Kms</th>
                                    <th>Mile or Kms</th>
                                    <th>picture</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                              @foreach($viewvehicle as $value)
                                 <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->vehicle_type}}</td>
                                    <td>{{$value->base_fare}}</td>
                                    <td>{{$value->capacity}}</td>
                                    <td>{{$value->minimum_fare}}</td>
                                    <td>{{$value->booking_fee}}</td>
                                    <td>{{$value->price_per_minute}}</td>
                                    <td>{{$value->price_per_mile_kms}}</td>
                                    <td>{{$value->mile_or_kms}}</td>
                                    <td><img class="tbimage" src="upload/{{$value->picture}}"></td>
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
                                                <a onclick="return confirm('Are you sure want to Delete?')" href="/vehicle_delete/{{$value->id}}">Delete</a>
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
        <style type="text/css">.tbimage {width: 70px; height:70px; display: block; margin: 0px auto;</style>
       
@endsection