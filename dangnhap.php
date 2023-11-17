<section class="section-signin">
        <div class="site-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="breadcrumb-block">
                        <a href="/" class="breadcrumb-link">Trang chủ</a>
                        <span class="breadcrumb-icon">>></span>
                        <span class="breadcrumb-item">Đăng nhập tài khoản</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="signin-box padding-lg-30">
            <div class="container">
                <div class="row">
                    <h3 class="site-title col-12 margin-bottom-lg-30 tp_title">Đăng nhập tài khoản</h3>
                    <div class="signin-block col-12 col-lg-6">
                        <div class="signin-block-label margin-bottom-lg-30">
                            Nếu bạn đã có tài khoản, đăng nhập tại đây.</div>
                        <div class="signin-block-form">
                            <form action="?act=dangnhap" method="post" id="formSignin">
                                <div class="signin-form">
                                    <fieldset class="form-group">
                                        <label>Email:</label>
                                        <input type="email" class="form-control validate[required, custom[email]]"
                                            id="signinUsername" name="username" placeholder="Email">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label>Mật khẩu:</label>
                                        <input type="password" class="form-control validate[required, minSize[6]]"
                                            id="signinPassword" name="password" placeholder="Mật khẩu">
                                    </fieldset>
                                    <div class="form-action margin-top-lg-30 d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn button-hover-line tp_button"
                                            id="btnSignin">
                                            <span>Đăng nhập</span>
                                        </a>
                                        <a href="?act=dangky" class="form-action-link">Đăng ký</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="recover-password-block col-12 col-lg-6">
                        <div class="recover-password-block-label margin-bottom-lg-30">
                            Bạn quên mật khẩu? Nhập địa chỉ email để lấy mật khẩu qua email.</div>
                        <div class="recover-password-block-form">
                            <form method="post" id="formRecoverPassword">
                                <div class="recover-password-form">
                                    <fieldset class="form-group">
                                        <label>Email:</label>
                                        <input type="email" class="form-control validate[required, custom[email]]"
                                            id="recoverPasswordEmail" name="Email" placeholder="Email">
                                    </fieldset>
                                    <div class="form-action margin-top-lg-30">
                                        <a href="javascript:void(0);" class="btn button-hover-line tp_button"
                                            id="btnRecoverPassword">
                                            <span>Lấy lại mật khẩu</span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>