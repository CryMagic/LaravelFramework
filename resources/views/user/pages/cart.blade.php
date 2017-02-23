@extends('user.master')
@section('content')
<div class="container main-container headerOffset">
        <div class="row">
            <div class="breadcrumbDiv col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="active">Giỏ hàng</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs">
                <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Giỏ hàng </span></h1>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs">
                <h4 class="caps"><a href="{{ route('home') }}"><i class="fa fa-chevron-left"></i> Quay lại Shop </a></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <div class="row userInfo">
                    <div class="col-xs-12 col-sm-12">
                        <div class="cartContent w100">
                            <table class="cartTable table-responsive" style="width:100%">
                                <tbody>
                                    <tr class="CartProduct cartTableHeader">
                                        <td style="width:15%"> Hình ảnh</td>
                                        <td style="width:40%"> Sản phẩm</td>
                                        <td style="width:10%" class="delete">&nbsp;</td>
                                        <td style="width:10%">Số lượng</td>
                                        <td style="width:10%">Giảm giá</td>
                                        <td style="width:15%">Tiền</td>
                                    </tr>
                                    @if($total == 0)
                                    <tr><h2 class="text-center">Chưa có sản phẩm</h2></tr>
                                    @endif
                                    @foreach($content as $item)
                                    <tr class="CartProduct">
                                        <td class="CartProductThumb">
                                            <div>
                                                <a href=""><img src="{{ url('images/product/'.$item->options['img']) }}" alt="img"></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="CartDescription">
                                                <h4><a href="{{ route('ProductDetail',[$item->id,changeTitle($item->name)]) }}">{{ $item->name }} </a></h4>
                                                <div class="price"><span>{{ number_format($item->price,'0',',','.') }} đ</span></div>
                                            </div>
                                        </td>
                                        <td class="delete">
                                            <a title="Delete" href="{{ route('RemoveCart',['id'=>$item->rowId]) }}"> <i class="glyphicon glyphicon-trash fa-2x"></i></a>
                                        </td>
                                        <td><input class="quanitySniper" type="text" value="{{ $item->qty }}" name="quanitySniper"></td>
                                        <td>0</td>
                                        <td class="price">{{ number_format($item->price*$item->qty,'0',',','.') }} đ</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="cartFooter w100">
                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="{{ route('home') }}" class="btn btn-default"> <i class="fa fa-arrow-left"></i> &nbsp; Tiếp tục mua hàng </a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-undo"></i> &nbsp; Cập nhật giỏ hàng
                              </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
                <div class="contentBox">
                    <div class="w100 costDetails">
                        <div class="table-block" id="order-detail-content">
                            <a class="btn btn-primary btn-lg btn-block " title="checkout" href="{{ route('checkout') }}" style="margin-bottom:20px"> Thanh Toán &nbsp; <i class="fa fa-arrow-right"></i> </a>
                            <div class="w100 cartMiniTable">
                                <table id="cart-summary" class="std table">
                                    <tbody>
                                        <tr>
                                            <td>Tổng tiền sản phẩm</td>
                                            <td class="price">{{ $total }} đ</td>
                                        </tr>
                                        <tr style="">
                                            <td>Giao hàng</td>
                                            <td class="price"><span class="success">Miễn phí giao hàng!</span></td>
                                        </tr>
                                        <tr class="cart-total-price ">
                                            <td>Tổng tiền (Chưa thuế)</td>
                                            <td class="price">{{ $total }} đ</td>
                                        </tr>
                                        <tr>
                                            <td>Thuế</td>
                                            <td class="price" id="total-tax">0 đ</td>
                                        </tr>
                                        <tr>
                                            <td> Tổng tiền</td>
                                            <td class=" site-color" id="total-price">{{ $total }} đ</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-append couponForm">
                                                    <input class="col-lg-8" id="appendedInputButton" type="text" placeholder="Coupon code">
                                                    <button class="col-lg-4 btn btn-success" type="button">Apply!</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="gap"></div>
@endsection