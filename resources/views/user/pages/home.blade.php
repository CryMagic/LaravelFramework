@extends('user.master')
@section('content')
@include('user.block.slider')

<div class="container main-container">
    
    <div class="row featuredPostContainer globalPadding style2">
        <h3 class="section-title style2 text-center"><span>Sản phẩm mới về</span></h3>
        <div id="productslider" class="owl-carousel owl-theme">
            @foreach($new_products as $item)
            <div class="item">
                <div class="product">
                    <button type="submit" class="add-fav tooltipHere" data-placement="left">
                        <i class="glyphicon glyphicon-heart"></i>
                    </button>
                    <div class="image">
                        <div class="quickview">
                            <a data-toggle="modal" class="btn btn-xs btn-quickview" data-target="#myModal">Xem nhanh </a>
                        </div>
                        <a href="{{ route('ProductDetail',[$item->id,$item->alias]) }}">
                            <img src="{{ $item->picture }}" alt="img" class="img-responsive">
                        </a>
                        <div class="promotion">
                            <span class="new-product"> NEW</span>
                            <span class="discount">15% OFF</span>
                        </div>
                    </div>
                    <div class="description">
                        <h4>
                            <a href="{{ route('ProductDetail',[$item->id,$item->alias]) }}">
                            {{ str_limit($item->productName ,40, '...')}}
                            </a>
                        </h4>
                        <span class="size">XL / XXL / S </span>
                    </div>
                    <div class="price"><span>{{ number_format($item->price,'0',',','.') }} đ</span></div>
                    <div class="action-control">
                        <a class="btn btn-primary" href="{{ route('AddToCart',[$item->id]) }}"> 
                            <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"></i> Thêm vào giỏ hàng </span> 
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="parallax-section parallax-image-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="parallax-content clearfix">
                    <h1 class="parallaxPrce"> 5000.000 đ </h1>
                    <h2 class="uppercase">Khách hàng là người bạn thân thiết của chúng tôi</h2><br>
                    <h3> Miễn phí giao hàng trên toàn quốc. </h3>
                    <div style="clear:both"></div>
                    <a class="btn btn-discover"> <i class="fa fa-shopping-cart"></i> ShopOnline </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container main-container">
    
    <div class="morePost row featuredPostContainer style2 globalPaddingTop">
        <h3 class="section-title style2 text-center"><span>Sản phẩm đang kinh doanh</span></h3>
        <div class="container">
            <div class="row xsResponse">
                @foreach($products as $item)
                <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product">
                        <button type="submit" class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </button>
                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" data-target="#myModal">Xem nhanh </a>
                            </div>
                            <a href=""><img src="{{ $item->picture }}" alt="img" class="img-responsive"></a>
                            <div class="promotion"><span class="new-product"> NEW</span> <span class="discount">15% OFF</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="{{ route('ProductDetail',[$item->id, $item->alias]) }}">
                                {{ str_limit($item->productName ,40, '...')}}
                            </a></h4>
                            <span class="size">XL / XXL / S </span>
                        </div>
                        <div class="price">
                            <span>{{ number_format($item->discount,'0',',','.') }} đ</span> 
                            <span class="old-price">{{ number_format($item->price,'0',',','.') }} đ</span>
                        </div>
                        <div class="action-control">
                            <a class="btn btn-primary" href="{{ route('AddToCart',[$item->id]) }}"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
            {{ $products->links() }}
        </div>
    </div>
    <hr class="no-margin-top">
    <div class="width100 section-block">
        <h3 class="section-title"><span> Danh mục sản phẩm</span>
            <a id="nextBrand" class="link pull-right carousel-nav"> <i class="fa fa-angle-right"></i></a>
            <a id="prevBrand" class="link pull-right carousel-nav"> <i class="fa fa-angle-left"></i> </a>
        </h3>
        <div class="row">
            <div class="col-lg-12">
                <ul class="no-margin brand-carousel owl-carousel owl-theme">
                    @foreach($category_images as $category)
                    <li><a><img src="{{ $category->picture }}" alt="img"></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection