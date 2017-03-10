@extends('user.master')
@section('content')
<div class="container main-container headerOffset">
        <div class="row">
            <div class="breadcrumbDiv col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('account-one') }}">Tài khoản của tôi</a></li>
                    <li class="active"> Danh sách đơn hàng</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <h1 class="section-title-inner"><span><i class="fa fa-list-alt"></i> Danh sách đơn hàng </span></h1>
                <div class="row userInfo">
                    <div class="col-lg-12">
                        <h2 class="block-title-2"> Danh sách đơn hàng của bạn </h2>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-xs-12 col-sm-12">
                        <table class="footable">
                            <thead>
                                <tr>
                                    <th data-class="expand" data-sort-initial="true"><span title="table sorted by this column on load">Order ID</span></th>
                                    <th data-hide="phone,tablet" data-sort-ignore="true">Sản phẩm</th>
                                    <th data-hide="phone,tablet" data-sort-ignore="true">Invoice</th>
                                    <th data-hide="phone,tablet"><strong>Phương thức thanh toán</strong></th>
                                    <th data-hide="phone,tablet"><strong></strong></th>
                                    <th data-hide="default"> Giá</th>
                                    <th data-hide="default" data-type="numeric"> Ngày</th>
                                    <th data-hide="phone" data-type="numeric"> Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order_lists as $order)
                                <tr>
                                    <td>#{{ $order->id }}</td>
                                    <td>5
                                        <small>Sản phẩm</small>
                                    </td>
                                    <td><a target="_blank">-</a></td>
                                    <td>{{ $order->belongsToPaymentMethod->name }}</td>
                                    <td><a href="{{ route('order-status',[$order->id]) }}" class="btn btn-primary btn-sm">view status</a></td>
                                    <td>{{ number_format($order->totalPrice,0,',','.') }} đ</td>
                                    <td data-value="78025368997">{{ $order->orderDate }}</td>
                                    <td data-value="3"><span class="label label-success">Done</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="clear:both"></div>
                    <div class="col-lg-12 clearfix">
                        <ul class="pager">
                            <li class="previous pull-right">
                                <a href="{{ route('home') }}"> <i class="fa fa-home"></i> Về trang chủ </a>
                            </li>
                            <li class="next pull-left"><a href="{{ route('account-one') }}"> &larr; Quay lại tài khoản</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5"></div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="gap"></div>
@endsection