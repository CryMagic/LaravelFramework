@extends('user.master')
@section('content')
<section class="blog-intro parallaxOffset parallaxbg" style="background: url({{ url('user/images/blog/blogbg.jpg') }}) no-repeat 50% -86px fixed; background-size: cover">
   <div class="display-table relative5 hw100">
      <div class="display-table-cell hw100 relative">
         <div class="container blogIntroContent zindex10 relative scrollme">
            <div class="row">
               <div class="  wow  fadeInDown introContent text-center">
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
                @foreach($blogs as $blog)
                <div class="item-blog-post">
                    <div class="post-header clearfix">
                        <h2 class="wow  fadeIn  " data-wow-duration="0.2s"><a href="{{ route('BlogDetail',[$blog->id,$blog->alias]) }}"> The 14
                            {{ $blog->productName }} </a>
                        </h2>
                        <div class="post-info">
                            by <span><a class="userBy">Quản trị viên</a></span> đã post
                            <span class="text-danger">{{ $blog->created_at->diffForHumans() }}</span>
                            <div class="share-gallery pull-right no-float-xs">
                            <a class="share-facebook"> <i class="fa fa-facebook-f"> </i> </a>
                            <a class="share-twitter" href="http://facebook.com/"> <i class="fa fa-twitter"> </i> </a>
                            <a class="share-pinterest" href="http://facebook.com/"> <i class="fa fa-pinterest-p"> </i> </a>
                            <a class="share-email" href="#"> <i class="fa fa-envelope-o"> </i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="post-main-view">
                        <div class="post-lead-image  wow fadeInDown  " data-wow-duration="0.2s">
                            <a href="{{ route('BlogDetail',[$blog->id,$blog->alias]) }}"> <img src="{{ url('images/product/',$blog->picture) }}" class="img-responsive" alt="G"> </a>
                        </div>
                        <div class="post-description  wow fadeInDown  " data-wow-duration="0.2s">
                            
                            <a href="{{ route('BlogDetail',[$blog->id,$blog->alias]) }}" class="btn btn-more"> Xem thêm <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            {{ $blogs->links() }}
            <div class="loadMoreBlog clearfix text-center"><a class="btn  btn-block"> LOAD MORE </a></div>
         </div>
      </div>
   </div>
</div>
<div class="gap"></div>
@endsection