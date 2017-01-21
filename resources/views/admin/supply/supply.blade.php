@extends('admin.master')
@section('content')
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Nhà cung cấp</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>
                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html"><i class="fa fa-home"></i>Trang chủ</a>
                            </li>
                            <li class="active">
                                <strong>Nhà cung cấp</strong>
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
                        <h2 class="title pull-left">Danh sách nhà cung cấp</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="fa fa-plus-circle" data-toggle="modal" href="#add-supply"></a>
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
                                            <th>Công ty</th>
                                            <th>E-mail</th>
                                            <th>Số điện thoại</th>
                                            <th>Quốc gia</th>
                                            <th>Action</th>
                                            <th>Sản phẩm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($supplies as $item)
                                        <tr>
                                            <td width="5%">{{ $item->id }}</td>
                                            <td>{{ $item->companyName }}</td>
                                            <td>{{ $item->emailContact }}</td>
                                            <td>{{ $item->phoneContact }}</td>
                                            <td>{{ $item->country }}</td>
                                            <td width="20%">
                                                <form action="{{ route('supply.destroy',[$item->id] ) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div class="btn-group" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" href="#edit-supply{{ $item->id }}">
                                                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" href="#view-supply{{ $item->id }}">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td width="5%">
                                                <?php $i=0; ?>
                                                @foreach($products as $product)
                                                    @if($item->id == $product->supplierID)
                                                        <?php $i++ ;?>
                                                    @endif
                                                @endforeach
                                                {{ $i }}
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
    @include('admin.supply.supply-add')
    
    @include('admin.supply.supply-edit')

    @include('admin.supply.supply-view')
    
@endsection