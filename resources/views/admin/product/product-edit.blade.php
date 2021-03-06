@extends('admin.master')
@section('content')
<section id="main-content" class=" ">
<section class="wrapper main-wrapper row" style=''>
<div class='col-xs-12'>
   <div class="page-title">
      <div class="pull-left">
         <!-- PAGE HEADING TAG - START -->
         <h1 class="title">Chỉnh sửa sản phẩm</h1>
         <!-- PAGE HEADING TAG - END -->                            
      </div>
      <div class="pull-right hidden-xs">
         <ol class="breadcrumb">
            <li>
               <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i>Home</a>
            </li>
            <li>
               <a href="{{ route('product.index') }}">Sản phẩm</a>
            </li>
            <li class="active">
               <strong>Sửa sản phẩm</strong>
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
      <h2 class="title pull-left">Thông tin cơ bản</h2>
      <div class="actions panel_actions pull-right">
         <a class="box_toggle fa fa-chevron-down"></a>
         <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
         <a class="box_close fa fa-times"></a>
      </div>
   </header>
   <div class="content-body">
   <div class="row">
      <form action ="{{ route('product.update',[$product->id]) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{ method_field('PUT') }}
         <div class="col-xs-12 col-sm-9 col-md-4">
            <div class="form-group">
               <label class="form-label" for="field-16519">Tên sản phẩm</label>
               <div class="controls">
                  <input type="text" value="{{ $product->productName }}" placeholder="Nhập tên sản phẩm..." class="form-control" name="ProductName">
               </div>
            </div>
            <div class="form-group">
               <label class="form-label">Thể Loại</label>
               <div class="controls">
                <select class="" name="Category" id="Category">
                    @foreach($categories as $category)
                        <option
                        @if($category->id == $product->cateID)
                            selected
                        @endif
                         value="{{ $category->id }}">{{ $category->cateName }}</option>
                    @endforeach
                </select>
               </div>
            </div>
            <div class="form-group">
               <label class="form-label">Nhà cung cấp</label>
               <div class="controls">
                <select class="" name="Supply" id="Supply">
                    @foreach($supplies as $supply)
                        <option
                        @if($category->id == $product->supplierID)
                            selected
                        @endif
                         value="{{ $supply->id }}">{{ $supply->companyName }}</option>
                    @endforeach
                </select>
               </div>
            </div>
            <div class="form-group">
               <label class="form-label" for="field-118916">Giá</label>
               <div class="controls">
                  <input type="text" value="{{ $product->price }}" placeholder="Nhập giá sản phẩm..." class="form-control" name="Price">
               </div>
            </div>
            <div class="form-group">
               <label class="form-label" for="field-118916">Tồn Kho</label>
               <div class="controls">
                  <input type="number" value="{{ $product->inStock }}" placeholder="Số lượng tồn kho ..." class="form-control" name="InStock">
               </div>
            </div>
            <div class="form-group">
               <label class="form-label" for="field-118916">Giảm giá</label>
               <div class="controls">
                  <input type="number" value="{{ $product->discount }}" placeholder="Giá sản phẩm giảm giá ..." class="form-control" name="Discount">
               </div>
            </div>
            <div class="form-group">
                <label class="form-label" >Hinh ảnh</label>
                @if($product->picture != null)
                    <img src="{{ $product->picture }}" class="img-rounded" width="100px" height="100px">
                @endif
                <br>
                <div class="controls">
                    <input type="file" value="" class="form-control" name="Picture">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-9 col-md-8">
            <div class="form-group">
                <label class="form-label" >Mô tả về sản phẩm</label>
                <div class="controls">
                    <textarea id="description-product" class="form-control" rows="14" name="Description" placeholder="Mô tả sản phẩm ...">
                        {{ $product->discription }}
                    </textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" >Ghi chú</label>
                <div class="controls">
                    <textarea id="note-product" class="form-control" rows="14" name="Note" placeholder="Thông tin thêm ...">
                        {{ $product->note }}
                    </textarea>
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