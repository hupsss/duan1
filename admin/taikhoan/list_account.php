<style>
    .title {
        margin-top: 30px;
    }

    .btn {
        margin-bottom: 30px;
    }
</style>
<div class="container">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="title" class="h3 mb-2 text-gray-800">Danh Sách Tài Khoản</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Các Loại Sản Phẩm</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mã Tài Khoản</th>
                                <th>Họ và Tên </th>
                                <th>Email</th>
                                <th>Mật Khẩu</th>
                                <th>Hình Ảnh</th>
                                <th>Địa chỉ</th>
                                <th>Số Điên Thoại</th>
                                <th>Chức Nâng</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <?php foreach ($dstk as $tk) : ?>
                                <tr>
                                    <td><?= $tk['account_id'] ?></td>
                                    <td><?= $tk['fullName'] ?></td>
                                    <td><?= $tk['email'] ?></td>
                                    <td><?= $tk['password'] ?></td>
                                    <td>
                                        <img src="upload/<?= $tk['image']?>"  alt="" width="80" height="80">
                                    </td>
                                    <td><?= $tk['address'] ?></td>
                                    <td><?= $tk['tel'] ?></td>
                                    <td><?= $tk['role'] ?></td>
                                    <td>
                                        <a href="index.php?act=deletk&id=<?= $tk['account_id'] ?>" onclick="return confirm('ban muon xoa khong')"><button type="button" class="btn btn-danger">Xóa</button></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>