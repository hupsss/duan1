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
        <h1 class="title" class="h3 mb-2 text-gray-800">Chi Tiết Đơn Hàng</h1>
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mã chi tiết đơn hàng</th>
                                <th>Mã đơn hàng </th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng sản phẩm</th>
                                <th>Giá Tiền</th>
                                <th>Tông tiền của sản phẩm</th>
                                <th>Trang thái đơn hàng</th>
                                <th>Ngày đặt đơn</th>
                                <th>Thêm</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <?php foreach ($ctdh as $dh) : ?>

                                <tr>
                                    <td><?= $dh['detail_id'] ?></td>
                                    <td><?= $dh['id_order'] ?></td>
                                    <td><?= $dh['product_name'] ?></td>
                                    <td><?= $dh['quantity'] ?></td>
                                    <td><?= $dh['price'] ?></td>
                                    <td><?= $dh['total'] ?></td>
                                    <td>
                                        <?php
                                            if ($dh['status'] == 1) {
                                                echo "<div style='color:yellow'>Dang chờ xử lý</div>";
                                            } else if ($dh['status'] == 2) {
                                                echo "<div style='color:green'>Đã giao hàng</div>";
                                            } else {
                                                echo "<div style='color:red'>Đơn hàng bị hủy</div>";
                                            }

                                        ?>
                                    </td>
                                    <td><?= $dh['created_time'] ?></td>
                                    <td>
                                        <a href="index.php?act=chitietdonhang&id=<?= $dh['detail_id'] ?>"><button type="button" class="btn btn-warning">Sửa</button></a>
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