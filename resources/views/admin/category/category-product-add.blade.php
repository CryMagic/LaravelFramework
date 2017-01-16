<div class="modal" id="add-category" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog animated fadeInDown">
            <div class="modal-content">
                <form id="msg_validate" method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data" novalidate="novalidate">
                {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Thêm danh mục sản phẩm</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="form-label">Tên danh mục</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="CateName" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Mô tả</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="Description" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Hình ảnh</label>
                                    <div class="controls">
                                        <input type="file" class="form-control" name="Picture" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" id="square-radio-1" class="skin-square-red" value="1" name="isDisplay">
                                    <label class="iradio-label form-label" for="square-radio-1">Hiển thị</label>

                                    <input type="radio" id="square-radio-1" class="skin-square-red" value="0" name="isDisplay" checked>
                                    <label class="iradio-label form-label" for="square-radio-1">Không</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Đóng</button>
                        <button type="submit" class="btn btn-success">Lưu lại</button>
                    </div>
                </form>
            </div>
        </div>
    </div>