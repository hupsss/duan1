<div class="container bootstrap snippets bootdey">
    <br>
    <h1 class="text-success">Cập nhập tài khoản</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
            <div class="text-center">
                    <img src="admin/upload/<?= $image ?>" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6><?= $fullName ?></h6>
            </div>
        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info">

            <h3>Thông tin cá nhân</h3>

            <form class="form-horizontal" role="form" action="?act=capnhaptaikhoan" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Họ và tên</label>
                    <div class="col-lg-8">
                        <input type="hidden" name="account_id" value="<?= $account_id ?>">
                        <input class="form-control" type="text" name="fullName" value="<?= $fullName ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email</label>
                    <div class="col-lg-8">
                        <input class="form-control disabled" type="email" name="email" value="<?= $email ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Ảnh</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="file" name="image" value="<?= $image ?>">
                       
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Dịa chỉ</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" name="address" value="<?= $address ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Số điện thoại</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" name="tel" value="<?= $tel ?>">
                    </div>
                </div>
                <input type="submit" class="btn button-hover-line tp_button" id="btnSignin" name="capnhaptaikhoan" value="cập nhập tài khoản">
            </form>
        </div>
    </div>
</div>
<hr>