@extends('user.master')
@section('content')
    <div class="container main-container headerOffset">
        <div class="row">
            <div class="breadcrumbDiv col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="account.html">My Account</a></li>
                    <li class="active"> Order List</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <h1 class="section-title-inner"><span><i class="fa fa-list-alt"></i> Order Status </span></h1>
                <div class="row userInfo">
                    <div class="col-lg-12">
                        <h2 class="block-title-2"> Your Order Status </h2>
                    </div>
                    <div class="statusContent">
                        <div class="col-sm-12">
                            <div class=" statusTop">
                                <p><strong>Status:</strong> OnHold</p>
                                <p><strong>Order Date:</strong> Saturday, April 09,2015</p>
                                <p><strong>Order Number:</strong> #6469 </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="order-box">
                                <div class="order-box-header">
                                    Billing Address
                                </div>
                                <div class="order-box-content">
                                    <div class="address">
                                        <p><strong>TITLE </strong></p>
                                        <p><strong>Ruth F. Burns </strong></p>
                                        <div class="adr">
                                            4894 Burke Street<br>North Billerica, MA 01862
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="order-box">
                                <div class="order-box-header">
                                    Shipping Address
                                </div>
                                <div class="order-box-content">
                                    <div class="address">
                                        <p><strong>TITLE</strong></p>
                                        <p><strong>Ruth F. Burns </strong></p>
                                        <div class="adr">
                                            4894 Burke Street<br>North Billerica, MA 01862
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="clear: both"></div>
                        <div class="col-sm-6">
                            <div class="order-box">
                                <div class="order-box-header">
                                    Payment Method
                                </div>
                                <div class="order-box-content">
                                    <div class="address">
                                        <p>Payment via Master Card <span style="color: green" class="green"> <strong>(Paid)</strong> </span></p>
                                        <p><strong>Name Of card: </strong> Ruth F. Burns </p>
                                        <p><strong>Card Number: </strong> 00335 251 124 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="order-box">
                                <div class="order-box-header">
                                    Shipping Method
                                </div>
                                <div class="order-box-content">
                                    <div class="address">
                                        <p> via Post Air Mail <a title="tracking number" href="#">#4502</a></p>
                                        <p><strong>Ruth F. Burns </strong></p>
                                        <div class="adr">
                                            4894 Burke Street<br>North Billerica, MA 01862
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 clearfix">
                            <div class="order-box">
                                <div class="order-box-header">
                                    Order Items
                                </div>
                                <div class="order-box-content">
                                    <div class="table-responsive">
                                        <table class="order-details-cart">
                                            <tbody>
                                                @foreach($order_detail as $item)
                                                <tr class="cartProduct">
                                                    <td class="cartProductThumb" style="width:20%">
                                                        <div>
                                                            <a href="{{ route('ProductDetail',[$item->productID,changeTitle($item->belongsToProduct->productName)]) }}"> <img alt="img">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td style="width:40%">
                                                        <div class="miniCartDescription">
                                                            <h4><a href="{{ route('ProductDetail',[$item->productID,changeTitle($item->belongsToProduct->productName)]) }}"> TSHOP Tshirt DO9 </a></h4>
                                                            
                                                            <div class="price"><span> {{ number_format($item->price,'0',',','.') }} đ</span></div>
                                                        </div>
                                                    </td>
                                                    <td class="" style="width:10%"><a> X {{ $item->quantity }} </a></td>
                                                    <td class="" style="width:15%"><span> {{ number_format($item->price*$item->quantity,'0',',','.') }} đ </span></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 clearfix">
                        <ul class="pager">
                            <li class="previous pull-right">
                                <a href="index.html"> <i class="fa fa-home"></i> Go to Shop </a>
                            </li>
                            <li class="next pull-left"><a href="account.html"> ← Back to My Account</a></li>
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