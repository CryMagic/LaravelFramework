<div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> Đăng ký </h3>
            </div>
            <form id="formRegister" action="{{ route('user.register') }}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="control-group"><a class="fb_button btn btn-block btn-lg" href="#"> Đăng nhập bằng facebook </a>
                </div>
                <h5 style="padding:10px 0 10px 0;" class="text-center"> OR </h5>
                <div class="form-group reg-username">
                    <div>
                        <input name="FirstName" id="FirstName" class="form-control"  size="20" placeholder="Firstname" type="text">
                    </div>
                </div>
                <div class="form-group reg-username">
                    <div>
                        <input name="LastName" class="form-control input" size="20" placeholder="Lastname" type="text">
                    </div>
                </div>
                <div class="form-group reg-email">
                    <div>
                        <input name="Email" id="Email" class="form-control input" size="20" placeholder="Enter Email" type="email">
                        <span class="error"><label id="emailUnique" class="error" style="display:none"></label></span>
                        <img style="display:none" id="iconloading" src="{{ url('images/load/loader.gif') }}" width="10%"/>
                    </div>
                </div>
                <div class="form-group reg-password">
                    <div>
                        <input name="Password" class="form-control input" size="20" placeholder="Password" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                        <input name="rememberme" id="rememberme" value="forever" checked="checked" type="checkbox">
                        Nhớ mật khẩu </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name="submit" class="btn btn-block btn-lg btn-primary" value="Đăng ký" type="submit">
                    </div>
                </div>
            </div>
            </form>
            <div class="modal-footer">
                <p class="text-center"> Tồn tại tài khoản? <a data-toggle="modal" data-dismiss="modal" href="#ModalLogin">
                    Đăng nhập </a>
                </p>
            </div>
        </div>
    </div>
</div>