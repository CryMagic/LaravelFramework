@foreach($category as $item)
    <div class="modal" id="edit-category{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog animated fadeInDown">
            <div class="modal-content">
                <form id="msg_validate" method="POST" action="{{ route('category.update',[$item->id]) }}" enctype="multipart/form-data" novalidate="novalidate">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
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
                                        <input type="text" class="form-control" name="CateName" value="{{ $item->cateName }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Mô tả</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="Description" value="{{ $item->description }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Hình ảnh</label>
                                    <div class="controls">
                                        @if($item->picture != null)
                                            <img src="{{ url('images/category/'.$item->picture) }}" class="img-rounded" width="100px" height="100px">
                                        @endif
                                        <br>
                                        <input type="file" class="form-control" name="Picture" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" id="square-radio-1" class="skin-square-red" value="1"
                                    name="isDisplay"
                                    @if($item->isDisplay == 1)
                                        Checked
                                    @endif
                                    >
                                    <label class="iradio-label form-label" for="square-radio-1">Hiển thị</label>

                                    <input type="radio" id="square-radio-1" class="skin-square-red"
                                    value="0" name="isDisplay"
                                    @if($item->isDisplay == 0)
                                        Checked
                                    @endif
                                     >
                                    <label class="iradio-label form-label" for="square-radio-1">Không</label>
                                </div>
                                <div class="form-group">
                                     <label class="form-label">Danh mục cha</label>
                                     <select class="form-control m-bot15" name="Parent">
                                        <option value="0">None</option>
                                        @foreach($category as $option)
                                            <option value="{{ $option->id }}"
                                            @if($option->id == $item->parent)
                                                selected
                                            @endif
                                            >{{ $option->cateName }}</option>
                                        @endforeach
                                        
                                    </select>   
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