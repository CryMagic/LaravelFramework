<!DOCTYPE html>
<html class=" ">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta charset="utf-8" />
      <title>Admin My Website</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta content="" name="description" />
      <meta content="" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- CORE CSS FRAMEWORK - START -->
      <link href="{{url('assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <link href="{{url('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{url('assets/plugins/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{url('assets/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{url('assets/css/animate.min.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{url('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css"/>
      <!-- CORE CSS FRAMEWORK - END -->
      <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START --> 
      <link href="{{url('assets/plugins/icheck/skins/all.css')}}" rel="stylesheet" type="text/css" media="screen"/>
      <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END --> 
      <!-- CORE CSS TEMPLATE - START -->
      <link href="{{url('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{url('assets/css/responsive.css')}}" rel="stylesheet" type="text/css"/>
      <!-- CORE CSS TEMPLATE - END -->
   </head>
   <!-- END HEAD -->
   <!-- BEGIN BODY -->
   <body class=" login_page">
      <div class="container-fluid">
         <div class="login-wrapper row">
            
            <div id="login" class="login loginpage col-lg-offset-4 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-4">
               <h1><a href="{{ url('/admin/login') }}" title="Login Page" tabindex="-1">Admin</a></h1>
               @include('admin.notify.message-error')
               <form name="loginform" id="loginform" action="{{ url('/admin/login') }}" method="post">
                    {{ csrf_field() }}
                  <p>
                     <label for="user_login">E-mail<br />
                     <input type="email" name="Email" id="user_login" class="input" value="demo" size="20" /></label>
                  </p>
                  <p>
                     <label for="user_pass">Password<br />
                     <input type="password" name="Password" id="user_pass" class="input" value="demo" size="20" /></label>
                  </p>
                  <p class="forgetmenot">
                     <label class="icheck-label form-label" for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" class="icheck-minimal-aero" checked> Remember me</label>
                  </p>
                  <p class="submit">
                     <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-accent btn-block" value="Sign In" />
                  </p>
               </form>
            </div>
         </div>
      </div>
      <!-- MAIN CONTENT AREA ENDS -->
      <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->
      <!-- CORE JS FRAMEWORK - START --> 
      <script src="{{url('assets/js/jquery-1.11.2.min.js')}}" type="text/javascript"></script> 
      <script src="{{url('assets/js/jquery.easing.min.js')}}" type="text/javascript"></script> 
      <script src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script> 
      <script src="{{url('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>  
      <script src="{{url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}" type="text/javascript"></script> 
      <script src="{{url('assets/plugins/viewport/viewportchecker.js')}}" type="text/javascript"></script>  
      <script>window.jQuery||document.write('<script src="{{url('assets/js/jquery-1.11.2.min.js')}}"><\/script>');</script>
      <!-- CORE JS FRAMEWORK - END --> 
      <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
      <script src="{{url('assets/plugins/icheck/icheck.min.js')}}" type="text/javascript"></script>
      <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
      <!-- CORE TEMPLATE JS - START --> 
      <script src="{{url('assets/js/scripts.js')}}" type="text/javascript"></script> 
      <!-- END CORE TEMPLATE JS - END --> 
   </body>
</html>