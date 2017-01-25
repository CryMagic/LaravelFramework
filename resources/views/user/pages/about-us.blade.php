@extends('user.master')
@section('content')
    <div class="section-people white-bg">
        <div class="container">
            <div style="clear:both;">
                <hr class="hr40 hide-on-gray-look">
            </div>
            <div class="row ">
                <div class="col-xs-12">
                    <h2 class="text-center about-title">Thông tin về chúng tôi</h2>
                    <div class="row row-center preson-row">
                        <div class=" preson text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.05">
                            <img src="{{ url('user/images/about/p2.jpg') }}" class="img-circle img-responsive" alt="img">
                            <div class="preson-details">
                                <p>Trần Quốc Thiện<br><span>Director</span></p>
                            </div>
                        </div>
                        <div class=" preson text-center wow fadeInUp" data-wow-duration=".25s" data-wow-delay="0.07">
                            <img src="{{ url('user/images/about/p1.jpg') }}" class="img-circle img-responsive" alt="img">
                            <div class="preson-details">
                                <p>Nguyễn Tuấn Anh<br><span>Manager</span></p>
                            </div>
                        </div>
                        <div class=" preson text-center wow fadeInUp" data-wow-duration=".40s" data-wow-delay="0.09">
                            <img src="{{ url('user/images/about/p3.jpg') }}" class="img-circle img-responsive" alt="img">
                            <div class="preson-details">
                                <p>Trần Thanh Sơn<br><span>CTO</span></p>
                            </div>
                        </div>
                        <div class=" preson text-center wow fadeInUp" data-wow-duration=".65s" data-wow-delay="0.1">
                            <img src="{{ url('user/images/about/p4.jpg') }}" class="img-circle img-responsive" alt="img">
                            <div class="preson-details">
                                <p>Trần Võ Minh Thư <br><span>Head Marketing</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-about-bottom" style="background: url({{ url('user/images/about/bg.jpg') }}) no-repeat bottom center; background-size: 100% auto">
        <div class="container">
            <div class="col-lg-12">
                <div class="about-content text-center  wow fadeInUp">
                    <h2 class="text-center about-title"> Enquiries </h2>
                    <p class="lead-2 ">
                        If you have any questions, comments or concerns, <br> Send us a text message, and we'll get you what you want
                    </p>
                    <a class="btn btn-center btn-lg  btn-primary" data-toggle="modal" href="#contact-us"><i class=" fa fa-envelope"></i> Send a message </a>
                </div>
            </div>
        </div>
    </div>
@endsection