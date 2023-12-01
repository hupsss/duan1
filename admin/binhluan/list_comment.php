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
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mã Bình luận</th>
                                <th>Tên người dùng</th>
                                <th>Tên sản phẩm</th>
                                <th>Nội Dung</th>
                                <th>Ngày bình luận</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <?php foreach ($dsbl as $bl) : ?>
                                <tr>
                                    <td><?= $bl['comment_id'] ?></td>
                                    <td><?= $bl['fullName'] ?></td>
                                    <td><?= $bl['product_name'] ?></td>
                                    <td><?= $bl['content'] ?></td>
                                    <td><?= $bl['date_comment'] ?></td>
                                    <td>
                                        <a href="index.php?act=delebl&id=<?= $bl['comment_id'] ?>" onclick="return confirm('ban muon xoa khong')"><button type="button" class="btn btn-danger">Xóa</button></a>
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