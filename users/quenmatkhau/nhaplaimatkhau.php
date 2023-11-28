<section class="section-signin">
    
    <div class="signin-box padding-lg-30">
        <div class="container">
            <div class="row">
                <h3 class="site-title col-12 margin-bottom-lg-30 tp_title">Nhập lại mật khẩu</h3>
                <div class="signin-block col-12 col-lg-6">
                    <div class="signin-block-form">
                        <form action="?act=nhaplaimatkhau" method="post" id="formSignin">
                            <div class="signin-form">
                                <fieldset class="form-group">
                                    <label>Mật Khẩu mới</label>
                                    <input type="text" class="form-control validate[required, custom[email]]" id="signinUsername" name="newPassword" value="<?php if(isset($_POST['newPassword'])) echo $_POST['newPassword'] ?>" placeholder="Mật Khẩu mới">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Nhập lại mật khẩu</label>
                                    <input type="text" class="form-control validate[required, custom[email]]" id="signinUsername" name="rePassword" value="<?php if(isset($_POST['rePassword'])) echo $_POST['rePassword']?>" placeholder="Nhập lại mật khẩu">
                                </fieldset>
                                <?php
                                        if(isset($thongBao_nhaplai['fail']) && $thongBao_nhaplai['fail'] != "") {
                                            echo $thongBao_nhaplai['fail'];
                                        }
                                        if(isset($thongBao_nhaplai['success']) && $thongBao_nhaplai['success'] != "") {
                                            echo $thongBao_nhaplai['success'];
                                        }
                                ?>
                                <div class="form-action margin-top-lg-30 d-flex align-items-center">
                                    <input type="submit" class="btn button-hover-line tp_button" id="btnSignin" name="nhaplaimatkhau" value="Đăng nhập">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>