@extends('admin.master')
@section('content')
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Sản phẩm</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>
                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html"><i class="fa fa-home"></i>Trang chủ</a>
                            </li>
                            <li class="active">
                                <strong>Quản lý sản phẩm</strong>
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
                        <h2 class="title pull-left">Danh sách sản phẩm</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="fa fa-plus-circle" href="{{ route('product.create') }}"></a>
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    @include('admin.notify.message')
                    @include('admin.notify.message-success')
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12  table-responsive">
                                <table id="example" class="display table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Thể loại</th>
                                            <th>Giá</th>
                                            <th>Tồn Kho</th>
                                            <th>Tình Trạng</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $item)
                                        <tr>
                                            <td width="5%">{{ $item->id }}</td>
                                            <td>{{ $item->productName }}</td>
                                            <td>
                                                @if($item->picture != null)
                                                    <img src="{{ url('images/product/'.$item->picture) }}" class="img-rounded">
                                                @else
                                                    <img src="{{ url('data/product_icon.png') }}" class="img-rounded">
                                                @endif
                                            </td>
                                            <td>{{ $item->categories->cateName }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->inStock }}</td>
                                            <td>{{ $item->isContinue ? 'Còn bán':'Ngừng kinh doanh' }}</td>
                                            <td>
                                                <form action="{{ route('product.destroy',[$item->id] ) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div class="btn-group" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" href="#edit-shipper{{ $item->id }}">
                                                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-success" id="btnBlock{{ $item->id }}">
                                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
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