@extends('admin.master')
@section('content')
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Đơn hàng</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>
                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i>Dashboard</a>
                            </li>
                            <li class="active">
                                <strong>Quản lý đơn hàng</strong>
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
                        <h2 class="title pull-left">Danh sách đơn hàng</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="fa fa-plus-circle" href=""></a>
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    @include('admin.notify.message')
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12  table-responsive">
                                <table id="example" class="display table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Khách hàng</th>
                                            <th>Số điện thoại</th>
                                            <th>Tổng tiền</th>
                                            <th>Địa chỉ</th>
                                            <th>Trạng thái</th>
                                            <th>Thanh toán</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $item)
                                        <tr>
                                            <td width="5%">{{ $item->id }}</td>
                                            <td>{{ $item->shipName }}</td>
                                            <td>{{ $item->shipPhone }}</td>
                                            <td>{{ number_format($item->totalPrice,0,',','.') }} đ</td>
                                            <td>
                                                {{ $item->shipAddress }}
                                                {{ $item->shipWard }}, 
                                                {{ $item->shipDistrict }},
                                                {{ $item->shipProvince }}
                                            </td>                                       
                                               
                                            <td>
                                                @if($item->isRead == false)
                                                    <span class="label label-success">New</span>
                                                @else
                                                    <span class="label label-info">old</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($item->isPaid == false)
                                                    <span class="label label-warning">Chưa thanh toán</span>
                                                @else
                                                    <span class="label label-info">Hoàn thành</span>
                                                @endif
                                            </td>
                                            
                                            <td width="30%" class="block">
                                                 <form action="{{ route('ChangeIsRead',[$item->id]) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT') }}
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                                <button type="button" class="btn btn-info">
                                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                </button>
                                                <form action="" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- MAIN CONTENT AREA ENDS -->
        </section>
    </section>
    
@endsection