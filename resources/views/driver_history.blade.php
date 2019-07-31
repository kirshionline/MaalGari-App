@extends('layouts.app')
@section('content')
   <section class="content-header">
      <h1>View History<small></small></h1>
      <ol class="breadcrumb">
         <li><a href="http://nikola.world/admin"><i class="fa fa-dashboard"></i>Home</a></li>
         <li><a href="http://nikola.world/admin/users"><i class="fa fa-user"></i> Users</a></li>
         <li class="active"><i class="fa fa-university"></i> View History</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box box-info">
               <div class="box-header">
               </div>
               <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th class="min">User Name</th>
                           <th class="min">Driver Name</th>
                           <th class="min">Date and Time</th>
                           <th>Status</th>
                           <th>Price</th>
                           <th>Package Weight</th>
                           <th>Payment Mode</th>
                           <th>Payment Status</th>
                           <th>Request Type</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>Frema Crystal</td>
                           <td>Pekay Con </td>
                           <td>2019-05-05 17:33:33</td>
                           <td>
                              Request Completed
                           </td>
                           <td>                      ₹15
                           </td>
                           <td>12</td>
                           <td>
                              cod
                           </td>
                           <td> <span class="label label-success">Paid</span> </td>
                           <td>
                              Admin
                           </td>
                           <td>
                              <div class="input-group-btn">
                                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                                 <span class="caret"></span>
                                 </button>
                                 <ul class="dropdown-menu">
                                    <li>
                                       <a href="">View Request</a>
                                    </li>
                                    <li>
                                       <a href="">Cancel Request</a>
                                    </li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>Frema Crystal</td>
                           <td>Pekay Con </td>
                           <td>2019-05-05 17:15:39</td>
                           <td>
                              Request Completed
                           </td>
                           <td>                      ₹23
                           </td><td>12</td>
                           <td>
                              cod
                           </td>
                           <td> <span class="label label-success">Paid</span> </td>
                           <td>
                              Admin
                           </td>
                           <td>
                              <div class="input-group-btn">
                                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                                 <span class="caret"></span>
                                 </button>
                                 <ul class="dropdown-menu">
                                    <li>
                                       <a href="">View Request</a>
                                    </li>
                                    <li>
                                       <a href="">Cancel Request</a>
                                    </li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>Frema Crystal</td>
                           <td>Pekay Con </td>
                           <td>2019-05-05 17:01:28</td>
                           <td>
                              Request Completed
                           </td>
                           <td>                      ₹27
                           </td><td>12</td>
                           <td>
                              cod
                           </td>
                           <td> <span class="label label-success">Paid</span> </td>
                           <td>
                              Admin
                           </td>
                           <td>
                              <div class="input-group-btn">
                                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                                 <span class="caret"></span>
                                 </button>
                                 <ul class="dropdown-menu">
                                    <li>
                                       <a href="">View Request</a>
                                    </li>
                                    <li>
                                       <a href="">Cancel Request</a>
                                    </li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection