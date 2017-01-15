@extends('admin.master')
@section('content')
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Danh mục sản phẩm</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>
                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="eco-categories.html">Product Categories</a>
                            </li>
                            <li class="active">
                                <strong>Product Categories</strong>
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
                        <h2 class="title pull-left">Danh sách danh mục sản phẩm</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="fa fa-plus-circle" data-toggle="modal" href="#add-category"></a>
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
                                            <th>Tên danh mục</th>
                                            <th>Hình ảnh</th>
                                            <th>Trạng thái</th>
                                            <th>Action</th>
                                            <th>Sản phẩm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $item)
                                        <tr>
                                            <td width="5%">{{ $item->id }}</td>
                                            <td>{{ $item->cateName }}</td>
                                            <td width="13%">
                                                <img src="{{ Storage::disk('public')->url($item->picture) }}" class="img-rounded">
                                            </td>
                                            <td>
                                                @if($item->isDisplay == 1)
                                                    <span class="label label-success"><i class="fa fa-check-circle"></i>Hiển thị</span>
                                                @else
                                                    <span class="label label-danger"><i class="fa fa-ban"></i>Không</span>
                                                @endif
                                            </td>
                                            <td width="15%">
                                                <a type="button" class="btn btn-info" data-toggle="modal" href="#edit-category{{ $item->id }}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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

    <div class="modal" id="add-category" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog animated fadeInDown">
            <div class="modal-content">
                <form id="msg_validate" method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data" novalidate="novalidate">
                {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Thêm danh mục sản phẩm</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="form-label">Tên danh mục</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="CateName" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Mô tả</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="Description" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Hình ảnh</label>
                                    <div class="controls">
                                        <input type="file" class="form-control" name="Picture" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" id="square-radio-1" class="skin-square-red" value="1" name="isDisplay">
                                    <label class="iradio-label form-label" for="square-radio-1">Hiển thị</label>

                                    <input type="radio" id="square-radio-1" class="skin-square-red" value="0" name="isDisplay" checked>
                                    <label class="iradio-label form-label" for="square-radio-1">Không</label>
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
    @foreach($category as $item)
    <div class="modal" id="edit-category{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog animated fadeInDown">
            <div class="modal-content">
                <form id="msg_validate" method="POST" action="{{ route('category.update',[$item->id]) }}" enctype="multipart/form-data" novalidate="novalidate">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Thêm danh mục sản phẩm</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="form-label">Tên danh mục</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="CateName" value="{{ $item->cateName }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Mô tả</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="Description" value="{{ $item->description }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Hình ảnh</label>
                                    <div class="controls">

                                        <input type="file" class="form-control" name="Picture" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" id="square-radio-1" class="skin-square-red" value="1"
                                    name="isDisplay"
                                    @if($item->isDisplay == 1)
                                        Checked
                                    @endif
                                    >
                                    <label class="iradio-label form-label" for="square-radio-1">Hiển thị</label>

                                    <input type="radio" id="square-radio-1" class="skin-square-red"
                                    value="0" name="isDisplay"
                                    @if($item->isDisplay == 0)
                                        Checked
                                    @endif
                                     >
                                    <label class="iradio-label form-label" for="square-radio-1">Không</label>
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