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
        <h1 class="title" class="h3 mb-2 text-gray-800">Danh Sách Đơn Hàng</h1>
        <div class="card shadow mb-4">
          
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Tên Người đặt </th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Ghi chú</th>
                                <th>Phương thức thanh toán</th>
                                <th>Ngày đặt đơn</th>
                                <th>Tên tài Khoản</th>
                                <th>Thêm</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <?php foreach ($dsdh as $dh) : ?>
                                <tr>
                                    <td><?= $dh['order_id'] ?></td>
                                    <td><?= $dh['nguoidat'] ?></td>
                                    <td><?= $dh['tel'] ?></td>
                                    <td><?= $dh['address'] ?></td>
                                    <td><?= $dh['note'] ?></td>
                                    <td><?= $dh['method'] ?></td>
                                    <td><?= $dh['created_time'] ?></td>
                                    <td><?= $dh['nameAC'] ?></td>
                                    <td colspan="6"> 
                                        <span><a href="index.php?act=chitietdonhang&id=<?= $dh['order_id'] ?>"><button type="button" class="btn btn-warning">Chi tiết</button></a></span>
                                        <?php if(isset($dh['method']) && ($dh['method'] == "vnpay")) : ?>
                                        <span><a href="index.php?act=thongtinthanhtoan&id=<?= $dh['order_id'] ?>"><button type="button" class="btn btn-warning">Chi tiết Thanh toán vnPay</button></a></span>
                                        <?php endif?>
                                        <span><a href="index.php?act=deledh&id=<?= $dh['order_id'] ?>" onclick="return confirm('ban muon xoa khong')"><button type="button" class="btn btn-danger">Xóa</button></a></span>
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