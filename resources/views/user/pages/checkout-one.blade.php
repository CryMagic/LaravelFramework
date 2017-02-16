@extends('user.master')
@section('content')
<div class="container main-container headerOffset">
        <div class="row">
            <div class="breadcrumbDiv col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li><a href="{{ route('cart') }}">Giỏ hàng</a></li>
                    <li class="active"> Thanh toán</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs">
                <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Thanh toán</span></h1>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs">
                <h4 class="caps"><a href="{{ route('home') }}"><i class="fa fa-chevron-left"></i> Quay lại Shop </a></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="row userInfo">
                    <div class="col-xs-12 col-sm-12">
                        <div class="w100 clearfix">
                            <ul class="orderStep orderStepLook2">
                                <li class="active">
                                    <a href="{{ route('checkout-one') }}"> <i class="fa fa-map-marker "></i> <span> Địa chỉ</span>
                                    </a>
                                </li>
                                <li><a href="{{ route('checkout-two') }}"><i class="fa fa-money  "> </i><span>Thanh toán</span> </a></li>
                                <li><a href="{{ route('checkout-three') }}"><i class="fa fa-check-square "> </i><span>Hóa đơn</span></a></li>
                            </ul>
                        </div>
                        <form action="{{ route('post-checkout-one') }}" method="post">
                        {{ csrf_field() }}
                            <div class="w100 clearfix">
                                <div class="row userInfo">
                                    <div class="col-lg-12">
                                        <h2 class="block-title-2"> Điền đẩy đủ thông tin bên dưới </h2>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group required">
                                            <label for="InputLastName">Họ tên khách hàng <sup>*</sup> </label>
                                            <input required type="text" class="form-control" value="{{ $user->firstname }} {{ $user->lastname }}" name="ShipName" placeholder="Họ tên khách hàng">
                                        </div>
                                        <div class="form-group">
                                            <label for="InputEmail">E-mail </label>
                                            <input type="text" class="form-control" value="{{ $user->email }}" name="ShipEmail" placeholder="Địa chỉ email">
                                        </div>
                                        <div class="form-group">
                                            <label for="InputCompany">Số điện thoại </label>
                                            <input type="text" class="form-control" name="ShipPhone" value="{{ $user->phone }}" placeholder="Số điện thoại khách hàng">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group required">
                                            <label for="InputAddress">Tỉnh / Thành Phố <sup>*</sup> </label>
                                            <input required type="text" class="form-control" name="ShipProvince" value="{{ $name_province }}" placeholder="Tỉnh/Thành phố">
                                        </div>
                                        <div class="form-group required">
                                            <label for="InputAddress">Quận / Huyện <sup>*</sup> </label>
                                            <input required type="text" class="form-control" name="ShipDistrict" value="{{ $name_district }}" placeholder="Quận/Huyện">
                                        </div>
                                        <div class="form-group required">
                                            <label for="InputAddress">Xã / Phường <sup>*</sup> </label>
                                            <input required type="text" class="form-control" name="ShipWard" value="{{ $name_ward }}" placeholder="Xã/Phường">
                                        </div>
                                        <div class="form-group">
                                            <label for="InputCompany">Địa chỉ </label>
                                            <input type="text" class="form-control" name="ShipAddress" placeholder="Địa chỉ khách hàng">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="cartFooter w100">
                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a class="btn btn-default" href="{{ route('home') }}"> <i class="fa fa-arrow-left"></i> &nbsp; Quay lại Shop </a>
                                    </div>
                                    <div class="pull-right"><button class="btn btn-primary btn-small " type="submit">
                                Phương thức thanh toán &nbsp; <i class="fa fa-arrow-circle-right"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('user.block.total-cart')
            </div>
        <div style="clear:both"></div>
    </div>
    <div class="gap"></div>
@endsection