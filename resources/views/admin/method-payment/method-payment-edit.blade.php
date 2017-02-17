@foreach($method_payment as $item)
    <div class="modal" id="edit-method-payment{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog animated fadeInDown">
            <div class="modal-content">
                <form id="msg_validate" method="POST" action="{{ route('method-payment.update',[$item->id]) }}" novalidate="novalidate">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Phương thức thanh toán</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="form-label">Tên phương thức</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="MethodName" value="{{ $item->name }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Mô tả</label>
                                    <div class="controls">
                                        <textarea class="form-control" rows="4" name="Description">{{ $item->description }}</textarea>
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