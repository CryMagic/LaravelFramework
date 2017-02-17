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
                                <h2 class="fadeInDown  wow" data-wow-duration="0.2s" data-wow-delay=".5s"> {{ $blog->productName }} </h2>
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
                                    <a href="blog-details.html"> <img src="{{ url('images/product/',$blog->picture) }}" class="img-responsive" alt="G"> </a>
                                </div>
                                <div class="post-description wow fadeIn  " data-wow-duration="0.2s" data-wow-delay=".1s">
                                    {!!  $blog->discription  !!}
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