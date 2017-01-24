@extends('user.master')
@section('content')
<div class="container main-container headerOffset">
        <div class="row">
            <div class="breadcrumbDiv col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="index.html"> Home </a></li>
                    <li><a href="account-1.html"> Authentication </a></li>
                    <li class="active"> Forgot your password</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <h1 class="section-title-inner"><span> <i class="fa fa-unlock-alt"> </i> Forgot your password? </span></h1>
                <div class="row userInfo">
                    <div class="col-xs-12 col-sm-12">
                        <p> To reset your password, enter the email address you use to sign in to site. We will then send you a new password. </p>
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Email address </label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn   btn-primary"><i class="fa fa-unlock"> </i> Retrieve Password
                        </button>
                        </form>
                        <div class="clear clearfix">
                            <ul class="pager">
                                <li class="previous pull-right"><a href="account-1.html"> &larr; Back to Login </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5"></div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="gap"></div>
@endsection