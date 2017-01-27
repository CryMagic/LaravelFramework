@extends('user.master')
@section('content')
    <div class="container main-container headerOffset">
        <div class="row">
            <div class="breadcrumbDiv col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">{{ $category->cateName }}</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="panel-group" id="accordionNo">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapseCategory" class="collapseWill active ">
                                    <span class="pull-left"> <i class="fa fa-caret-right"></i></span> Danh mục sản phẩm </a>
                            </h4>
                        </div>
                        <div id="collapseCategory" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked tree">
                                    <?php $i = 0; ?>
                                    <?php $count = 0;?>
                                    @foreach($cate_parent as $category)
                                    @if($category->count == 0)
                                    <li class=" @if($i == 0)
                                                    active open-tree
                                                @else
                                                    
                                                @endif
                                      dropdown-tree">
                                        <a class="dropdown-tree-a"> {{ $category->cateName }} </a>
                                        <ul class="category-level-2 dropdown-menu-tree">
                                            @foreach($cate_noneparent as $item)
                                            @if($item->parent == $category->id)
                                            <li class="dropdown-tree">
                                                <a class="dropdown-tree-a" href="{{ route('category',[$item->id,$item->alias]) }}">{{ $item->cateName }} </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <?php $i++; ?>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="collapseWill active " data-toggle="collapse" href="#collapsePrice">
                           Giá <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> <span class="pull-right clearFilter  label-danger"> Clear </span>
                            </h4>
                        </div>
                        <div id="collapsePrice" class="panel-collapse collapse in">
                            <div class="panel-body priceFilterBody">
                                <p>Nhập giá sản phẩm tim kiếm </p>
                                <form class="form-inline " role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="2000 $">
                                    </div>
                                    <div class="form-group sp"> -</div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputPassword2" placeholder="3000 $">
                                    </div>
                                    <button type="submit" class="btn btn-default pull-right">Kiểm tra</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" href="#collapseBrand" class="collapseWill active ">
                           Danh mục <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a>
                            </h4>
                        </div>
                        <div id="collapseBrand" class="panel-collapse collapse in">
                            <div class="panel-body smoothscroll maxheight300">
                                @foreach($cate_noneparent as $item)
                                <div class="block-element">
                                    <label><input type="checkbox" name="tour" value="{{ $item->id }}"/>{{ $item->cateName }} </label>
                                </div>
                                @endforeach
                                <div class="block-element">
                                    <label> &nbsp; </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" href="#collapseThree" class="collapseWill active ">
                           Giảm giá <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="block-element">
                                    <label>
                              <input type="checkbox" name="tour" value="3"/>
                              Sản phẩm giảm giá </label>
                                </div>
                                <div class="block-element">
                                    <label>
                              <input type="checkbox" name="tour" value="3"/>
                              Sản phẩm không giảm giá </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="w100 clearfix category-top">
                    <h2> {{ $category->cateName }} </h2>
                    <div class="categoryImage"><img src="{{ url('user/images/site/category.jpg') }}" class="img-responsive" alt="img"></div>
                </div>
                <div class="row subCategoryList clearfix owl-carousel owl-theme" id="bannerslide">
                    @foreach($cate_parent as $item)
                    <div class="text-center ">
                        <div class="thumbnail equalheight">
                            <a class="subCategoryThumb">
                                <img src="{{ url('images/category/',$item->picture) }}" class="img-rounded " alt="img"> 
                            </a> 
                            <a class="subCategoryTitle"><span> {{ $item->cateName  }} </span></a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="w100 productFilter clearfix">
                    <p class="pull-left"> Hiển thị <strong>12</strong> sản phẩm </p>
                    <div class="pull-right ">
                        <div class="pull-right">
                            <select class="form-control" id="sort" name="orderby">
                                <option selected="selected">Mặc định</option>
                                <option value="rating">Sắp xếp theo đánh giá sản phẩm</option>
                                <option value="date">Sản phẩm mới nhất</option>
                                <option value="price">Sắp theo giá: từ thấp đến cao</option>
                                <option value="price-desc">Sắp theo giá: từ cao đến thấp</option>
                            </select>
                        </div>
                        <div class="change-view pull-right">
                            <a href="#" title="Grid" class="grid-view"> <i class="fa fa-th-large"></i> </a>
                            <a href="#" title="List" class="list-view "><i class="fa fa-th-list"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row  categoryProduct xsResponse clearfix">
                    @foreach($product_category as $item)
                    <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" data-target="#myModal">Xem nhanh </a>
                                </div>
                                <a href="{{ route('ProductDetail',[$item->id,$item->alias]) }}"><img src="{{ url('images/product/'.$item->picture) }}" alt="img" class="img-responsive"></a>
                                <div class="promotion"><span class="new-product"> NEW</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="{{ route('ProductDetail',[$item->id,$item->alias]) }}">{{ str_limit($item->productName ,40, '...')}} </a></h4>
                                
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>{{ number_format($item->price,'0',',','.') }} đ</span></div>
                            <div class="action-control">
                                <a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Thêm vào giỏ hàng </span> </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="w100 categoryFooter">
                    <div class="pagination pull-left no-margin-top">
                        {{ $product_category->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
@endsection