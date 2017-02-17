@extends('user.master')
@section('content')
    <section class="blog-intro parallaxOffset parallaxbg" style="background: url({{ url('user/images/blog/blogbg.jpg') }}) no-repeat 50% -86px fixed; background-size: cover">
        <div class="display-table relative5 hw100">
            <div class="display-table-cell hw100 relative">
                <div class="container blogIntroContent zindex10 relative scrollme">
                    <div class="row">
                        <div class="  wow  fadeInDown introContent text-center" data-wow-duration="0.2s" data-wow-delay=".5s">
                            <h1 class="x2large"> Shop Blog </h1>
                            
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
                                    by <span><a class="userBy">Quản trị viên</a></span> đã post
                                    <span>{{ $blog->created_at->diffForHumans() }}</span>
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
                                    <a> <img src="{{ url('images/product/',$blog->picture) }}" class="img-responsive" alt="G"> </a>
                                </div>
                                <div class="post-description wow fadeIn  " data-wow-duration="0.2s" data-wow-delay=".1s">
                                    {!!  $blog->discription  !!}
                                </div>
                            </div>
                        </div>
                        <div class="RecommendedBlog clearfix text-center">
                            <div class="h2 RecommendedTitle">Tin tức liên quan</div>
                            <div class="row" id="SimilarProductSlider">
                                @foreach($blog_recommend as $item)
                                <div class="">
                                    <div class="blog-rc-item">
                                        <a href="{{ route('BlogDetail',[$blog->id,$blog->alias]) }}"> 
                                            <span class="rcimg"><img src="{{ url('images/product/',$item->picture) }}" class="img-responsive" alt="img"></span> 
                                            <span class="h4">{{ $item->productName }}</span> 
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
@endsection