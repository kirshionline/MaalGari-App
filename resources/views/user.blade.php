@extends('layouts.app') @section('content')
<section class="content-header">
   <h1>Add a passenger<small></small></h1>
   <ol class="breadcrumb">
      <li><a href="http://nikola.world/admin"><i class="fa fa-dashboard"></i>Home</a>
      </li>
      <li><a href="http://nikola.world/admin/users"><i class="fa fa-users"></i> Users</a>
      </li>
      <li class="active">Add User</li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-md-12">
         <div class="box box-info" style="padding: 37px; width: 70%;margin: 0px auto;">
            <div class="box-header"></div>
            <form class="form-horizontal bordered-group" action="/addpassenger" method="POST" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
               <div class="form-group">
                  <label class="col-sm-2 control-label">User Name</label>
                  <div class="col-sm-8">
                     <input type="text" name="username" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">First Name</label>
                  <div class="col-sm-8">
                     <input type="text" name="firstname" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Lastname</label>
                  <div class="col-sm-8">
                     <input type="text" name="lastname" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-8">
                     <input type="email" name="email_id" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Mobilenumber</label>
                  <div class="col-sm-8">
                     <input type="text" name="mobilenumber" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Gender</label>
                  <div class="col-sm-8">
                     <div class="radio">
                        <label>
                           <input name="gender" value="male" type="radio">Male</label>
                     </div>
                     <div class="radio">
                        <label>
                           <input type="radio" name="gender" value="female">Female</label>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label for="datepicker" class="col-sm-2 control-label">date of birth:</label>
                  <div class="col-sm-8">
                     <div class="input-group date">
                        <div class="input-group-addon"> <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="dob" class="form-control pull-right" id="datepicker" readonly="">
                     </div>
                  </div>
                  <!-- /.input group -->
               </div>
          
               <div class="form-group">
                  <label class="col-sm-2 control-label">Profile Picture</label>
                  <div class="col-sm-8">
                     <input type="file" name="profile_image" class="uploadFile img" id="profile_change" value="Upload Photo">
                     <p class="help-block">Upload .png, .jpg or .jpeg image files only</p>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">password</label>
                  <div class="col-sm-8">
                     <input type="password" name="password" class="form-control">
                  </div>
               </div>
               @if($message = Session::get('status'))
               <p>{{$message}}</p>@endif
               <div class="box-footer">
                  <button type="reset" class="btn btn-danger">Cancel</button>
                  <button type="submit" class="btn btn-success pull-right">Submit</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>@endsection @section('styles')
<style>
   .map_content .lead .para_mid{
      font-size: 16px !important;
      }
</style>@endsection