@extends('admin.master')
@section('content')
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Dashboard</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- MAIN CONTENT AREA STARTS -->


        <div class="col-xs-12">
            <section class="box nobox ">
                <div class="content-body">


                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="r1_graph1 db_box db_box_large">
                                <span class='bold'>68.95%</span>
                                <span class='pull-right'><small>New/Repeating Users</small></span>
                                <div class="clearfix"></div>
                                <span class="db_dynamicbar">Loading...</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="r1_graph2 db_box db_box_large">
                                <span class='bold'>2332</span>
                                <span class='pull-right'><small>Links Shared</small></span>
                                <div class="clearfix"></div>
                                <span class="db_linesparkline">Loading...</span>
                            </div>

                        </div>

                        <div class="col-md-4 hidden-sm col-sm-12 col-xs-12">

                            <div class="r1_graph1 db_box db_box_large">
                                <span class='bold'>67/98</span>
                                <span class='pull-right'><small>Total / Unique visitors</small></span>
                                <div class="clearfix"></div>
                                <span class="db_compositebar">Loading...</span>
                            </div>
                        </div>

                    </div>
                    <!-- End .row -->

                    <div class="row">

                        <div class="col-xs-12">
                            <div class="r1_maingraph db_box">
                                <span class='pull-left'>
            <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>Page Views</small>
            &nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;
            <small>Unique Visitors</small>
        </span>
                                <div id="db_morris_bar_graph" style="height:auto;width:100%;"></div>
                            </div>
                        </div>


                    </div>
                    <!-- End .row -->

                </div>
            </section>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="row">
                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Người dùng mới</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:60%">Tài khoản</th>
                                        <th style="width:30%">Ngày tạo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($new_user as $item_user)    
                                    <tr>
                                        <td>{{ $item_user->firstname }} {{ $item_user->lastname }}</td>
                                        <td><span>{{ $item_user->created_at->diffForHumans() }}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                    </section>

                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="row">
                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Nhà cung cấp mới</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:60%">Tên</th>
                                        <th style="width:30%">Ngày tạo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($new_supply as $item_supply)
                                    <tr>
                                        <td>{{ $item_supply->companyName }}</td>
                                        <td><span>{{ $item_supply->created_at->diffForHumans() }}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                    </section>

                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-12">
            <div class="row">
                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Sản phẩm mới</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th style="width:20%">Giá</th>
                                        <th style="width:30%">Ngày tạo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($new_product as $item_product)
                                    <tr>
                                        <td>{{ $item_product->productName }}</td>
                                        <td>{{ number_format($item_product->price)}} đ</td>
                                        <td><span>{{ $item_product->created_at->diffForHumans() }}</span></td>
                                    </tr>                                
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                    </section>

                </div>
            </div>
        </div>
        <!-- MAIN CONTENT AREA ENDS -->
    </section>
</section>
@endsection
@section('script')
    
    <script src="{{ url('assets/plugins/morris-chart/js/morris.min.js') }}" type="text/javascript"></script>
    <script>
        window.jQuery || document.write('<script src="{{ url('assets/js/jquery-1.11.2.min.js') }}"><\/script>');
    </script>
    <script src="{{ url('assets/js/eco-dashboard.js') }}" type="text/javascript"></script>
@endsection