@extends('layouts.app')
@section('content')
<section class="content-header">
   <h1>Vehicle Types<small></small></h1>
   <ol class="breadcrumb">
      <li><a href="http://nikola.world/admin"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="http://nikola.world/admin/service_types"><i class="fa fa-user"></i> Vehicle Types</a></li>
      <li class="active">Add a Vehicle Type</li>
   </ol>
</section>
<section class="content">
   </style>
   <div class="row">
      <div class="col-md-12">
         <div class="box box-info">
            <div class="box-header">
               <div class="map_content">
                  <p class="lead ">
                     * Use this screen to Add a Vehicle type Ex: Sedan, Hatch back, Saloon
                  </p>
                  <p class="lead ">
                     * The vehicle type you add here, will appear on the Passenger mobile app <a data-toggle="modal" href="#myModal">( Refer the screen shot present below the form )</a>
                  </p>
               </div>
            </div>
            <!-- <div class="box-header">
               Create Service Type
               </div> -->
            <div class="panel-heading border">
            </div>
            <form class="form-horizontal bordered-group" action="/addvehicle" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Vehicle Type</label>
                  <div class="col-sm-8">
                     <input placeholder="Eg: Sedan" type="text" name="vehicle_type" required="" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">capacity</label>
                  <div class="col-sm-8">
                     <input placeholder="Eg: 4" type="text" name="capacity" required="" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Base Fare</label>
                  <div class="col-sm-8">
                     <input placeholder="Eg: 5" type="text" name="base_fare" required="" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Minimum fare</label>
                  <div class="col-sm-8">
                     <input placeholder="Eg: 10" type="text" name="minimum_fare" required="" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Booking Fee</label>
                  <div class="col-sm-8">
                     <input placeholder="Eg: 0.5" type="text" name="booking_fee" required="" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Tax Fee</label>
                  <div class="col-sm-8">
                     <input placeholder="Eg: 0.2" type="text" name="tax_fee" required="" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Price Per Minute</label>
                  <div class="col-sm-8">
                     <input placeholder="Eg: 10" type="text" name="price_per_minute" required="" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Price per Mile / Kms</label>
                  <div class="col-sm-8">
                     <input placeholder="Eg: 5" type="text" name="price_per_mile_kms" required="" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Mile -or- Kms?</label>
                  <div class="col-sm-8">
                     <select name="mile_or_kms" required="" class="form-control">
                        <option>Select</option>
                        <option value="miles">miles</option>
                        <option value="kms">kms</option>
                     </select>
                     <!-- <input placeholder="Eg: kms or miles" type="text" name="distance_unit" required class="form-control"> -->
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Picture</label>
                  <div class="col-sm-8">
                     <input name="picture" type="file">
                     <p class="help-block">Upload .png, .jpg or .jpeg image files only</p>
                  </div>
               </div>
               <div class="checkbox add_service_type_checkbox">
                  <label class="col-sm-2">
                  <input name="is_default" value="1" type="checkbox">Set as Default</label>
               </div>
               <input type="hidden" name="id">
               <div class="box-footer">
                  <a href="http://nikola.world/admin/service_types" class="btn btn-danger">Cancel</a>
                  <button type="submit" class="btn btn-success pull-right">Submit</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               <h4 class="modal-title text-center" id="myModalLabel">Add a Vehicle type</h4>
            </div>
            <div class="modal-body">
               <img src="../images/Vehicle-Type.png" alt="img" width="100%">
            </div>
            <!--       <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
               </div> -->
         </div>
      </div>
   </div>
</section>
@endsection