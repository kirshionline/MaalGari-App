

@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 1005px; margin: 0px;">
   <section class="content-header">
      <h1>Managers registered under you<small></small></h1>
      <ol class="breadcrumb">
         <li><a href=""><i class="fa fa-dashboard"></i>Home</a></li>
         <li class="active"><i class="fa fa-corporate"></i> Managers</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box box-info">
               <div class="box-body">
                  <div class="map_content">
                     <p class="lead para_mid">
                        <b>  What is this?</b>
                     </p>
                     <p class="lead para_mid">
                        Present are the list of Businesses, Manager's registered under your company.
                     </p>
                     <p class="lead para_mid">
                        <b>Are they different from regular Drivers?</b>
                     </p>
                     <p class="lead para_mid">
                        Yes, you are right. You will have individual drivers driving under you. But corp orate's are separate business registered under your company. They will have their own fleet and work for you.
                     </p>
                  </div>
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="dataTables_length" id="example1_length">
                              <label>
                                 Show 
                                 <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                 </select>
                                 entries
                              </label>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <table id="example1" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="example1_info">
                              <thead>
                                 <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"  aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Name: activate to sort column ascending">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"

                                      aria-label="Email: activate to sort column ascending">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"

                                     aria-label="Mobile: activate to sort column ascending">Mobile</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 

                                    aria-label="Address: activate to sort column ascending">Address</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                                    aria-label="Action: activate to sort column ascending">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr role="row" class="odd">
                                    <td class="sorting_1">1</td>
                                    <td>li in</td>
                                    <td>at*****@gmail.com</td>
                                    <td>123*********</td>
                                    <td>usa</td>
                                    <!-- <td>
                                       if($corporate->is_activated)
                                         <span class="label label-success">Approved</span>
                                       else
                                         <span class="label label-warning">pending</span>
                                       endif
                                       </td> -->
                                    <td>
                                       <ul class="admin-action btn btn-default">
                                          <li class="dropdown">
                                             <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                             Action <span class="caret"></span>
                                             </a>
                                             <ul class="dropdown-menu">
                                                <li>
                                                   <a href="http://nikola.world/admin/password/getCredentials/atif.hacker@gmail.com/manager">Reset Password</a>
                                                </li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://nikola.world/admin/view/manager/manager_details/37">View Manager</a></li>
                                                <li role="presentation" class="divider"></li>
                                                <li role="presentation">
                                                   <a role="menuitem" tabindex="-1" onclick="return confirm('Are you sure?');" href="http://nikola.world/admin/delete/manager/37">Delete
                                                   </a>
                                                </li>
                                             </ul>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>
                                 <tr role="row" class="even">
                                    <td class="sorting_1">2</td>
                                    <td>Newmark </td>
                                    <td>ch*****@gmail.com</td>
                                    <td>234*********</td>
                                    <td>new york city</td>
                                    <!-- <td>
                                       if($corporate->is_activated)
                                         <span class="label label-success">Approved</span>
                                       else
                                         <span class="label label-warning">pending</span>
                                       endif
                                       </td> -->
                            
                                 </tr>
                              
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-5">
                           <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div>
                        </div>
                        <div class="col-sm-7">
                           <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                              <ul class="pagination">
                                 <li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
                                 <li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
                                 <li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">Next</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
@section('styles')
<style>
   .map_content .lead .para_mid{
   font-size: 16px !important;
   }
</style>
@endsection

