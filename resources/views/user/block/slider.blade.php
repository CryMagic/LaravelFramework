<div class="col-lg-12 text-center">
    <hr>
</div>
<br>
<div style="clear:both"></div>
<div class="col-sm-10 show-case-wrapper center-block relative">
    <div id="productShowCase" class="owl-carousel owl-theme">
        @foreach($top_product as $item)
        <div class="product-slide">
            <div class="col-sm-4 product-slide-left">
                <a class="product-slide-img"> 
                    <img alt="img" src="{{ $item->picture }}" style="height:400px" class="img-responsive">
                </a>
            </div>
            <div class="col-sm-6">
                <div class="product-slide-inner ">
                    <h1 class="product-title">
                    {{ $item->productName }}</h2>
                    <h3 class="product-code">Product Code : DEN1098</h3>
                    <div class="product-price">
                        <span class="price-sales"> {{ number_format($item->discount,'0',',','.') }} đ</span> 
                        <span class="price-standard">{{ number_format($item->price,'0',',','.') }} đ</span>
                    </div>
                    <div class="details-description">
                        
                    </div>
                    <a href="{{ route('AddToCart',[$item->id]) }}"  class="btn btn-stroke-dark"> <i class="glyphicon glyphicon-shopping-cart"></i> Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div style="clear:both;"></div>
    <a id="ps-next" class="ps-nav">
        <i class="fa fa-angle-right"></i> 
    </a> 
    <a id="ps-prev" class="ps-nav"> 
        <i class="fa fa-angle-left"></i> 
    </a>
</div>