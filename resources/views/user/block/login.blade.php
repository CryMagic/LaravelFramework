<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden=" true"> &times; </button>
                <h3 class="modal-title-site text-center"> Đăng nhập </h3>
            </div>
            <form id="formLogin" action="{{ route('user.login') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group login-username">
                        <div>
                            <input name="Email" id="login-user" class="form-control input" size="20" placeholder="Nhập email ..." type="email">
                        </div>
                    </div>
                    <div class="form-group login-password">
                        <div>
                            <input name="Password" id="login-password" class="form-control input" size="20" placeholder="Nhập password" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="checkbox login-remember">
                                <label>
                            <input name="rememberme" value="forever" checked="checked" type="checkbox">
                            Ghi nhớ mật khẩu </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <input name="submit" class="btn btn-block btn-lg btn-primary" value="LOGIN" type="submit">
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <p class="text-center"> Chưa có tài khoản? <a data-toggle="modal" data-dismiss="modal" href="#ModalSignup"> Đăng ký. </a> <br>
                    <a href="{{ route('forget-password') }}"> Quên mật khẩu </a>
                </p>
            </div>
        </div>
    </div>
</div>