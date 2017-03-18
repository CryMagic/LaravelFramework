<div class="modal fade" id="ProductDetailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-dialog" role="document">
        <div class="main-image col-lg-5 no-padding style3">
            <a class="product-largeimg-link" href="product-details.html">
                <img src="{{ url('user/images/product_details/low-res-white/1.jpg') }}" class="img-responsive product-largeimg" alt="img">
            </a>
            <div class="modal-product-thumb">
                <a class="thumbLink selected"><img data-large="{{ url('user/images/product_details/low-res-white/1.jpg') }}" alt="img" class="img-responsive" src="{{ url('user/images/product_details/low-res-white/1.jpg') }}">
                </a>
                <a class="thumbLink"><img data-large="{{ url('user/images/product_details/low-res-white/2.jpg') }}" alt="img" class="img-responsive" src="{{ url('user/images/product_details/low-res-white/2.jpg') }}">
                </a>
                <a class="thumbLink"><img data-large="{{ url('user/images/product_details/low-res-white/3.jpg') }}" alt="img" class="img-responsive" src="{{ url('user/images/product_details/low-res-white/3.jpg') }}">
                </a>
            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 modal-details no-padding">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" style="margin-right:5px">&times;</span>
        </button>
            <div class="modal-details-inner">
                <h1 class="product-title">
                    Lorem ipsum dolor sit amet</h1>
                    <h3 class="product-code">Product Code : DEN1098</h3>
                    <div class="product-price">
                        <span class="price-sales"> $70</span> 
                        <span class="price-standard">$95</span>
                    </div>
                    <div class="details-description">
                        <p>In scelerisque libero ut elit porttitor commodo Suspendisse laoreet magna. </p>
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
                            <option value="strawberries" selected>Quantity</option>
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
                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                <div class="filterBox">
                                    <select class="form-control">
                            <option value="strawberries" selected>Size</option>
                            <option value="mango">XL</option>
                            <option value="bananas">XXL</option>
                            <option value="watermelon">M</option>
                            <option value="apples">L</option>
                            <option value="apples">S</option>
                        </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-actions">
                        <div class="addto row">
                            <div class="col-lg-6">
                                <button onclick="productAddToCartForm.submit(this);" class="button btn-block btn-cart cart first" title="Add to Cart" type="button">
                    Add to Cart
                    </button>
                            </div>
                            <div class="col-lg-6">
                                <a class="link-wishlist wishlist btn-block">Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-share clearfix">
                        <p> SHARE </p>
                        <div class="socialIcon">
                            <a href="#"> <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#"> <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#"> <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#"> <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>