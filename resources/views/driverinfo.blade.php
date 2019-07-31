@extends('layouts.app')
@section('content')
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
<section class="content">
   <div class="viw_section">
      @foreach($driver_bank_detail as $values)
      <div class="box box-primary">
         <div class="box-header with-border">
            <h3 class="box-title">Bank Detail</h3>
         </div>
         <div class="col-md-6">
            <div class="box-body">
               <div class="form-group">
                  <label >Bank Account Number</label>
               </div>
               <div class="form-group">
                  <label >Card Number</label>
               </div>
               <div class="form-group">
                  <label >Status</label>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="box-body">
               <div class="form-group">
                  <p>{{$values->bank_account_no}}</p>
               </div>
               <div class="form-group">
                  <p>{{$values->card_no}}</p>
               </div>
                <div class="form-group">
                  @if($values->status=="0")
                   <p><span class="label label-default">no actions yet</span></p>
                  @elseif($values->status=="1")
                   <p><span class="label label-success">approved</span></p>
                  @elseif($values->status=="2")
                   <p><span class="label label-danger">rejected</span></p>
                  @else
                     <p><span class="label label-warning">verification in progress</span></p>
                  @endif
               </div>
            </div>
         </div>
         <div class="box-footer">
            <div class="sw_section">
               <form method="post" action="/getstatus_count" id="driver_bank_detail_form">
                  {{ csrf_field() }}
                  <input type="hidden" name="driver_id" value="{{$values->driver_id}}">
                  <input type="hidden" name="dbname" value="bankdetail_status">
                  <div class="form-group">
                     <select class="form-control" id="bank_detail_selected" name="bankdetail_status_selected">
                        <option value="0">no actions yet</option>
                        <option value="1">approved</option>
                        <option value="2">rejected</option>
                        <option value="3">verification in progress</option>
                     </select>
                  </div>
               </form>
            </div>
         </div>
         @endforeach
      </div>
   </div>
   <div class="viw_section">
      @foreach($driver_vehicle as $value)
      <div class="box box-primary">
         <div class="box-header with-border">
            <h3 class="box-title">Vechicles Detail</h3>
         </div>
         <div class="col-md-6">
            <div class="box-body">
               <div class="form-group">
                  <label >Brand</label>
               </div>
               <div class="form-group">
                  <label >Model</label>
               </div>
               <div class="form-group">
                  <label >Year</label>
               </div>
               <div class="form-group">
                  <label >Licence Plate Number</label>
               </div>
               <div class="form-group">
                  <label >Vehicle Type</label>
               </div>
               <div class="form-group">
                  <label >Vehicle color</label>
               </div>
               <div class="form-group">
                  <label >Vehicle Dimension</label>
               </div>
               <div class="form-group">
                  <label >Registration Certificate</label>
               </div>
               <div class="form-group">
                  <label>Status</label>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="box-body">
               <div class="form-group">
                  <p>{{$value->brand}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->model}} </p>
               </div>
               <div class="form-group">
                  <p>{{$value->year}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->licence_plate_number}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->vehicle_type}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->vehicle_color}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->vehicle_dimension}}</p>
               </div>
               <div class="form-group">
                  <p><a href="{{url('/')}}/upload/{{$value->registration_certificate}}">{{$value->registration_certificate}}</a><span class="d_icon"><a href="/vechicle_download/{{$value->driver_id}}"><i class="fa fa-download" aria-hidden="true"></i></a></span></p>
               </div>
                <div class="form-group">
                  @if($value->status=="0")
                   <p><span class="label label-default">no actions yet</span></p>
                  @elseif($value->status=="1")
                   <p><span class="label label-success">approved</span></p>
                  @elseif($value->status=="2")
                   <p><span class="label label-danger">rejected</span></p>
                  @else
                     <p><span class="label label-warning">verification in progress</span></p>
                  @endif
               </div>
            </div>
         </div>
         <div class="box-footer">
            <div class="sw_section">
               <div class="btn-group" id="status" data-toggle="buttons">
                  <form method="post" action="/getstatus_count" id="driver_vehicle_form">
                     {{ csrf_field() }}
                     <input type="hidden" name="driver_id" value="{{$value->driver_id}}">
                     <input type="hidden" name="dbname" value="drivervehicle_status">
                     <div class="form-group">
                        <select class="form-control" id="vehicle_status_selected" name="drivervehicle_status_selected">
                           <option value="0">no actions yet</option>
                           <option value="1">approved</option>
                           <option value="2">rejected</option>
                           <option value="3">verification in progress</option>
                        </select>
                     </div>
                  </form>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <div class="viw_section">
      <div class="box box-primary">
         <div class="box-header with-border">
            <h3 class="box-title">Driver licence</h3>
         </div>
         @foreach($driver_licence as $value)
         <div class="col-md-6">
            <div class="box-body">
               <div class="form-group">
                  <label >Licence Number</label>
               </div>
               <div class="form-group">
                  <label >Licence Name</label>
               </div>
               <div class="form-group">
                  <label >Licence Issued Date</label>
               </div>
               <div class="form-group">
                  <label >Licence Plate Number</label>
               </div>
               <div class="form-group">
                  <label >Licence Expire Date</label>
               </div>
               <div class="form-group">
                  <label >Licence Image</label>
               </div>
                <div class="form-group">
                  <label>Status</label>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="box-body">
               <div class="form-group">
                  <p>{{$value->licence_number}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->licence_name}} </p>
               </div>
               <div class="form-group">
                  <p>{{$value->licence_issued_date}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->licence_plate_number}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->licence_expire_date}}</p>
               </div>
               <div class="form-group">
                  <p><a href="{{url('/')}}/upload/{{$value->licence_image}}">{{$value->licence_image}}</a>
                     <span class="d_icon"><a href="/licence_image_download/{{$value->driver_id}}"><i class="fa fa-download" aria-hidden="true"></i></a></span>
                  </p>
               </div>
                  <div class="form-group">
                  @if($value->status=="0")
                   <p><span class="label label-default">no actions yet</span></p>
                  @elseif($value->status=="1")
                   <p><span class="label label-success">approved</span></p>
                  @elseif($value->status=="2")
                   <p><span class="label label-danger">rejected</span></p>
                  @else
                     <p><span class="label label-warning">verification in progress</span></p>
                  @endif
               </div>
            </div>
         </div>
         <div class="box-footer">
            <div class="sw_section">
               <div class="btn-group" id="status" data-toggle="buttons">
                  <form method="POST" action="/getstatus_count" id="driver_licence_form">
                     {{ csrf_field() }}
                      <input type="hidden" name="dbname" value="driver_licence">
                     <input type="hidden" name="driver_id" value="{{$value->driver_id}}">
                     <div class="form-group">
                        <select class="form-control" name="driver_licence_selected" id="driver_licence_selected">
                           <option value="0">no actions yet</option>
                           <option value="1">approved</option>
                           <option value="2">rejected</option>
                           <option value="3">verification in progress</option>
                        </select>
                     </div>
                  </form>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <div class="viw_section">
      <div class="box box-primary">
         <div class="box-header with-border">
            <h3 class="box-title">Passport or Residence</h3>
         </div>
         @foreach($passport_and_residence as $value)
         <div class="col-md-6">
            <div class="box-body">
               <div class="form-group">
                  <label >Passport Number</label>
               </div>
               <div class="form-group">
                  <label >Passport Name</label>
               </div>
               <div class="form-group">
                  <label >Issued Date</label>
               </div>
               <div class="form-group">
                  <label >Expire Date</label>
               </div>
               <div class="form-group">
                  <label >Address</label>
               </div>
               <div class="form-group">
                  <label >Status</label>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="box-body">
               <div class="form-group">
                  <p>{{$value->passport_number}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->passport_name}} </p>
               </div>
               <div class="form-group">
                  <p>{{$value->passport_issued_date}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->passport_expire_date}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->passport_address}}</p>
               </div>
                <div class="form-group">
                  @if($value->status=="0")
                   <p><span class="label label-default">no actions yet</span></p>
                  @elseif($value->status=="1")
                   <p><span class="label label-success">approved</span></p>
                  @elseif($value->status=="2")
                   <p><span class="label label-danger">rejected</span></p>
                  @else
                     <p><span class="label label-warning">verification in progress</span></p>
                  @endif
               </div>
            </div>
         </div>
         <div class="box-footer">
            <div class="sw_section">
               <div class="btn-group" id="status" data-toggle="buttons">
                  <form method="POST" action="/getstatus_count" id="residence_status_form">
                     {{csrf_field()}}
                     <input type="hidden" name="dbname" value="residence_status">
                     <input type="hidden" name="driver_id" value="{{$value->driver_id}}">
                     <div class="form-group">
                        <select class="form-control" name="residence_status_selected" id="residence_status_selected">
                           <option value="0">no actions yet</option>
                           <option value="1">approved</option>
                           <option value="2">rejected</option>
                           <option value="3">verification in progress</option>
                        </select>
                     </div>
                  </form>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <div class="viw_section">
      <div class="box box-primary">
         <div class="box-header with-border">
            <h3 class="box-title">Criminal Record Details</h3>
         </div>
         @foreach($criminal_record_details as $value)
         <div class="col-md-6">
            <div class="box-body">
               <div class="form-group">
                  <label >Issued Date</label>
               </div>
               <div class="form-group">
                  <label >Cirminal Certificate</label>
               </div>
                <div class="form-group">
                  <label>Status</label>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="box-body">
               <div class="form-group">
                  <p>{{$value->cirminal_issued_date}}</p>
               </div>
               <div class="form-group">
                  <p><a href="{{url('/')}}/upload/{{$value->cirminal_certificate}}">{{$value->cirminal_certificate}}</a> <span class="d_icon"><a href="/cirminal_certificate_image_download/{{$value->driver_id}}"><i class="fa fa-download" aria-hidden="true"></i></a></span></p>
               </div>
                <div class="form-group">
                  @if($value->status=="0")
                   <p><span class="label label-default">no actions yet</span></p>
                  @elseif($value->status=="1")
                   <p><span class="label label-success">approved</span></p>
                  @elseif($value->status=="2")
                   <p><span class="label label-danger">rejected</span></p>
                  @else
                     <p><span class="label label-warning">verification in progress</span></p>
                  @endif
               </div>
            </div>
         </div>
         <div class="box-footer">
            <div class="sw_section">
               <div class="btn-group" id="status" data-toggle="buttons">
                  <form method="POST" action="/getstatus_count" id="Criminal_status_form">
                     {{csrf_field()}}
                     <input type="hidden" name="driver_id" value="{{$value->driver_id}}">
                     <input type="hidden" name="dbname" value="criminal_status">
                     <div class="form-group">
                        <select class="form-control" name="criminal_status_selected" id="criminal_status_selected">
                           <option value="0">no actions yet</option>
                           <option value="1">approved</option>
                           <option value="2">rejected</option>
                           <option value="3">verification in progress</option>
                        </select>
                     </div>
                  </form>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <div class="viw_section">
      <div class="box box-primary">
         <div class="box-header with-border">
            <h3 class="box-title">Company Info</h3>
         </div>
         @foreach($company_info as $value)
         <div class="col-md-6">
            <div class="box-body">
               <div class="form-group">
                  <label >Company Name</label>
               </div>
               <div class="form-group">
                  <label >Id Card Image</label>
               </div>
               <div class="form-group">
                  <label >Issued Date</label>
               </div>
               <div class="form-group">
                  <label >Joining Date</label>
               </div>
               <div class="form-group">
                  <label >Designation</label>
               </div>
               <div class="form-group">
                  <label >Status</label>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="box-body">
               <div class="form-group">
                  <p>{{$value->company_name}}</p>
               </div>
               <div class="form-group">
                  <p><a href="{{url('/')}}/upload/{{$value->id_card_image}}">{{$value->id_card_image}}</a>
                     <span class="d_icon"><a href="/cardimage_download/{{$value->driver_id}}"><i class="fa fa-download" aria-hidden="true"></i></a></span> 
                  </p>
               </div>
               <div class="form-group">
                  <p>{{$value->issued_date}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->company_issued_date}}</p>
               </div>
               <div class="form-group">
                  <p>{{$value->company_joining_date}}</p>
               </div>
                 <div class="form-group">
                  @if($value->status=="0")
                   <p><span class="label label-default">no actions yet</span></p>
                  @elseif($value->status=="1")
                   <p><span class="label label-success">approved</span></p>
                  @elseif($value->status=="2")
                   <p><span class="label label-danger">rejected</span></p>
                  @else
                     <p><span class="label label-warning">verification in progress</span></p>
                  @endif
               </div>
                <div class="form-group">
                  <p>{{$value->designation}}</p>
               </div>
            </div>
         </div>
         <div class="box-footer">
            <div class="sw_section">
               <div class="btn-group" id="status" data-toggle="buttons">
                  <form method="POST" action="/getstatus_count" id="company_status_form">
                     {{csrf_field()}}
                     <input type="hidden" name="dbname" value="company_status">
                     <input type="hidden" name="driver_id" value="{{$value->driver_id}}">
                     <div class="form-group">
                        <select class="form-control" id="company_status_selected" name="company_status_selected">
                           <option value="0">no actions yet</option>
                           <option value="1">approved</option>
                           <option value="2">rejected</option>
                           <option value="3">verification in progress</option>
                        </select>
                     </div>
                  </form>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</section>
<style type="text/css">.box-title {font-weight: bold;}label{margin: 0px;}p{margin: 0px;}
   .d_icon{} .d_icon a{text-decoration: none;color: #000;font-size: 15px;position: relative;top: 2px;left: 5px;}
</style>
@endsection