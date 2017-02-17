@extends('admin.master')
@section('content')
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Hóa đơn</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i>Trang chủ</a>
                            </li>
                            <li>
                                <a href="{{ route('OrderList') }}">Hóa đơn</a>
                            </li>
                            <li class="active">
                                <strong>Xem chi tiết</strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
            <!-- MAIN CONTENT AREA STARTS -->

            <div class="col-lg-12">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title pull-left">Hóa đơn</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- start -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="invoice-head">
                                            <div class="col-xs-12 col-md-2 invoice-title">
                                                <h2 class="text-center bg-primary ">Hóa đơn</h2>
                                            </div>
                                            <div class="col-xs-12 col-md-3 invoice-head-info">
                                                <span class='text-muted'>
                                                    {{ $order->shipWard }}<br>
                                                    {{ $order->shipDistrict }}<br>
                                                    {{ $order->shipProvince }}<br>
                                                </span>
                                            </div>
                                            <div class="col-xs-12 col-md-3 invoice-head-info"><span class='text-muted'>Mã số hóa đơn #0{{$order->id}}<br>21st October 2014</span></div>
                                            <div class="col-xs-12 col-md-3 invoice-logo col-md-offset-1">
                                                <img src="{{ url('data/invoice/invoice-logo.png') }}" class="img-reponsive">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div><br>

                                    <div class="col-xs-6 invoice-infoblock pull-left">
                                        <h4>Khách hàng</h4>
                                        <address>
                                            <h3>{{ $order->shipName }}</h3>
                                            <span class='text-muted'>{{ $order->shipAddress }}</span>
                                        </address>
                                    </div>

                                    <div class="col-xs-6 invoice-infoblock text-right">
                                        <h4>Phương thức thanh toán:</h4>
                                        <address>
                                            <h3>Credit Card</h3>
                                            <span class='text-muted'>Visa ending **** 4242<br>
                                                {{ $order->shipEmail }}</span>
                                        </address>

                                        <div class="invoice-due">
                                            <h3 class="text-muted">Tổng tiền:</h3> &nbsp;
                                            <h2 class="text-primary">{{  number_format($order->totalPrice,0,',','.') }} Đ</h2>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div><br>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h3>Chi tiết hóa đơn</h3><br>
                                        <div class="table-responsive">
                                            <table class="table table-hover invoice-table">
                                                <thead>
                                                    <tr>
                                                        <td>
                                                            <h4>Sản phẩm</h4>
                                                        </td>
                                                        <td class="text-center">
                                                            <h4>Giá</h4>
                                                        </td>
                                                        <td class="text-center">
                                                            <h4>Số lượng</h4>
                                                        </td>
                                                        <td class="text-right">
                                                            <h4>Tổng tiền</h4>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                    <tr>
                                                        <td>Web Design</td>
                                                        <td class="text-center">$10.99</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">$10.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Logo Design</td>
                                                        <td class="text-center">$20.00</td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-right">$60.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Web Update</td>
                                                        <td class="text-center">$600.00</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">$600.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hosting Service</td>
                                                        <td class="text-center">$1000.00</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">$1000.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="thick-line"></td>
                                                        <td class="thick-line"></td>
                                                        <td class="thick-line text-center">
                                                            <h4>Subtotal</h4>
                                                        </td>
                                                        <td class="thick-line text-right">
                                                            <h4>$1670.99</h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-center">
                                                            <h4>Shipping</h4>
                                                        </td>
                                                        <td class="no-line text-right">
                                                            <h4>$15</h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-center">
                                                            <h4>VAT</h4>
                                                        </td>
                                                        <td class="no-line text-right">
                                                            <h4>$150.23</h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-center">
                                                            <h4>Total</h4>
                                                        </td>
                                                        <td class="no-line text-right">
                                                            <h3 style="margin:0px;" class="text-primary">$1985.99</h3>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>



                                <div class="clearfix"></div><br>

                                <div class="row">
                                    <div class="col-xs-12 text-right">
                                        <a href="#" target="_blank" class="btn btn-purple btn-md"><i class="fa fa-print"></i> &nbsp; Print </a>
                                        <a href="#" target="_blank" class="btn btn-accent btn-md"><i class="fa fa-send"></i> &nbsp; Proceed to payment </a>
                                    </div>
                                </div>
                                <!-- end -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- MAIN CONTENT AREA ENDS -->
        </section>
    </section>
@endsection