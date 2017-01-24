@extends('user.master')
@section('content')
    <section class="blog-intro parallaxOffset parallaxbg" style="background: url({{ url('user/images/blog/blogbg.jpg') }}) no-repeat 50% -86px fixed; background-size: cover">
        <div class="display-table relative5 hw100">
            <div class="display-table-cell hw100 relative">
                <div class="container blogIntroContent zindex10 relative scrollme">
                    <div class="row">
                        <div class="  wow  fadeInDown introContent text-center" data-wow-duration="0.2s" data-wow-delay=".5s">
                            <h1 class="x2large"> TSHOP BLOG </h1>
                            <h5 class="parallaxSubtitle"> The latest fashion news, advice and comment. </h5>
                            <div class="subscribe-dropdown">
                                <div class="dropdown">
                                    <a class="btn btn-subscribe dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Subscribe</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li>
                                            <div>
                                                <label>
                                       <input name="option1" value="option1" type="checkbox">
                                       &nbsp; Latest News </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <label>
                                       <input name="option2" value="option2" type="checkbox">
                                       &nbsp; New Product </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <label>
                                       <input name="option3" value="option2" type="checkbox">
                                       &nbsp; Offer </label>
                                            </div>
                                        </li>
                                        <li>
                                            <input placeholder="Enter Your Email" id="subemail" name="subemail" type="text" />
                                        </li>
                                        <li><a href="#" class="btn btn-block"> Subscribe </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay-shade"></div>
        <div class="background-overly g6"></div>
    </section>
    <div class="blog-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-centered blog-left">
                    <div class="bl-inner">
                        <div class="item-blog-post">
                            <div class="post-header clearfix">
                                <h2 class="fadeInDown  wow" data-wow-duration="0.2s" data-wow-delay=".5s"> The 14 Fashion Blogger Instagrams to Follow Now </h2>
                                <div class="post-info">
                                    by <span><a class="userBy">Detti S.</a></span> on
                                    <span>Mar 24, 2015</span>
                                    <div class="share-gallery pull-right no-float-xs">
                                        <a class="share-facebook"> <i class="fa fa-facebook-f"> </i> </a>
                                        <a class="share-twitter" href="http://facebook.com/"> <i class="fa fa-twitter"> </i> </a>
                                        <a class="share-pinterest" href="http://facebook.com/"> <i class="fa fa-pinterest-p"> </i> </a>
                                        <a class="share-email" href="#"> <i class="fa fa-envelope-o"> </i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-main-view">
                                <div class="post-lead-image wow  fadeIn  " data-wow-duration="0.2s" data-wow-delay=".6s">
                                    <a href="blog-details.html"> <img src="{{ url('user/images/blog/unnamed.jpg') }}" class="img-responsive" alt="G"> </a>
                                </div>
                                <div class="post-description wow  fadeIn  " data-wow-duration="0.2s" data-wow-delay=".1s">
                                    <p><strong> Lorem ipsum dolor sit amet </strong> consectetur adipiscing elit. Phasellus vel metus eget nunc condimentum molestie. Aenean eget neque convallis nisl elementum posuere ut quis nibh. Sed purus nibh, commodo
                                        ut egestas ac, dictum nec leo. Nam eget diam mauris. Sed consectetur arcu sed justo sodales molestie. Aliquam tincidunt massa sit amet velit dictum blandit. Vivamus aliquet leo a leo elementum, eu gravida quam varius.
                                        Mauris vel metus enim. Donec lacus urna, ultrices vel nulla eu, semper placerat purus. Sed dapibus felis augue, eu euismod felis faucibus vitae. Duis mollis interdum maximus. Aliquam hendrerit erat mi, in porttitor
                                        nibh ornare nec. Vivamus faucibus commodo velit ac pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec et lectus commodo, aliquet est sit amet, imperdiet
                                        enim. Proin ac dolor nulla.
                                    </p>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                        </p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                    <p> Duis quis efficitur erat. Nam ac cursus nunc. Quisque nisi justo, finibus nec mi sed, rutrum ullamcorper quam. Duis congue justo a purus pulvinar posuere. Pellentesque ultricies nisi fringilla arcu vulputate semper.
                                        Phasellus mattis, neque ut egestas porta, metus tortor pellentesque enim, vitae dictum sapien diam ut libero. Duis quis nibh non nunc aliquet accumsan sit amet ut purus.
                                    </p>
                                    <p><a href="#" class="link"> Sed ut egestas lorem, a dapibus est </a> Maecenas tristique finibus lectus, non convallis libero euismod sed. Etiam venenatis a ex ac ornare. Suspendisse iaculis lobortis blandit. Proin quis
                                        justo sit amet erat lacinia finibus. In nec finibus mauris, at dictum nibh. Donec gravida, augue et suscipit convallis, ipsum urna maximus ligula, ultricies faucibus turpis ipsum in odio. Sed ut egestas lorem, a
                                        dapibus est.
                                    </p>
                                    <p> Donec suscipit egestas tellus, id efficitur ex iaculis ac. Aliquam erat volutpat. Phasellus ut tincidunt lacus. Suspendisse et tincidunt erat, eget consectetur est. Curabitur posuere quam et efficitur suscipit. Sed
                                        sollicitudin pulvinar quam, a vulputate mauris feugiat a. Mauris semper eu nulla vel laoreet. Integer rutrum quam vitae turpis pulvinar convallis ut a velit. Donec ac pulvinar magna, a volutpat arcu. Aliquam tincidunt
                                        pharetra justo semper consectetur. Nam id vulputate mauris, sit amet mollis eros. Suspendisse ut pellentesque sapien, non sagittis neque. Sed ipsum nulla, auctor id auctor ut, ornare sed libero. Proin sed sollicitudin
                                        felis. Sed at lacus nibh.
                                    </p>
                                    <p> Cras rutrum diam velit, id ullamcorper turpis accumsan non. Etiam rhoncus luctus pharetra. Donec vulputate eu erat eget tempus. Praesent aliquam facilisis blandit. Vestibulum a odio laoreet, iaculis ex nec, elementum
                                        mauris. Aenean in lectus ac justo tristique rhoncus nec nec massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam eget accumsan enim. Nunc at accumsan felis. Vestibulum
                                        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sed faucibus quam, vehicula fermentum nulla. Suspendisse eget eleifend elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="RecommendedBlog clearfix text-center">
                            <div class="h2 RecommendedTitle">Recommended</div>
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="blog-rc-item">
                                        <a href="blog-details.html"> <span class="rcimg"><img src="{{ url('user/images/blog/unnamed.jpg') }}" class="img-responsive" alt="img"></span> <span class="h4">Cras rutrum diam velit, id ullamcorper turpis</span> </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="blog-rc-item">
                                        <a href="blog-details.html"> <span class="rcimg"><img src="{{ url('user/images/blog/unnamed2.jpg') }}" class="img-responsive" alt="img"></span> <span class="h4">Cras rutrum diam velit, id ullamcorper turpis</span> </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="blog-rc-item">
                                        <a href="blog-details.html"> <span class="rcimg"> <img src="{{ url('user/images/blog/unnamed3.jpg') }}" class="img-responsive" alt="img"></span> <span class="h4">Cras rutrum diam velit, id ullamcorper turpis</span> </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="blog-rc-item">
                                        <a href="blog-details.html"> <span class="rcimg"><img src="{{ url('user/images/blog/unnamed4.jpg') }}" class="img-responsive" alt="img"></span> <span class="h4">Cras rutrum diam velit, id ullamcorper turpis</span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
@endsection