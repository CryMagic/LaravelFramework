@extends('admin.master')
@section('content')
<section id="main-content" class=" ">
<section class="wrapper main-wrapper row" style=''>
<div class='col-xs-12'>
   <div class="page-title">
      <div class="pull-left">
         <!-- PAGE HEADING TAG - START -->
         <h1 class="title">Thêm tài khoản</h1>
         <!-- PAGE HEADING TAG - END -->                            
      </div>
      <div class="pull-right hidden-xs">
         <ol class="breadcrumb">
            <li>
               <a href="index.html"><i class="fa fa-home"></i>Home</a>
            </li>
            <li>
               <a href="{{ route('user.index') }}">Tài khoản</a>
            </li>
            <li class="active">
               <strong>Thêm tài khoản</strong>
            </li>
         </ol>
      </div>
   </div>
</div>
<div class="clearfix"></div>
<!-- MAIN CONTENT AREA STARTS -->
<div class="col-xs-12">
<section class="box ">
   <header class="panel_header">
      <h2 class="title pull-left">Basic Info</h2>
      <div class="actions panel_actions pull-right">
         <a class="box_toggle fa fa-chevron-down"></a>
         <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
         <a class="box_close fa fa-times"></a>
      </div>
   </header>
   <div class="content-body">
   <div class="row">
      <form action ="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
         <div class="col-xs-12 col-sm-9 col-md-7">

            <div class="form-group">
               <label class="form-label" for="field-16519">E-mail</label>
               <div class="controls">
                  <input type="email" value="" class="form-control" name="Email">
               </div>
            </div>
            <div class="form-group">
               <label class="form-label" for="field-118916">Password</label>
               <div class="controls">
                  <input type="password" value="" class="form-control" name="Password">
               </div>
            </div>
            <div class="form-group">
               <label class="form-label" for="field-118916">FirstName</label>
               <div class="controls">
                  <input type="text" value="" class="form-control" name="FirstName">
               </div>
            </div>
            <div class="form-group">
               <label class="form-label" for="field-118916">LastName</label>
               <div class="controls">
                  <input type="text" value="" class="form-control" name="LastName">
               </div>
            </div>
            <div class="form-group">
               <label class="form-label" for="field-118916">Số điện thoại</label>
               <div class="controls">
                  <input type="text" value="" class="form-control" name="Phone">
               </div>
            </div>
            <div class="form-group">
                <input type="radio" id="square-radio-1" class="skin-square-red" value="1" name="Gender">
                <label class="iradio-label form-label" for="square-radio-1">Nam</label>

                <input type="radio" id="square-radio-1" class="skin-square-red" value="0" name="Gender" checked>
                <label class="iradio-label form-label" for="square-radio-1">Nữ</label>
            </div>          
            <div class="form-group">
               <label class="form-label" >Sinh nhật</label>
               <div class="controls">
                  <input type="text" value="" class="form-control datepicker" data-format="yyyy/mm/dd" name="BirthDay">
                </div>
            </div>        
            <div class="form-group">
                <input type="radio" id="square-radio-1" class="skin-square-red" value="1" name="Level">
                <label class="iradio-label form-label" for="square-radio-1">Admin</label>

                <input type="radio" id="square-radio-1" class="skin-square-red" value="0" name="Level" checked>
                <label class="iradio-label form-label" for="square-radio-1">User</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-5">
            <div class="form-group">
                <label class="form-label" >Hinh ảnh</label>
                <div class="controls">
                    <input type="file" value="" class="form-control" name="Avatar">
                </div>
            </div>
            <div class="form-group">
               <label class="form-label">Tỉnh/Thành Phố</label>
               <div class="controls">
                <select class="" name="Province" id="selectProvince">
                    @foreach($provinces as $item)
                        <option value="{{ $item->matp }}">{{ $item->name }}</option>
                    @endforeach
                </select>
               </div>
            </div>
            <div class="form-group">
               <label class="form-label">Quận/Huyện</label>
               <div class="controls">
                <select class="" name="District" id="selectDistrict">
                
                </select>
               </div>
            </div>
            <div class="form-group">
               <label class="form-label">Xã/Phường</label>
               <div class="controls">
                <select class="" name="Ward" id="selectWard">
                     
                </select>
               </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 padding-bottom-30">
            <div class="text-left">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </div>
      </form>
      </div>
   </div>
</section>
@endsection