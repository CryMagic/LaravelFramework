
<div class="modal" id="edit-method-payment" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog animated fadeInDown">
        <div class="modal-content">
            <form id="form-edit-method-payment" method="POST" action="" novalidate="novalidate">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Phương thức thanh toán</h4>
                </div>
                <div class="modal-body">
                    
                    
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Đóng</button>
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </form>
        </div>
    </div>
</div>
