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
                                <li>
                                    <a href="{{ route('checkout-one') }}">
                                        <i class="fa fa-map-marker "></i>
                                        <span> Địa chỉ</span>
                                    </a>
                                </li>
                                
                                <li><a href="{{ route('checkout-two') }}"><i class="fa fa-money  "> </i><span>Thanh toán</span> </a></li>
                                <li class="active"><a href="{{ route('checkout-three') }}"><i class="fa fa-check-square "> </i><span>Hóa đơn</span></a></li>
                            </ul>
                        </div>
                        <div class="w100 clearfix">
                            <div class="row userInfo">
                                <div class="col-lg-12">
                                    <h2 class="block-title-2"> Review Order </h2>
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                    <div class="cartContent w100 checkoutReview ">
                                        <table class="cartTable table-responsive" style="width:100%">
                                            <tbody>
                                                <tr class="CartProduct cartTableHeader">
                                                    <th style="width:15%">Sản phẩm </th>
                                                    <th class="checkoutReviewTdDetails"></th>
                                                    <th style="width:15%">Giá</th>
                                                    <th class="hidden-xs" style="width:5%">Số lượng</th>
                                                    <th class="hidden-xs" style="width:10%">Giảm giá</th>
                                                    <th style="width:15%">Tổng tiền</th>
                                                </tr>
                                                @foreach($content as $item)
                                                <tr class="CartProduct">
                                                    <td class="CartProductThumb">
                                                        <div>
                                                            <a href="{{ route('ProductDetail',[$item->id,changeTitle($item->name)]) }}"><img src="{{ url('images/product/'.$item->options['img']) }}"></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="CartDescription">
                                                            <h4><a href="{{ route('ProductDetail',[$item->id,changeTitle($item->name)]) }}">{{ $item->name }}</a></h4>
                                                            
                                                        </div>
                                                    </td>
                                                    <td class="delete">
                                                        <div class="price ">{{ number_format($item->price,'0',',','.') }} đ</div>
                                                    </td>
                                                    <td class="hidden-xs">{{ $item->qty }}</td>
                                                    <td class="hidden-xs">0</td>
                                                    <td class="price">{{ number_format($item->price*$item->qty,'0',',','.') }} đ</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="w100 costDetails">
                                        <div class="table-block" id="order-detail-content">
                                            <table class="std table" id="cart-summary">
                                                <tr>
                                                    <td>Tổng tiền sản phẩm</td>
                                                    <td class="price">{{ $total }} đ</td>
                                                </tr>
                                                <tr style="">
                                                    <td>Giao hàng</td>
                                                    <td class="price"><span class="success">Miễn phí giao hàng!</span></td>
                                                </tr>
                                                <tr class="cart-total-price ">
                                                    <td>Tổng tiền (chưa tính thuế)</td>
                                                    <td class="price">{{ $total }} đ</td>
                                                </tr>
                                                <tr>
                                                    <td>Thuế</td>
                                                    <td id="total-tax" class="price">0</td>
                                                </tr>
                                                <tr>
                                                    <td> Total</td>
                                                    <td id="total-price" class="price">{{ $total }} đ</td>
                                                </tr>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cartFooter w100">
                            <div class="box-footer">
                                <div class="pull-left">
                                    <a class="btn btn-default" href="{{ route('checkout-two') }}">
                                        <i class="fa fa-arrow-left"></i> &nbsp; Phương thức thanh toán </a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('thank-for-order') }}" class="btn btn-primary btn-small ">
                              Xác nhận hóa đơn &nbsp; <i class="fa fa-check"></i>
                              </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('user.block.total-cart')
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="gap"></div>
@endsection