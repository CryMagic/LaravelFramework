@extends('user.master')
@section('content')
<div class="container main-container headerOffset">
        <div class="row">
            <div class="breadcrumbDiv col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="active"> Xác thực tài khoản</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <h1 class="section-title-inner"><span><i class="fa fa-lock"></i> Xác thực tài khoản</span></h1>
                <div class="row userInfo">
                    @include('user.block.notify')
                    <div class="col-xs-12 col-sm-6">
                        
                        <h2 class="block-title-2"> Đăng ký tài khoản </h2>
                        <form role="form" class="regForm" action="{{ route('user.register') }}" method="POST">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label>Họ</label>
                                <input type="text" class="form-control" placeholder="Nhập Họ" name="FirstName">
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input type="text" class="form-control" placeholder="Nhập Tên" name="LastName">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter email" name="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="Password">
                            </div>
                            <div class="error">
                            </div>
                            <button type="submit" class="btn  btn-primary"><i class="fa fa-user"></i> Đăng ký
                        </button>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h2 class="block-title-2"><span>Tồn tại một tài khoản?</span></h2>
                        <form role="form" class="logForm " method="POST" action="{{ route('user.login') }}">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" placeholder="Enter email" name="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="Password">
                            </div>
                            <div class="checkbox">
                                <label>
                           <input type="checkbox" name="checkbox">
                           Nhớ mật khẩu </label>
                            </div>
                            <div class="form-group">
                                <p><a title="Recover your forgotten password" href="{{ route('forget-password') }}">Quên mật khẩu? </a>
                                </p>
                            </div>
                            <button class="btn btn-primary" type="submit"><i class="fa fa-sign-in"></i> Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5"></div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="gap"></div>
@endsection
