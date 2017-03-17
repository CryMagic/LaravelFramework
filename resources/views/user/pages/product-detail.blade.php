@extends('user.master')
@section('content')
<div class="container main-container headerOffset">
         <div class="row">
            <div class="breadcrumbDiv col-lg-12">
               <ul class="breadcrumb">
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="category.html">{{ $product->belongsToCategories->cateName }}</a></li>
                  <li class="active">{{ $product->productName }}</li>
               </ul>
            </div>
         </div>
         <div class="row transitionfx">
            <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="main-image sp-wrap col-lg-12 no-padding">
                  <a href="{{ $product->picture }}">
                        <img src="{{ $product->picture }}" class="img-responsive" alt="img"></a>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5">
               <h1 class="product-title">
               {{$product->productName}}</h1>
               <h3 class="product-code">Product Code : DEN1098</h3>
               <div class="rating">
                  <p><span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i class="fa fa-star-o "></i></span> <span class="ratingInfo"> <span> / </span>                            <a data-target="#modal-review" data-toggle="modal"> Write a review</a> </span>
                  </p>
               </div>
               <div class="product-price">
                  <span class="price-sales"> {{ number_format($product->discount,'0',',','.') }} đ</span> 
                  <span class="price-standard">{{ number_format($product->price,'0',',','.') }} đ</span>
               </div>
               <div class="color-details">
                  <span class="selected-color"><strong>COLOR</strong></span>
                  <ul class="swatches Color">
                     <li class="selected">
                        <a style="background-color:#f1f40e"> </a>
                     </li>
                     <li>
                        <a style="background-color:#adadad"> </a>
                     </li>
                     <li>
                        <a style="background-color:#4EC67F"> </a>
                     </li>
                  </ul>
               </div>
               <div class="productFilter productFilterLook2">
                  <div class="row">
                     <div class="col-lg-6 col-sm-6 col-xs-6">
                        <div class="filterBox">
                           <select class="form-control">
                              <option value="mango">1</option>
                              <option value="bananas">2</option>
                              <option value="watermelon">3</option>
                              <option value="grapes">4</option>
                              <option value="oranges">5</option>
                              <option value="pineapple">6</option>
                              <option value="peaches">7</option>
                              <option value="cherries">8</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="cart-actions">
                  <div class="addto row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ route('AddToCart',[$product->id]) }}" class="button btn-primary btn-block btn-cart cart first" title="Add to Cart" type="button"> Thêm vào giỏ hàng
                        </a>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a class="link-wishlist wishlist btn-block ">Add
                        to Wishlist</a>
                     </div>
                  </div>
                  <div style="clear:both"></div>
                  <h3 class="incaps"><i class="fa fa fa-check-circle-o color-in"></i> In stock</h3>
                  <h3 style="display:none" class="incaps"><i class="fa fa-minus-circle color-out"></i> Out of stock</h3>
                  <h3 class="incaps"><i class="glyphicon glyphicon-lock"></i> Secure online ordering</h3>
               </div>
               
            </div>
         </div>
         <div class="row">
         <div class="col-md-8">
            <div class="product-tab w100">
                  <ul class="nav nav-tabs">
                     <li  class="active"><a href="#size" data-toggle="tab">Thông tin sản phẩm</a></li>
                     <li><a href="#details" data-toggle="tab">Chi tiết sản phẩm</a></li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane" id="details">
                        {!! $product->discription !!}
                     </div>
                     <div class="tab-pane active" id="size">
                        {!! $product->note !!}
                     </div>
                  </div>
               </div>
               <div style="clear:both"></div>
               <div class="product-share clearfix">
                  <p> SHARE </p>
                  <div class="socialIcon">
                     <a href="#"> <i class="fa fa-facebook"></i></a>
                     <a href="#"> <i class="fa fa-twitter"></i></a>
                     <a href="#"> <i class="fa fa-google-plus"></i></a>
                     <a href="#">
                     <i class="fa fa-pinterest"></i></a>
                  </div>
               </div>
         </div>
         </div>
         <div class="row recommended">
            
            <h1> Sản phẩm liên quan </h1>
            <div id="SimilarProductSlider">
            @foreach($product_recommend as $item)
               <div class="item">
                  <div class="product">
                     <a href="{{ route('ProductDetail',[$item->id,$item->alias]) }}" class="product-image"> <img src="{{ $item->picture }}" alt="img"> </a>
                     <div class="description">
                        <h4><a href="{{ route('ProductDetail',[$item->id,$item->alias]) }}">{{ str_limit($item->productName ,40, '...')}}</a></h4>
                        <div class="price"><span>{{ number_format($item->price,'0',',','.') }} đ</span></div>
                     </div>
                  </div>
               </div>
            @endforeach   
            </div>
         </div>
         <div style="clear:both"></div>
      </div>
      <div class="gap"></div>
@endsection