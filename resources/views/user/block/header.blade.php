<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
        <div class="navbar-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                        <div class="pull-left">
                            <ul class="userMenu">
                                <li>
                                    <a href="#"> <span class="hidden-xs">Hỗ trợ</span><i class="glyphicon glyphicon-info-sign hide visible-xs"></i> </a>
                                </li>
                                <li class="phone-number">
                                    <a href="callto:+01658890216"> <span> <i class="glyphicon glyphicon-phone-alt"></i></span> <span class="hidden-xs" style="margin-left:5px"> 01658890216 </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                        <div class="pull-right">
                            <ul class="userMenu">
                             @if(Auth::check())
                                <li><a href="{{ route('account-one') }}"><span class="hidden-xs">Xin Chào: {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                                    <i class="glyphicon glyphicon-user"></i>
                                    </a>
                                </li>
                                <li><a href="{{ route('UserLogout') }}"><span class="hidden-xs">Đăng xuất </span><i class="glyphicon glyphicon-log-in hide visible-xs"></i> </a></a></li>
                             @else
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">Đăng nhập</span>
                                        <i class="glyphicon glyphicon-log-in hide visible-xs"></i> </a>
                                </li>
                                <li class="hidden-xs"><a href="#" data-toggle="modal" data-target="#ModalSignup">Đăng ký </a>
                                </li>
                            @endif
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span></button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"><i class="fa fa-shopping-cart colorWhite"> </i> <span class="cartRespons colorWhite"> Cart ($210.00) </span></button>
                <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ url('user/images/logo.png') }}" alt="TSHOP"> </a>
                <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
                    <div class="input-group">
                        <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
                    </div>
                </div>
            </div>
            <div class="navbar-cart collapse">
                <div class="cartMenu col-lg-4 col-xs-12 col-md-4">
                    <div class="w100 miniCartTable scroll-pane">
                        <table>
                            <tbody>
                                @foreach(Cart::content() as $item)
                                <tr class="miniCartProduct">
                                    <td style="width:20%" class="miniCartProductThumb">
                                        <div>
                                            <a href="product-details.html"> <img src="{{ url('images/product/'.$item->options['img']) }}" alt="img"> </a>
                                        </div>
                                    </td>

                                    <td style="width:40%">
                                        <div class="miniCartDescription">
                                            <h4><a href="product-details.html"> {{ $item->name }} </a></h4>
                                            <div class="price"><span> {{ number_format($item->price,'0',',','.') }} </span></div>
                                        </div>
                                    </td>
                                    <td style="width:10%" class="miniCartQuantity"><a> X {{ $item->qty }} </a></td>
                                    <td style="width:15%" class="miniCartSubtotal"><span> {{ number_format($item->price*$item->qty,'0',',','.') }} </span></td>
                                    <td style="width:5%" class="delete"><a> x </a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="miniCartFooter miniCartFooterInMobile text-right">
                        <h3 class="text-right subtotal"> Tổng tiền: $210 </h3>
                        <a class="btn btn-sm btn-danger" href="{{ route('cart') }}"> <i class="fa fa-shopping-cart"> </i> Xem giỏ hàng
                        </a> <a href="{{ route('checkout-one') }}" class="btn btn-sm btn-primary"> Thanh toán </a>
                    </div>
                </div>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"> Trang chủ </a></li>
                    <li class="dropdown megamenu-fullwidth">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"> Danh mục sản phẩm <b class="caret"> </b> </a>
                        <ul class="dropdown-menu">
                            <li class="megamenu-content">
                                @foreach($categories as $category)
                                <ul class="col-lg-3 col-sm-3 col-md-3 col-xs-4">
                                    <li>
                                        <a class="newProductMenuBlock" href="{{ route('category',[$category->id,$category->alias]) }}"> 
                                            <img class="img-responsive" src="{{ url('images/category/'.$category->picture) }}" alt="product">
                                            <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> {{ $category->cateName }} </span>
                                            
                                        </a>
                                    </li>
                                </ul>
                                @endforeach
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown megamenu-80width">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"> Cửa hàng
                            <b class="caret"> </b> 
                        </a>
                        <ul class="dropdown-menu">
                            <li class="megamenu-content">
                                @foreach($categories as $category)
                                <ul class="col-lg-2 col-sm-4 col-md-2 unstyled noMarginLeft">
                                    <li>
                                        <p><strong> {{ $category->cateName }} </strong></p>
                                    </li>
                                    @foreach($categories_noneparent as $item)
                                    @if($item->parent == $category->id)
                                    <li><a href="{{ route('category',[$item->id,$item->alias]) }}"> {{ $item->cateName }} </a></li>
                                    @endif
                                    @endforeach
                                </ul>
                                @endforeach
                            </li>
                        </ul>
                    </li>

                </ul>
                <div class="nav navbar-nav navbar-right hidden-xs">
                    <div class="dropdown cartMenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Giỏ hàng (0 đ) </span> <b class="caret"> </b> </a>
                        <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4">
                            <div class="w100 miniCartTable scroll-pane">
                                <table>
                                    <tbody>
                                        <tr class="miniCartProduct">
                                            <td style="width:20%" class="miniCartProductThumb">
                                                <div>
                                                    <a href="product-details.html"> <img src="{{ url('user/images/product/3.jpg') }}" alt="img">
                                                    </a>
                                                </div>
                                            </td>
                                            <td style="width:40%">
                                                <div class="miniCartDescription">
                                                    <h4><a href="product-details.html"> TSHOP Tshirt DO9 </a></h4>
                                                    <span class="size"> 12 x 1.5 L </span>
                                                    <div class="price"><span> $22 </span></div>
                                                </div>
                                            </td>
                                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                                            <td style="width:15%" class="miniCartSubtotal"><span> $33 </span></td>
                                            <td style="width:5%" class="delete"><a> x </a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="miniCartFooter text-right">
                                <h3 class="text-right subtotal"> Tổng tiền: $210 </h3>
                                <a class="btn btn-sm btn-danger" href="{{ route('cart') }}"> <i class="fa fa-shopping-cart"> </i> Xem giỏ hàng </a>
                                <a class="btn btn-sm btn-primary" href="{{ route('checkout-one') }}"> Thanh toán </a>
                            </div>
                        </div>
                    </div>
                    <div class="search-box">
                        <div class="input-group">
                            <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-full text-right">
            <a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>
            <div class="searchInputBox pull-right">
                <input type="search" data-searchurl="search?=" name=" q" placeholder="Nhập từ khóa tìm kiếm" class="search-input">
                <button class="btn-nobg search-btn" type="submit"><i class="fa fa-search"> </i></button>
            </div>
        </div>
    </div>