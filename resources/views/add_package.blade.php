
@extends('layouts.app')

@section('content')
  <div class="content-wrapper" style="margin: 0px;">
            <section class="content-header">
               <h1>Rentals Management<small></small></h1>
               <ol class="breadcrumb">
                  <li><a href=""><i class="fa fa-dashboard"></i>Home</a></li>
                  <li><a href=""><i class="fa fa-user"></i>Rentals Management</a></li>
                  <li class="active">Add a Hourly Package</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <style>
                  @media (min-width: 768px)
                  {
                  .modal-dialog {
                  width: 400px;
                  margin: 30px auto;
                  }
                  }

               </style>
               <div class="row">
                  <div class="col-md-12">
                     <div class="box box-info">
                        <div class="box-header">
                           <div class="map_content">
                              <p class="lead para_mid">
                                 <b>What is this?</b>
                              </p>
                              <p class="lead para_mid">
                                 Upon popular request from customers, we have added Hour based rentals feature as well in our platform.
                              </p>
                              <p class="lead para_mid">
                                 Using this screen, you can Add Hourly packages. Your passengers can choose any package of their choice and Pre-book it directly from the mobile app.
                              </p>
                              <p class="lead para_mid">
                                 Any package you add here, will reflect in the passenger app <a href="#rentalmodal" data-toggle="modal">( check the screenshot present below the form )</a>
                              </p>
                              <p class="lead para_mid">
                                 While you can do a Taxi dispatch business using our platform. 
                              </p>
                           </div>
                        </div>
                        <div class="panel-heading border">
                        </div>
                        <form class="form-horizontal bordered-group" action="/addpackage" method="POST" enctype="multipart/form-data" >
                              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                           <div class="form-group">
                              <label class="col-sm-2 control-label">Number of hours</label>
                              <div class="col-sm-8">
                                 <input placeholder="Eg: 2" type="text" name="number_hours" value="" required class="form-control">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-2 control-label">Price</label>
                              <div class="col-sm-8">
                                 <input placeholder="Eg: 10" type="text" name="price" value="" required class="form-control">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-2 control-label">For how many miles?</label>
                              <div class="col-sm-8">
                                 <input placeholder="Eg: 50" type="text" name="distance" value="" required class="form-control">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-2 control-label">Vehicle Type</label>
                              <div class="col-sm-8">
                                 <select name="service_type" required class="form-control">
                                    <option value="select service type">Select Vehicle Type                  
                                    </option>
                                    <option value="Auto">Auto</option>
                                    <option value="Compact">Compact</option>
                                    <option value="sedan">sedan</option>
                                    <option value="Xuv">Xuv</option>
                                 </select>
                              </div>
                           </div>
                           <input type="hidden" name="id" value="" />
                           <div class="box-footer">
                              <button type="reset" class="btn btn-danger">Cancel</button>
                              <button type="submit" class="btn btn-success pull-right">Submit</button>
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="rentalmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title text-center" id="myModalLabel">Add a Vehicle type</h4>
                           </div>
                           <div class="modal-body">
                              <img src="../images/Rentals.png" alt="img" width="100%">
                           </div>
                           <!--       <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                              </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
@endsection