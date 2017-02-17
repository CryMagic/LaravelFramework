@extends('user.master')
@section('content')
    <div class="container main-container headerOffset">
        <div class="row">
            <div class="breadcrumbDiv col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="category.html">Category</a></li>
                    <li class="active"> Order</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 ">
                <div class="row userInfo">
                    <div class="thanxContent text-center">
                        <h1> Thank you for your order <a href="order-status.html">#6469</a></h1>
                        <h4>we'll let you know when your items are on their way</h4>
                    </div>
                    <div class="col-lg-7 col-center">
                        <h4></h4>
                        <div class="cartContent table-responsive  w100">
                            <table style="width:100%" class="cartTable cartTableBorder">
                                <tbody>
                                    <tr class="CartProduct  cartTableHeader">
                                        <td colspan="2"> Items to be Shipped</td>
                                        <td style="width:15%"></td>
                                    </tr>
                                    @foreach(Cart::content() as $item)
                                    <tr class="CartProduct">
                                        <td class="CartProductThumb">
                                            <div>
                                                <a href="{{ route('ProductDetail',[$item->id,changeTitle($item->name)]) }}"><img alt="img" src="{{ url('images/product/',$item->options['img']) }}"></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="CartDescription">
                                                <h4><a href="{{ route('ProductDetail',[$item->id,changeTitle($item->name)]) }}">{{ $item->name }} </a></h4>
                                                
                                                <div class="price"><span>{{ number_format($item->price,'0',',','.') }} đ</span></div>
                                            </div>
                                        </td>
                                        <td class="price">{{ number_format($item->price*$item->qty,'0',',','.') }} đ</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="gap"></div>
@endsection