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