@foreach($supplies as $item)
    <div class="modal" id="edit-supply{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog animated fadeInDown">
            <div class="modal-content">
                <form id="msg_validate_supply" method="POST" action="{{ route('admin.supply.update',[$item->id]) }}" novalidate="novalidate">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Chỉnh sửa nhà cung cấp</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="form-label">Tên công ty</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="CompanyName" value="{{ $item->companyName }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <div class="controls">
                                        <input type="email" class="form-control" name="EmailContact" value="{{ $item->emailContact }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Số điện thoại</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="PhoneContact" value="{{ $item->phoneContact }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Địa chỉ</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="Address" value="{{ $item->address }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Quốc gia</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="Country" value="{{ $item->country }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Home Page</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="HomePage" value="{{ $item->homePage }}">
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