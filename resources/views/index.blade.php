
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>deliveryapp</title>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
      <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
      <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   </head>
   <body class="hold-transition login-page" >
      <div class="login-box">
         <!-- /.login-logo -->
         <div class="login-box-body">
            <div class="login-logo">
               <a href="index2.html"><b style="color: black">deliveryapp</b></a>
            </div>
            @if ($message = Session::get('status'))
            <p class="message">{{ $message }}</p>
            @endif
            <form action="/login_admin" method="post">
               {{ csrf_field() }}
               <div class="form-group has-feedback">
                  <input type="email" name="email_id" class="form-control" placeholder="Email">
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
               </div>
               <div class="form-group has-feedback">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
               </div>
               <div class="row">
                  <div class="col-xs-8">
                     <div class="checkbox icheck">
                     </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-4">
                     <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                  </div>
                  <!-- /.col -->
               </div>
            </form>
         </div>
      </div>
      <script src="bower_components/jquery/dist/jquery.min.js"></script>
      <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="plugins/iCheck/icheck.min.js"></script>
      <style type="text/css">
         body{
         background-image: url("/dist/img/bg.png") !important;
         }
         .message {color: red; text-align: center;font-size: 17px;}
      </style>
      <script>
         setTimeout(function(){ 
         
           $('.message').fadeOut();
         }, 3000);
         $(function () {
           $('input').iCheck({
             checkboxClass: 'icheckbox_square-blue',
             radioClass: 'iradio_square-blue',
             increaseArea: '20%' /* optional */
           });
         });
      </script>
   </body>
</html>

