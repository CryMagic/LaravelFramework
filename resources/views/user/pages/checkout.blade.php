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
    <div class="col-lg-9 col-md-9 col-sm-7">
        <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> THANH TOÁN</span></h1>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
        <h4 class="caps"><a href="{{ route('home') }}"><i class="fa fa-chevron-left"></i> Quay lại Shop </a></h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="row userInfo">
            <div class="col-xs-12 col-sm-12">
                <div class="w100 clearfix">
                    <div class="row userInfo">
                        <div style="clear: both"></div>
                        <div class="onepage-checkout col-lg-12">
                        <form action="{{ route('post.checkout') }}" method="POST">
                        {{ csrf_field() }}
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#BillingInformation" aria-expanded="true" aria-controls="BillingInformation">
                                            Thông tin người nhận
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="BillingInformation" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="BillingInformation">
                                        <div class="panel-body">
                                            <div style="display:inline-block">
                                                <label class="radio inline">
                                                    <input id="exisitingAddress" type="radio" checked value="option1" name="add"> Sử dụng địa chỉ đã đăng ký
                                                </label>&nbsp;&nbsp;
                                                <label class="radio inline">
                                                    <input id="newAddress" type="radio" value="option2" name="add">
                                                    Đăng ký địa chỉ mới
                                                </label>
                                            </div>
                                            <hr>
                                            <div style="clear: both"></div>
                                            <div id="exisitingAddressBox" class="collapse in">
                                                <div class="form-group uppercase"><strong>Chọn địa chỉ giao hàng</strong></div>
                                                
                                                <div class="form-group">
                                                    <label for="InputPhone">Địa chỉ </label>
                                                    <input type="text" class="form-control" name="shipAddress" placeholder="Địa chỉ">
                                                </div>
                                            
                                            </div>
                                            <div id="newBillingAddressBox" class="collapse">
                                                <div class="form-group uppercase"><strong>Địa chỉ mới</strong></div>
                                                
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="InputName">Họ tên khách hàng <sup>*</sup> </label>
                                                            <input type="text" class="form-control" name="shipName" placeholder="Họ tên khách hàng (ex: Trần Quốc Thiên)">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="InputEmail">Email </label>
                                                            <input type="text" class="form-control" name="shipEmail" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="InputPhone">Số điện thoại </label>
                                                            <input type="text" class="form-control" name="shipPhone" placeholder="Số điện thoại">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        
                                                        <div class="form-group">
                                                            <label>Tỉnh/Thành Phố</label>
                                                            <select name="shipProvince" class="form-control">
                                                                <option>Quảng Ngãi</option>
                                                                <option>Phú Yên</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Quận/Huyện</label>
                                                            <select name="shipDistrict" class="form-control">
                                                                <option>Huyện Đức Phổ</option>
                                                                <option>Thị Trấn Đức Phổ</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tỉnh/Thành Phố</label>
                                                            <select name="shipWard" class="form-control">
                                                                <option>Phổ Châu</option>
                                                                <option>Phổ Thạnh</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="InputPhone">Địa chỉ </label>
                                                            <input type="text" class="form-control" name="shipAddress" placeholder="Địa chỉ">
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#Paymentmethod" aria-expanded="false" aria-controls="Paymentmethod">
                                                Phương thức thanh toán
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="Paymentmethod" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Paymentmethod">
                                        <div class="panel-body">
                                            <div class="onepage-payment">
                                                @foreach($payment_methods as $item)
                                                <div class="payment-method">
                                                    
                                                    <label class="radio-inline" for="paypal">
                                                        <input name="PaymentMethod" value="{{ $item->id }}" type="radio">
                                                        {{ $item->name }}
                                                    </label>
                                                  
                                                </div>
                                                @endforeach
                                                <div class="form-group">
                                                    <label for="InputName">Thông tin thêm <sup>*</sup> </label>
                                                    <textarea class="form-control" name="Note"></textarea>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#ConfirmOrder" aria-expanded="false" aria-controls="Paymentmethod">
                                                Xác nhận đơn hàng
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="ConfirmOrder" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ConfirmOrder">
                                        <div class="panel-body">
                                             <div class="w100 clearfix">
                                                <div class="row userInfo">
                                                    <div class="col-lg-12">
                                                        <h2 class="block-title-2"> Xem lại đơn hàng </h2>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <div class="cartContent w100 checkoutReview ">
                                                            <table class="cartTable table-responsive" style="width:100%">
                                                                <tbody>
                                                                    <tr class="CartProduct cartTableHeader">
                                                                        <th style="width:15%"> Sản phẩm</th>
                                                                        <th class="checkoutReviewTdDetails">Hình ảnh</th>
                                                                        <th style="width:10%">Giá</th>
                                                                        <th class="hidden-xs" style="width:5%">Số lượng</th>
                                                                        <th class="hidden-xs" style="width:10%">Giảm giá</th>
                                                                        <th style="width:15%">Tổng tiền</th>
                                                                    </tr>
                                                                    @foreach(Cart::content() as $item)
                                                                    <tr class="CartProduct">
                                                                        <td class="CartProductThumb">
                                                                            <div>
                                                                                <a href="{{ route('ProductDetail',[$item->id,changeTitle($item->alias)]) }}"><img src="{{url('images/product/',$item->options['img'])}}"></a>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="CartDescription">
                                                                 
                                                                                <h4><a href="{{ route('ProductDetail',[$item->id,changeTitle($item->alias)]) }}">{{ $item->name }} </a></h4>
                                                                                
                                                                            </div>
                                                                        </td>
                                                                        <td class="delete">
                                                                            <div class="price ">{{ number_format($item->price,0,',','.') }} đ</div>
                                                                        </td>
                                                                        <td class="hidden-xs">{{ $item->qty }}</td>
                                                                        <td class="hidden-xs">0</td>
                                                                        <td class="price">{{ number_format($item->price*$item->qty,0,',','.') }} đ</td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="w100 costDetails">
                                                            <div class="table-block" id="order-detail-content">
                                                                <table class="std table" id="cart-summary">
                                                                    <tr>
                                                                        <td>Giá trị sản phẩm</td>
                                                                        <td class="price">{{ Cart::total(00,",",".") }} đ</td>
                                                                    </tr>
                                                                    <tr style="">
                                                                        <td>Giao hàng</td>
                                                                        <td class="price"><span class="success">Miễn phí giao hàng!</span></td>
                                                                    </tr>
                                                                    <tr class="cart-total-price ">
                                                                        <td>Tổng tiền(Chưa tính thuế)</td>
                                                                        <td class="price">{{ Cart::total(00,",",".") }} đ</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tiền thuế</td>
                                                                        <td id="total-tax" class="price">0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> Tổng cộng</td>
                                                                        <td id="total-price" class="price">{{ Cart::total(00,",",".") }} đ</td>
                                                                    </tr>
                                                                    <tbody></tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="cartFooter">
                                                    <div class="box-footer">
                                                        <div class="pull-left">
                                                            <a class="btn btn-default" href="{{ route('home') }}">
                                                                <i class="fa fa-arrow-left"></i> &nbsp; Quay lại trang chủ </a>
                                                        </div>
                                                        <div class="pull-right">
                                                            <button type="submit" class="btn btn-primary btn-small ">
                                                            Xác nhận đơn hàng &nbsp; <i class="fa fa-check"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
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
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $('input#newAddress').on('ifChanged', function(event) {
                //alert(event.type + ' callback');
                $('#newBillingAddressBox').collapse("show");
                $('#exisitingAddressBox').collapse("hide");

            });

            $('input#exisitingAddress').on('ifChanged', function(event) {
                //alert(event.type + ' callback');
                $('#newBillingAddressBox').collapse("hide");
                $('#exisitingAddressBox').collapse("show");
            });


            $('input#newShippingAddress').on('ifChanged', function(event) {
                //alert(event.type + ' callback');
                $('#newShippingAddressBox').collapse("show");

            });

            $('input#existingShippingAddress').on('ifChanged', function(event) {
                //alert(event.type + ' callback');
                $('#newShippingAddressBox').collapse("hide");

            });


            $('input#creditCard').on('ifChanged', function(event) {
                //alert(event.type + ' callback');
                $('#creditCardCollapse').collapse("toggle");

            });

            $('input#CashOnDelivery').on('ifChanged', function(event) {
                //alert(event.type + ' callback');
                $('#CashOnDeliveryCollapse').collapse("toggle");

            });


        });
    </script>
@endsection