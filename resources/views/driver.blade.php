@extends('layouts.app') @section('content')
<section class="content-header">
    <h1>Add a Driver<small></small></h1>
    <ol class="breadcrumb">
        <li><a href="http://nikola.world/admin"><i class="fa fa-dashboard"></i>Home</a>
        </li>
        <li><a href="http://nikola.world/admin/providers"><i class="fa fa-users"></i> Drivers</a>
        </li>
        <li class="active">Add Driver</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#section_start" data-toggle="tab" aria-expanded="false">Driver Detail</a>
                </li>
                <li class=""><a href="#section_one" data-toggle="tab" aria-expanded="false">Bank Detail</a>
                </li>
                <li class=""><a href="#section_two" data-toggle="tab" aria-expanded="false">Vechicles Detail</a>
                </li>
                <li class=""><a href="#section_three" data-toggle="tab" aria-expanded="false">Driver licence</a>
                </li>
                <li class=""><a href="#section_four" data-toggle="tab" aria-expanded="false"> Passport or Residence</a>
                </li>
                <li class=""><a href="#section_five" data-toggle="tab" aria-expanded="false">Criminal Record Details</a>
                </li>
                <li class=""><a href="#section_six" data-toggle="tab" aria-expanded="false">Company Info</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="section_start">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/adddriver_detail" name="drivers" id="drivers">
                 
                        {{csrf_field()}}
                        <div class="center_section tab_first">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">firstname</label>
                                <div class="col-sm-10">
                                    <input type="text" name="firstname" class="form-control" id="inputName" placeholder="firstname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-sm-2 control-label">lastname</label>
                                <div class="col-sm-10">
                                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email_id" class="col-sm-2 control-label">email id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email_id" id="email_id" placeholder="email id">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="datepicker" class="col-sm-2 control-label">date of birth:</label>
                                <div class="col-sm-10">
                                    <div class="input-group date">
                                        <div class="input-group-addon"> <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="date_of_birth" class="form-control pull-right" id="datepicker" readonly>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Gender</label>
                                <div class="col-sm-8">
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input name="gender" value="male" type="radio">Male</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="gender" value="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mobilenumber" class="col-sm-2 control-label">mobilenumber</label>
                                <div class="col-sm-10">
                                    <input type="text" name="mobilenumber" class="form-control" id="mobilenumber" placeholder="mobilenumber">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-2 control-label">address</label>
                                <div class="col-sm-10">
                                    <textarea name="address" class="form-control" placeholder="address"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Profile Picture</label>
                                <div class="col-sm-8">
                                    <input name="profile" type="file" id="profile_img">
                                    <p class="help-block">Upload .png, .jpg or .jpeg image files only</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    @if ($message = Session::get('status'))
                                    <p class="message">{{$message}}</p>
                                    @endif
                                    <button type="button" id="section_start_btn" class="btn btn-primary pull-right" style="width:16%;">Next</button>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="tab-pane " id="section_one">
                    <div class="center_section form-horizontal tab_sec">
                        <div class="form-group">
                            <label for="bank_account_no" class="col-sm-4 control-label">Bank Account Number</label>
                            <div class="col-sm-8">
                                <input type="text" name="bank_account_no" class="form-control" id="bank_account_no" placeholder="bank account no">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="card_no" class="col-sm-4 control-label">card number</label>
                            <div class="col-sm-8">
                                <input type="text" name="card_no" class="form-control" id="card_no" placeholder="card no">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="button" id="section_one_btn" class="btn btn-primary pull-right" style="width:16%;">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="section_two">
                    <div class="center_section form-horizontal tab_third">
                        <div class="form-group">
                            <label for="brand" class="col-sm-4 control-label">brand</label>
                            <div class="col-sm-8">
                                <input type="text" name="brand" class="form-control" id="brand" placeholder="brand">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="model" class="col-sm-4 control-label">model</label>
                            <div class="col-sm-8">
                                <input type="text" name="model" class="form-control" id="model" placeholder="model">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="year" class="col-sm-4 control-label">year</label>
                            <div class="col-sm-8">
                                <input type="text" name="year" class="form-control" id="year" placeholder="year">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="licence_plate_number" class="col-sm-4 control-label">licence plate number</label>
                            <div class="col-sm-8">
                                <input type="text" name="licence_plate_number" class="form-control" id="licence_plate_number" placeholder="licence plate number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vehicle_type" class="col-sm-4 control-label">vehicle type</label>
                            <div class="col-sm-8">
                                <input type="text" name="vehicle_type" class="form-control" id="vehicle_type" placeholder="vehicle type">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vehicle_color" class="col-sm-4 control-label">vehicle color</label>
                            <div class="col-sm-8">
                                <input type="text" name="vehicle_color" class="form-control" id="vehicle_color" placeholder="vehicle color">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vehicle_dimension" class="col-sm-4 control-label">vehicle dimension</label>
                            <div class="col-sm-8">
                                <input type="text" name="vehicle_dimension" class="form-control" id="vehicle_dimension" placeholder="vehicle dimension">
                            </div>
                        </div>
                      
                            <div class="form-group">
                                <label class="col-sm-4 control-label">registration certificate</label>
                                <div class="col-sm-8">

                                    <input  type="file" name="registration" id="registration" >
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="button" id="section_two_btn" class="btn btn-primary pull-right" style="width:16%;">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="section_three">
                    <div class="center_section form-horizontal tab_four">
                        <div class="form-group">
                            <label for="licence_number" class="col-sm-4 control-label">licence number</label>
                            <div class="col-sm-8">
                                <input type="text" name="licence_number" class="form-control" id="licence_number" placeholder="licence number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="licence_name" class="col-sm-4 control-label">licence name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="licence_name" id="licence_name" placeholder="licence name">
                            </div>
                        </div>
                      
                          <div class="form-group">
                            <label for="licence_issued_date" class="col-sm-4 control-label">licence issued date</label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon"> <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="licence_issued_date" class="form-control pull-right" id="li_issued_date" readonly>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="licence_plate_number" class="col-sm-4 control-label">licence plate number</label>
                            <div class="col-sm-8">
                                <input type="text" name="licence_plate_number" class="form-control" id="licence_plate_number" placeholder="licence plate number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exp_date" class="col-sm-4 control-label">licence expire date</label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon"> <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="licence_expire_date" class="form-control pull-right" id="exp_date" readonly>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">licence image</label>
                            <div class="col-sm-8">
                                <input name="licence" type="file" id="licence">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="button" id="section_three_btn" class="btn btn-primary pull-right" style="width:16%;">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="section_four">
                    <div class="center_section form-horizontal tab_five">
                        <div class="form-group">
                            <label for="passport_number" class="col-sm-4 control-label">passport number</label>
                            <div class="col-sm-8">
                                <input type="text" name="passport_number" class="form-control" id="passport_number" placeholder="passport number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="passport_name" class="col-sm-4 control-label">passport name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="passport_name" id="passport_name" placeholder="passport name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="issued_date" class="col-sm-4 control-label">issued date</label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon"> <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="passport_issued_date" class="form-control pull-right" id="issued_date" readonly="">
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="pexp_date" class="col-sm-4 control-label">expire date</label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon"> <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="passport_expire_date" class="form-control pull-right" id="pexp_date" readonly="">
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="passport_name" class="col-sm-4 control-label">address</label>
                            <div class="col-sm-8">
                                <textarea name="passport_address" class="form-control" placeholder="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="button" id="section_four_btn" class="btn btn-primary pull-right" style="width:16%;">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="section_five">
                    <div class="center_section form-horizontal tab_six">
                        <div class="form-group">
                            <label for="issued_date" class="col-sm-4 control-label">issued date</label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon"> <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="cirminal_issued_date" class="form-control pull-right" id="cissued_date" readonly>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">cirminal certificate</label>
                            <div class="col-sm-8">
                                <input name="cirminal" type="file" id="cirminal_certificate">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="button" id="section_five_btn" class="btn btn-primary pull-right" style="width:16%;">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="section_six">
                    <div class="center_section form-horizontal tab_last">
                        <div class="form-group">
                            <label for="company_name" class="col-sm-4 control-label">company name</label>
                            <div class="col-sm-8">
                                <input type="text" name="company_name" class="form-control" id="company_name" placeholder="company name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">id card image</label>
                            <div class="col-sm-8">
                                <input name="id_card" type="file" id="id_card">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="issued_date" class="col-sm-4 control-label">issued date</label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon"> <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="company_issued_date" class="form-control pull-right" id="inissued_date" readonly="">
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="joining_date" class="col-sm-4 control-label">joining date</label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon"> <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="company_joining_date" class="form-control pull-right" id="joining_date" readonly="">
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="designation" class="col-sm-4 control-label">designation</label>
                            <div class="col-sm-8">
                                <input type="text" name="designation" class="form-control" id="designation" placeholder="designation">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="button" id="form_submit" class="btn btn-primary pull-right" style="width:16%;">submit</button>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
                <!-- /.tab-pane -->
       
            </div>
            <!-- /.tab-content -->
        </div>
    </div>
    <style type="text/css">
        .message {
            color: red;
            font-size: 20px;
        }
    </style>
</section>
@endsection