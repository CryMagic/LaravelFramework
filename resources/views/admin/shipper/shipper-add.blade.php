<div class="modal" id="add-shipper" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog animated fadeInDown">
        <div class="modal-content">
            <form id="msg_validate_shipper" method="POST" action="{{ route('shipper.store') }}" novalidate="novalidate">
            {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Thêm Shipper</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="form-label">Tên shipper</label>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Nhập tên shipper" name="ShipperName" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Mô tả</label>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Mô tả về shipper" name="Description" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Số điện thoại</label>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Số điện thoại liên hệ" name="Phone" >
                                </div>
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