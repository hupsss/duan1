<section class="section-signin">

    <div class="signin-box padding-lg-30">
        <div class="container">
            <div class="row">
                <h3 class="site-title col-12 margin-bottom-lg-30 tp_title">Chi Tiết Thanh Toán</h3>
                <div class="signin-block col-12 col-lg-6">
                    <div class="signin-block-form">
                        <form action="?act=checkout" method="post" id="formSignin">
                            <div class="signin-form">
                                <?php if(isset($_SESSION['email'])) {
                                    extract($_SESSION['email']);
                                } ?>
                                <fieldset class="form-group">
                                    <label>Họ và Tên</label>
                                    <input type="text" class="form-control validate[required, custom[email]]" id="fullName" value="<?= $fullName?>" name="fullName" placeholder="Họ và Tên">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="number" class="form-control validate[required, minSize[6]]" id="tel" value="<?= $tel?>" name="tel" placeholder="Số điện thoại">
                                </fieldset>

                                <fieldset class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control validate[required, minSize[6]]" id="address" value="<?= $address?>" name="address" placeholder="Địa chỉ">
                                </fieldset>

                                <fieldset class="form-group">
                                    <label>Ghi chú</label>
                                    <input type="text" class="form-control validate[required, minSize[6]]" id="note" name="note" placeholder="Ghi Chú">
                                </fieldset>

                                <fieldset class="form-group">
                                    <label>Phương thức thanh toán</label>
                                    <select class="form-control validate[required]" id="method" name="method">
                                        <option value="cod">Thanh toán khi nhận hàng</option>
                                        <option value="vnpay">VN PAY</option>
                                        <!-- Thêm các phương thức thanh toán khác nếu cần -->
                                    </select>
                                </fieldset>
                                <?php
                                    if(isset($err) && ($err != "")) {
                                        echo $err;
                                    }
                                    if(isset($success) && ($success != "")) {
                                        echo $success;
                                    }
                                
                                ?>
                                <div class="form-action margin-top-lg-30 d-flex align-items-center">
                                    <input type="submit" class="btn button-hover-line tp_button" id="btnSignin" name="redirect" value="Đặt Hàng">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>