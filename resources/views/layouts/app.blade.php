<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>deliveryapp</title>
      <meta name="csrf-token" content="{{ csrf_token()}}">
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
      <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
      <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
      <link rel="stylesheet" href="/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      <link rel="stylesheet" href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
      <link rel="stylesheet" href="/bower_components/bootstrap-daterangepicker/daterangepicker.css">
      <link rel="stylesheet" href="/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
      <style type="text/css">ul{list-style: none;}.nav-tabs-custom>.nav-tabs>li {pointer-events: none !important;}
   .center_section{width: 60%; margin:12px auto;}.form-horizontal label{text-align: left !important;}
.ui-datepicker-calendar {
    display: none;
    }</style>
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         <header class="main-header">
            <a href="index2.html" class="logo">
            <span class="logo-mini"><b>D</b>App</span>
            <span class="logo-lg"><b>Delivery </b>App</span>
            </a>
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
               <span class="sr-only">Toggle navigation</span>
               </a>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- User Account: style can be found in dropdown.less -->
                     <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{Session('username')}}</span>
                        </a>
                        <ul class="dropdown-menu">
                           <!-- User image -->
                           <li class="user-header">
                              <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                              <p>
                                 {{Session('username')}}
                                 <small>admmin</small>
                              </p>
                           </li>

                           <li class="user-footer">
                              <div class="pull-left">
                                 <a href="#" class="btn btn-default btn-flat">Profile</a>
                              </div>
                              <div class="pull-right">
                                 <a onclick="return confirm('Are you sure want to Logout?')" href="/logout" class="btn btn-default btn-flat">Sign out</a>
                              </div>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- Left side column. contains the logo and sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
           
               <!-- /.search form -->
               <!-- sidebar menu: : style can be found in sidebar.less -->
               <ul class="sidebar-menu" data-widget="tree">
                 
                  <li class="active">
                     <a href="/dashboard">
                     <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-map"></i>
                     <span>Stats on Map</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="/mapview"><i class="fa fa-circle-o"></i> Booking Stats</a></li>
                        <li><a href="/availability"><i class="fa fa-circle-o"></i> Driver Availability Stats</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-user"></i>
                     <span>Passenger Management</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="/addpassenger"><i class="fa fa-circle-o"></i> Add Passenger</a></li>
                        <li><a href="/viewpassenger"><i class="fa fa-circle-o"></i> View All Passengers</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i>
                     <span>Driver Management</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="/driver"><i class="fa fa-circle-o"></i> Add Driver</a></li>
                        <li><a href="/providers"><i class="fa fa-circle-o"></i> View All Drivers</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i>
                     <span>Vehicle Management</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="/vehicle"><i class="fa fa-circle-o"></i> Add Vehicle</a></li>
                        <li><a href="/vehiclelist"><i class="fa fa-circle-o"></i> View All Vehicles</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i>
                     <span>Package Management</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="/addpackage"><i class="fa fa-circle-o"></i> Add Package</a></li>
                        <li><a href="/packageview"><i class="fa fa-circle-o"></i> View All Packages</a></li>
                     </ul>
                  </li>
                  <li><a href="/transactions"><i class="fa fa-credit-card"></i> <span> Transactions</span></a></li>
                  <li><a href="#"><i class="fa fa-file"></i> <span> Reports</span></a></li>
                  <!-- <li class="header">LABELS</li> -->
               </ul>
            </section>
            <!-- /.sidebar -->
         </aside>
         <div class="content-wrapper">
            @yield('content')
         </div>
         <!-- <footer class="main-footer">
            <div class="pull-right hidden-xs">
               <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
         </footer> -->
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark" style="display: none;">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
               <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
               <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
               <!-- Home tab content -->
               <div class="tab-pane" id="control-sidebar-home-tab">
                  <h3 class="control-sidebar-heading">Recent Activity</h3>
                  <ul class="control-sidebar-menu">
                     <li>
                        <a href="javascript:void(0)">
                           <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                           <div class="menu-info">
                              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                              <p>Will be 23 on April 24th</p>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0)">
                           <i class="menu-icon fa fa-user bg-yellow"></i>
                           <div class="menu-info">
                              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                              <p>New phone +1(800)555-1234</p>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0)">
                           <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                           <div class="menu-info">
                              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                              <p>nora@example.com</p>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0)">
                           <i class="menu-icon fa fa-file-code-o bg-green"></i>
                           <div class="menu-info">
                              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                              <p>Execution time 5 seconds</p>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <!-- /.control-sidebar-menu -->
                  <h3 class="control-sidebar-heading">Tasks Progress</h3>
                  <ul class="control-sidebar-menu">
                     <li>
                        <a href="javascript:void(0)">
                           <h4 class="control-sidebar-subheading">
                              Custom Template Design
                              <span class="label label-danger pull-right">70%</span>
                           </h4>
                           <div class="progress progress-xxs">
                              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0)">
                           <h4 class="control-sidebar-subheading">
                              Update Resume
                              <span class="label label-success pull-right">95%</span>
                           </h4>
                           <div class="progress progress-xxs">
                              <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0)">
                           <h4 class="control-sidebar-subheading">
                              Laravel Integration
                              <span class="label label-warning pull-right">50%</span>
                           </h4>
                           <div class="progress progress-xxs">
                              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0)">
                           <h4 class="control-sidebar-subheading">
                              Back End Framework
                              <span class="label label-primary pull-right">68%</span>
                           </h4>
                           <div class="progress progress-xxs">
                              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <!-- /.control-sidebar-menu -->
               </div>
               <!-- /.tab-pane -->
               <!-- Stats tab content -->
               <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
               <!-- /.tab-pane -->
               <!-- Settings tab content -->
               <div class="tab-pane" id="control-sidebar-settings-tab">
                  <form method="post">
                     <h3 class="control-sidebar-heading">General Settings</h3>
                     <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                           Some information about this general settings option
                        </p>
                     </div>
                     <!-- /.form-group -->
                     <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                           Other sets of options are available
                        </p>
                     </div>
                     <!-- /.form-group -->
                     <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                           Allow the user to show his name in blog posts
                        </p>
                     </div>
                     <!-- /.form-group -->
                     <h3 class="control-sidebar-heading">Chat Settings</h3>
                     <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-right" checked>
                        </label>
                     </div>
                     <!-- /.form-group -->
                     <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input type="checkbox" class="pull-right">
                        </label>
                     </div>
                     <!-- /.form-group -->
                     <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Delete chat history
                        <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                     </div>
                     <!-- /.form-group -->
                  </form>
               </div>
               <!-- /.tab-pane -->
            </div>
         </aside>
         <!-- /.control-sidebar -->
         <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
         <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      <!-- jQuery 3 -->
      <script src="/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
         $.widget.bridge('uibutton', $.ui.button);
      </script>
      <!-- Bootstrap 3.3.7 -->
      <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- datepicker -->
      <script src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
      <!-- DataTables -->
      <script src="/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
      <!-- AdminLTE App -->
      <script src="/dist/js/adminlte.min.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="/dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="/dist/js/demo.js"></script>
      <script src="/dist/js/deliveryapp.js"></script>
      <script>
        $(function () {
          $('#driver_detail').DataTable({'ordering': false});
          $('#banking_Info').DataTable();
          

          $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : false,
            'info'        : true,
            'autoWidth'   : false
          })
        })



     setTimeout(function(){ 
         
           $('.message').fadeOut();
         }, 3000);

</script>
      @yield('styles')
      @yield('scripts')
   </body>
</html>
<style type="text/css">
   .viw_section{width: 61%; margin: 30px auto;}
.box-footer {clear: both;}
.sw_section{float: right;}

</style>



