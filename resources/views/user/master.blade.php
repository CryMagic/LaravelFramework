<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('user/assets/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('user/assets/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('user/assets/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.html">
    <link rel="shortcut icon" href="{{ url('user/assets/ico/favicon.png')}}">
    <title>ShopOnline</title>
    <link href="{{ url('user/assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('user/assets/css/skin-4.css')}}">
    <link href="{{ url('user/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ url('user/assets/css/select2.min.css')}}" rel="stylesheet">
</head>

<body>

    @include('user.block.login')
    @include('user.block.register')
    @include('user.block.header')
    

    @yield('content')

    @include('user.block.footer')


    <script src="{{ url('user/assets/js/jquery.min.js')}}"></script>
    <script src="{{ url('user/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('user/assets/js/jquery.cycle2.min.js')}}"></script>
    <script src="{{ url('user/assets/js/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript" src="{{ url('user/assets/js/jquery.parallax-1.1.js')}}"></script>
    <script type="text/javascript" src="{{ url('user/assets/js/helper-plugins/jquery.mousewheel.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('user/assets/js/jquery.mCustomScrollbar.js')}}"></script>
    <script type="text/javascript" src="{{ url('user/assets/plugins/icheck-1.x/icheck.min.js')}}"></script>
    <script src="{{ url('user/assets/js/grids.js')}}"></script>
    <script src="{{ url('user/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ url('user/assets/js/select2.min.js')}}"></script>
    <script src="{{ url('user/assets/js/bootstrap.touchspin.js')}}"></script>
    <script src="{{ url('user/assets/js/home.js')}}"></script>
    <script src="{{ url('user/assets/js/script.js')}}"></script>
    
    @include('user.block.quick-view')
</body>

</html>