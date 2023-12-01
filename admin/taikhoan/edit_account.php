<div class="container bootstrap snippets bootdey">
    <br>
    <h1 class="text-success">Cập nhập tài khoản</h1>
    <hr>
    <div class="row">
        <!-- edit form column -->
        <div class="col-md-9 personal-info">



           
            <form class="form-horizontal" role="form" action="?act=updatetk" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Họ và tên</label>
                    <div class="col-lg-8">
                        <input type="hidden" name="account_id" value="<?= $tk['account_id'] ?>">
                        <input class="form-control" type="text" name="fullName" value="<?= $tk['fullName'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email</label>
                    <div class="col-lg-8">
                        <input class="form-control disabled" type="email" name="email" value="<?= $tk['email'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Ảnh</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="file" name="image" value="<?= $tk['image'] ?>" readonly disabled>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Dịa chỉ</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" name="address" value="<?= $tk['address'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Số điện thoại</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" name="tel" value="<?= $tk['tel'] ?>" readonly>
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="col-lg-3 control-label">Chức năng</label>
                    <div class="col-lg-8">
                        <select class="form-control" name="role">
                            <!-- Thêm các tùy chọn cho số điện thoại -->
                            <option value="0">Người dùng</option>
                            <option value="1">Admin</option>
                            <!-- Các tùy chọn khác có thể thêm vào đây -->
                        </select>
                    </div>
                </div>
                
                <input type="submit" class="btn button-hover-line tp_button" id="btnSignin" name="capnhapchucnang" value="cập nhập tài khoản">
            </form>
        </div>
    </div>
</div>
<hr>
