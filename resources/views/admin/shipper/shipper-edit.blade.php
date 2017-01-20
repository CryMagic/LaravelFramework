@foreach($shippers as $item)
    <div class="modal" id="edit-shipper{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog animated fadeInDown">
            <div class="modal-content">
                <form id="msg_validat_shipper" method="POST" action="{{ route('shipper.update',[$item->id]) }}" novalidate="novalidate">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Chỉnh sửa thông tin shipper</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="form-label">Tên Shipper</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="ShipperName" value="{{ $item->shipperName }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Mô tả</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="Description" value="{{ $item->description }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Số điện thoại</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="Phone" value="{{ $item->phone }}">
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
@endforeach