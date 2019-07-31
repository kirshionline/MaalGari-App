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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Requests</th>
                        <th>Accepted Requests</th>
                        <th>Cancelled Requests</th>
                        <th>Availability</th>
                        <th>Status</th>
                        <th>Action</th>


                      <!--   <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 63px;" aria-label="ID: activate to sort column ascending">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 168px;" aria-label="Name: activate to sort column ascending">Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 206px;" aria-label="Email: activate to sort column ascending">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 106px;" aria-label="Requests: activate to sort column ascending">Requests</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 206px;" aria-label="Accepted: activate to sort column ascending">Accepted Requests</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 206px;" aria-label="Cancelled: activate to sort column ascending">Cancelled Requests</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 306px;" aria-label="Availability: activate to sort column ascending">Availability</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 127px;" aria-label="Status: activate to sort column ascending">Status</th>
                        <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 138px;" aria-label="Action: activate to sort column ascending" aria-sort="descending">Action</th> -->
                     </tr>
                  </thead>
                  <tbody>
                     <tr role="row" class="odd">
                        <td class="">1</td>
                        <td>Cooper Group</td>
                        <td>perthc*****@gmail.com</td>
                        <td>4</td>
                        <td>3</td>
                        <td>1</td>
                        <td> <span class="label label-warning">N/A</span> </td>
                        <td> <span class="label label-success">Approved</span> </td>
                        <!-- <td>
                           if($user->is_activated)
                             <span class="label label-success">Approved</span>
                           else
                             <span class="label label-warning">pending</span>
                           endif
                           </td> -->
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
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Decline</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Delete</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">View History</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </td>
                     </tr>
                     <tr role="row" class="even">
                        <td class="">2</td>
                        <td>Mohammed Owais</td>
                        <td>owais.*****@gmail.com</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td> <span class="label label-warning">N/A</span> </td>
                        <td> <span class="label label-success">Approved</span> </td>
                        <!-- <td>
                           if($user->is_activated)
                             <span class="label label-success">Approved</span>
                           else
                             <span class="label label-warning">pending</span>
                           endif
                           </td> -->
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
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Decline</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Delete</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">View History</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </td>
                     </tr>
                     <tr role="row" class="odd">
                        <td class="">3</td>
                        <td>Sanjeev Kumar</td>
                        <td>sk.min*****@gmail.com</td>
                        <td>3</td>
                        <td>2</td>
                        <td>1</td>
                        <td> <span class="label label-primary">Yes</span> </td>
                        <td> <span class="label label-danger">Unapproved</span> </td>
                        <!-- <td>
                           if($user->is_activated)
                             <span class="label label-success">Approved</span>
                           else
                             <span class="label label-warning">pending</span>
                           endif
                           </td> -->
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
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Decline</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Delete</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">View History</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </td>
                     </tr>
                     <tr role="row" class="even">
                        <td class="">4</td>
                        <td>Bruno Tadeu</td>
                        <td>brunot*****@gmail.com</td>
                        <td>5</td>
                        <td>5</td>
                        <td>0</td>
                        <td> <span class="label label-primary">Yes</span> </td>
                        <td> <span class="label label-success">Approved</span> </td>
                        <!-- <td>
                           if($user->is_activated)
                             <span class="label label-success">Approved</span>
                           else
                             <span class="label label-warning">pending</span>
                           endif
                           </td> -->
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
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Decline</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Delete</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">View History</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </td>
                     </tr>
                     <tr role="row" class="odd">
                        <td class="">5</td>
                        <td>Nithya Shajee</td>
                        <td>oyeoye*****@gmail.com</td>
                        <td>2</td>
                        <td>1</td>
                        <td>1</td>
                        <td> <span class="label label-warning">N/A</span> </td>
                        <td> <span class="label label-success">Approved</span> </td>
                        <!-- <td>
                           if($user->is_activated)
                             <span class="label label-success">Approved</span>
                           else
                             <span class="label label-warning">pending</span>
                           endif
                           </td> -->
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
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Decline</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Delete</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">View History</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </td>
                     </tr>
                     <tr role="row" class="even">
                        <td class="">6</td>
                        <td>Diego Fernando</td>
                        <td>dnando*****@gmail.com</td>
                        <td>2</td>
                        <td>2</td>
                        <td>0</td>
                        <td> <span class="label label-warning">N/A</span> </td>
                        <td> <span class="label label-danger">Unapproved</span> </td>
                        <!-- <td>
                           if($user->is_activated)
                             <span class="label label-success">Approved</span>
                           else
                             <span class="label label-warning">pending</span>
                           endif
                           </td> -->
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
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Decline</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Delete</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">View History</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </td>
                     </tr>
                     <tr role="row" class="odd">
                        <td class="">7</td>
                        <td>Felipe Cortés</td>
                        <td>felipe*****@gmail.com</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td> <span class="label label-primary">Yes</span> </td>
                        <td> <span class="label label-success">Approved</span> </td>
                        <!-- <td>
                           if($user->is_activated)
                             <span class="label label-success">Approved</span>
                           else
                             <span class="label label-warning">pending</span>
                           endif
                           </td> -->
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
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Decline</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Delete</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">View History</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </td>
                     </tr>
                     <tr role="row" class="even">
                        <td class="">8</td>
                        <td>wizdom dike</td>
                        <td>wizdom*****@gmail.com</td>
                        <td>3</td>
                        <td>3</td>
                        <td>0</td>
                        <td> <span class="label label-warning">N/A</span> </td>
                        <td> <span class="label label-danger">Unapproved</span> </td>
                        <!-- <td>
                           if($user->is_activated)
                             <span class="label label-success">Approved</span>
                           else
                             <span class="label label-warning">pending</span>
                           endif
                           </td> -->
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
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Decline</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Delete</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">View History</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </td>
                     </tr>
                     <tr role="row" class="odd">
                        <td class="">9</td>
                        <td>Masfu Hisyam</td>
                        <td>al_his*****@gmail.com</td>
                        <td>6</td>
                        <td>5</td>
                        <td>1</td>
                        <td> <span class="label label-primary">Yes</span> </td>
                        <td> <span class="label label-success">Approved</span> </td>
                        <!-- <td>
                           if($user->is_activated)
                             <span class="label label-success">Approved</span>
                           else
                             <span class="label label-warning">pending</span>
                           endif
                           </td> -->
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
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Decline</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Delete</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">View History</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </td>
                     </tr>
                     <tr role="row" class="even">
                        <td class="">10</td>
                        <td>spj j</td>
                        <td>spabcj*****@gmail.com</td>
                        <td>10</td>
                        <td>7</td>
                        <td>3</td>
                        <td> <span class="label label-primary">Yes</span> </td>
                        <td> <span class="label label-success">Approved</span> </td>
                        <!-- <td>
                           if($user->is_activated)
                             <span class="label label-success">Approved</span>
                           else
                             <span class="label label-warning">pending</span>
                           endif
                           </td> -->
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
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Decline</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">Delete</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="">View History</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </td>
                     </tr>
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

<script type="text/javascript">
  
</script>
            <style type="text/css">ul{list-style: none;}</style>

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
</script>
@endsection