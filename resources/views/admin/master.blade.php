<!DOCTYPE html>
<html class=" ">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Admin My WebSite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="Website Ecommerce" />
    <meta content="" name="By Tran Quoc Thien" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.png') }}" type="image/x-icon" />
    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" href="{{ url('assets/images/apple-touch-icon-57-precomposed.png') }}">
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('assets/images/apple-touch-icon-114-precomposed.png') }}">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('assets/images/apple-touch-icon-72-precomposed.png') }}">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('assets/images/apple-touch-icon-144-precomposed.png') }}">
    <!-- For iPad Retina display -->
    <link href="{{ url('assets/plugins/datepicker/css/datepicker.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <!-- CORE CSS FRAMEWORK - START -->
    <link href="{{ url('assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ url('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/plugins/bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/fonts/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/plugins/icheck/skins/all.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{ url('assets/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{ url('assets/plugins/bootstrap3-wysihtml5/css/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" media="screen"/>

    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->
    
    
    <link href="{{ url('assets/plugins/morris-chart/css/morris.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ url('assets/plugins/jquery-ui/smoothness/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" media="screen" />

    <link href="{{ url('assets/plugins/messenger/css/messenger.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{ url('assets/plugins/messenger/css/messenger-theme-future.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{ url('assets/plugins/messenger/css/messenger-theme-flat.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->
    
    <link href="{{ url('assets/plugins/datatables/css/jquery.dataTables.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ url('assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ url('assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ url('assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" media="screen" />

    <!-- CORE CSS TEMPLATE - START -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/summernote.css') }}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body>
    <!-- START TOPBAR -->
    @include('admin.block.header')
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->
        @include('admin.block.sidebar')        
        
        <!--  SIDEBAR - END -->
        <!-- START CONTENT -->
        @yield('content')
        <!-- END CONTENT -->
        <div class="page-chatapi hideit">

            <div class="search-bar">
                <input type="text" placeholder="Search" class="form-control">
            </div>

            <div class="chat-wrapper">
                <h4 class="group-head">Groups</h4>
                <ul class="group-list list-unstyled">
                    <li class="group-row">
                        <div class="group-status available">
                            <i class="fa fa-circle"></i>
                        </div>
                        <div class="group-info">
                            <h4><a href="#">Work</a></h4>
                        </div>
                    </li>
                    <li class="group-row">
                        <div class="group-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                        <div class="group-info">
                            <h4><a href="#">Friends</a></h4>
                        </div>
                    </li>

                </ul>


                <h4 class="group-head">Favourites</h4>
                <ul class="contact-list">

                    <li class="user-row " id='chat_user_1' data-user-id='1'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Clarine Vassar</a></h4>
                            <span class="status available" data-status="available"> Available</span>
                        </div>
                        <div class="user-status available">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_2' data-user-id='2'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Brooks Latshaw</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_3' data-user-id='3'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Clementina Brodeur</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>

                </ul>


                <h4 class="group-head">More Contacts</h4>
                <ul class="contact-list">

                    <li class="user-row " id='chat_user_4' data-user-id='4'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Carri Busey</a></h4>
                            <span class="status offline" data-status="offline"> Offline</span>
                        </div>
                        <div class="user-status offline">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_5' data-user-id='5'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Melissa Dock</a></h4>
                            <span class="status offline" data-status="offline"> Offline</span>
                        </div>
                        <div class="user-status offline">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_6' data-user-id='6'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Verdell Rea</a></h4>
                            <span class="status available" data-status="available"> Available</span>
                        </div>
                        <div class="user-status available">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_7' data-user-id='7'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Linette Lheureux</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_8' data-user-id='8'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Araceli Boatright</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_9' data-user-id='9'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Clay Peskin</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_10' data-user-id='10'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Loni Tindall</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_11' data-user-id='11'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Tanisha Kimbro</a></h4>
                            <span class="status idle" data-status="idle"> Idle</span>
                        </div>
                        <div class="user-status idle">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_12' data-user-id='12'>
                        <div class="user-img">
                            <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Jovita Tisdale</a></h4>
                            <span class="status idle" data-status="idle"> Idle</span>
                        </div>
                        <div class="user-status idle">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>

                </ul>
            </div>

        </div>


        <div class="chatapi-windows ">
        </div>
    </div>
    <!-- END CONTAINER -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


    <!-- CORE JS FRAMEWORK - START -->
    <script src="{{ url('assets/js/jquery-1.11.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/jquery.easing.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/viewport/viewportchecker.js') }}" type="text/javascript"></script>
    
    <!-- CORE JS FRAMEWORK - END -->


    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <script src="{{ url('assets/plugins/jquery-ui/smoothness/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/sparkline-chart/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/chart-sparkline.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/morris-chart/js/raphael-min.js') }}" type="text/javascript"></script>
    
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <script src="{{ url('assets/plugins/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <!-- JQUERY VALIDATE -->
    <script src="{{ url('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script> 
    <script src="{{ url('assets/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script> 
    <script src="{{ url('assets/js/form-validation.js') }}" type="text/javascript"></script> 

    <script src="{{ url('assets/plugins/autosize/autosize.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>

    
    <script src="{{ url('assets/plugins/autosize/autosize.min.js') }}" type="text/javascript"></script>

    <script src="{{ url('assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/bootstrap3-wysihtml5/js/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/messenger/js/messenger.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/messenger/js/messenger-theme-future.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/messenger/js/messenger-theme-flat.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/messenger.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/jquery-ui/smoothness/jquery-ui.min.j') }}s" type="text/javascript"></script> 
    <script src="{{ url('assets/plugins/select2/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/datepicker/js/datepicker.js') }}" type="text/javascript"></script> 
    
    <!-- CORE TEMPLATE JS - START -->
    <script src="{{ url('assets/js/summernote.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/scripts.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/myscript.js') }}" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS - END -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#description-product').summernote({
                height: 250,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,
            });
            $('#note-product').summernote({
                height: 90,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,
            });
        });
    </script>
    @yield('script')
    <!-- General section box modal start -->
    <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog animated bounceInDown">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Section Settings</h4>
                </div>
                <div class="modal-body">

                    Body goes here...

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success" type="button">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
</body>

</html>