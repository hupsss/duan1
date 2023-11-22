<section class="section-signup">
        <div class="site-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="breadcrumb-block">
                        <a href="/" class="breadcrumb-link">Trang chủ</a>
                        <span class="breadcrumb-icon">>></span>
                        <span class="breadcrumb-item">Đăng ký tài khoản</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="signup-box padding-lg-30">
            <div class="container">
                <div class="row">
                    <h3 class="site-title col-12 margin-bottom-lg-30 tp_title">Đăng ký tài khoản</h3>
                    <div class="signup-box-label col-12 margin-bottom-lg-30">
                        Nếu chưa có tài khoản vui lòng đăng ký tại đây.</div>
                    <div class="signup-form col-12">
                        <form action="?act=dangky" method="post" id="formSignup" class="row">
                            <div class="signup-form-left col-12 col-lg-6">
                                <fieldset class="form-group">
                                    <label>Họ tên:</label>
                                    <input type="text" class="form-control validate[required]" id="signupFullName"
                                        name="fullName" placeholder="Họ tên">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Email:</label>
                                    <input type="email" class="form-control validate[required, custom[email]]"
                                        id="signupEmail" name="email" placeholder="Email">
                                </fieldset>
                                <?php if(isset($thongBao) && ($thongBao != "")) {
                                        echo $thongBao ;
                                        }
                                        // echo "1213"; 
                                ?>
                                <div class="form-action margin-top-lg-30 d-none d-lg-block">
                                    <input type="submit" class="btn button-hover-line tp_button" name="dangky" id="btnSignup" value="Đăng ký">
                                </div>
                            </div>
                            <div class="signup-form-right col-12 col-lg-6">
                                <fieldset class="form-group">
                                    <label>Điện thoại:</label>
                                    <input type="text" class="form-control validate[required, custom[phone]]"
                                        id="signupMobile" name="tel" placeholder="Điện thoại">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Mật khẩu:</label>
                                    <input type="password" class="form-control validate[required, minSize[6]]"
                                        id="signupPassword" name="password" placeholder="Mật khẩu">
                                </fieldset>
                                
                                <div class="form-action margin-top-lg-30 d-lg-none">
                                    <input type="submit" class="btn button-hover-line" name="dangky" id="btnSignup" value="Đăng ký">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>