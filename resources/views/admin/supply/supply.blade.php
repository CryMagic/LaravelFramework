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
                                            <th>Địa chỉ</th>
                                            <th>Quốc gia</th>
                                            <th>HomePage</th>
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
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->country }}</td>
                                            <td>{{ $item->homePage }}</td>
                                            <td>
                                                <form action="{{ route('category.destroy',[$item->id] ) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div class="btn-group" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" href="#edit-supply{{ $item->id }}">
                                                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td width="5%">121</td>
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
    
    @foreach($supplies as $item)
    <div class="modal" id="edit-supply{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog animated fadeInDown">
            <div class="modal-content">
                <form id="msg_validate" method="POST" action="{{ route('supply.update',[$item->id]) }}" novalidate="novalidate">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Chỉnh sửa nhà cung cấp</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="form-label">Tên công ty</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="CompanyName" value="{{ $item->companyName }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <div class="controls">
                                        <input type="email" class="form-control" name="EmailContact" value="{{ $item->emailContact }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Số điện thoại</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="PhoneContact" value="{{ $item->phoneContact }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Địa chỉ</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="Address" value="{{ $item->address }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Quốc gia</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="Country" value="{{ $item->country }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Home Page</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="HomePage" value="{{ $item->homePage }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Đóng</button>
                        <button type="submit" class="btn btn-success">Lưu lại</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
@endsection