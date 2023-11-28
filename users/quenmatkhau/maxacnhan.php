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
                                            id="signinUsername" name="email" placeholder="Email">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label>Mật khẩu:</label>
                                        <input type="password" class="form-control validate[required, minSize[6]]"
                                            id="signinPassword" name="password" placeholder="Mật khẩu">
                                    </fieldset>
                                    <?php 
                                        if(isset($thongBao) && ($thongBao != "")) {
                                            echo $thongBao;
                                        }
                                    ?>
                                    <div class="form-action margin-top-lg-30 d-flex align-items-center">
                                        <input type="submit" class="btn button-hover-line tp_button" id="btnSignin" name="dangnhap" value="Đăng nhập">
                                        <a href="?act=dangky" class="form-action-link">Đăng ký</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="recover-password-block col-12 col-lg-6">
                        <div class="recover-password-block-label margin-bottom-lg-30">
                            <div class="alert alert-primary">
                                hãy xác nhận mã . Chúng tôi đã gửi về email của bạn
                            </div>
                        </div>
                        <div class="recover-password-block-form">
                            <form action="?act=maxacnhan" method="post" id="formRecoverPassword">
                                <div class="recover-password-form">
                                    <fieldset class="form-group">
                                        <label>Nhập Mã Xác Nhận</label>
                                        <input type="text" class="form-control validate[required, custom[email]]"
                                            id="recoverPasswordEmail" name="code" placeholder="Mã Xác nhận">
                                        <input type="hidden" name="email" value="<?= $kq['email']?>">
                                    </fieldset>
                                    <?php 
                                        if(isset($thongBao_code['fail']) && $thongBao_code['fail'] != "") {
                                            echo $thongBao_code['fail'];
                                        }
                                        
                                    ?>
                                    <div class="form-action margin-top-lg-30">
                                    <input type="submit" class="btn button-hover-line tp_button" id="btnSignin" name="maxacnhan" value="Xác nhận mã">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>