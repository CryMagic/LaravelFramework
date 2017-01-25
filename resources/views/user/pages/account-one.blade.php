@extends('user.master')
@section('content')
    <div class="container main-container headerOffset">
        <div class="row">
            <div class="breadcrumbDiv col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active"> My account</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <h1 class="section-title-inner"><span><i class="fa fa-unlock-alt"></i> My account </span></h1>
                <div class="row userInfo">
                    <div class="col-xs-12 col-sm-12">
                        <h2 class="block-title-2"><span>Chào bạn đã đến với trang cá nhân của bạn. Ở đây bạn có thể quản lý thông tin cá nhân và lịch sử các đơn đặt hàng.</span>
                        </h2>
                        <ul class="myAccountList row">
                            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                <div class="thumbnail equalheight"><a title="Orders" href="{{ route('order-list') }}"><i class="fa fa-calendar"></i> Lịch sử đặt hàng </a></div>
                            </li>
                            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                <div class="thumbnail equalheight"><a title="My addresses" href="{{ route('my-address') }}"><i class="fa fa-map-marker"></i> Địa chỉ</a></div>
                            </li>
                            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                <div class="thumbnail equalheight">
                                    <a title="Add  address" href="{{ route('add-address') }}"> <i class="fa fa-edit"> </i> Thêm địa chỉ mới</a>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                <div class="thumbnail equalheight">
                                <a title="Personal information" href="{{ route('user-information') }}"><i class="fa fa-cog"></i>
                              Thông tin người dùng</a>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                <div class="thumbnail equalheight"><a title="My wishlists" href="{{ route('wishlist') }}"><i class="fa fa-heart"></i> Sản phẩm yêu thích </a></div>
                            </li>
                        </ul>
                        <div class="clear clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5"></div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="gap"></div>
@endsection