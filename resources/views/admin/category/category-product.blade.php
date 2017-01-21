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
                    @include('admin.notify.message')
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12  table-responsive">
                                <table id="example" class="table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên danh mục</th>
                                            <th>Hình ảnh</th>
                                            <th>Danh mục cha</th>
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
                                                @if($item->picture != null)
                                                    <img src="{{ url('images/category/'.$item->picture) }}" class="img-rounded">
                                                @else
                                                    <img src="{{ url('data/product_icon.png') }}" class="img-rounded">
                                                @endif
                                            </td>
                                            <td>
                                                @if($item->parent == 0)
                                                    None
                                                @else
                                                    @foreach($category as $option)
                                                        @if($item->parent == $option->id)
                                                            {{ $option->cateName }}
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                <span style="cursor:pointer" id="isDisplay{{$item->id}}" data-id="{{$item->id}}" class="label {{$item->isDisplay ? 'label-success':'label-danger'}}">
                                                    <i id="{{ $item->id }}" class="fa {{ $item->isDispplay ? 'fa-ban':'fa-check-circle' }}"></i>   
                                                </span>
                                            </td>
                                            <td>
                                                <form action="{{ route('category.destroy',[$item->id] ) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div class="btn-group" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" href="#edit-category{{ $item->id }}">
                                                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td width="5%">
                                                <?php $i = 0; ?>
                                                @foreach($products as $product)
                                                    
                                                    @if($item->id == $product->cateID)
                                                        <?php $i++; ?>
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
    @include('admin.category.category-product-add')
    
    @include('admin.category.category-product-edit')
@endsection