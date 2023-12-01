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
                                <th>STT</th>
                                <th>Số Tiền Thanh Toán</th>
                                <th>Mã Ngân Hàng</th>
                                <th>Số Giao Dịch Ngân Hàng</th>
                                <th>Loại Thẻ Thanh Toán</th>
                                <th>Thông Tin Đơn Hàng</th>
                                <th>Ngày Thanh Toán</th>
                                <th>Mã Cổng Thanh Toán</th>
                                <th>Số Giao Dịch</th>
                                <th>Tên Người Thanh Toán</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <?php foreach ($thongtin_vnpay as $vn) : ?>

                                <tr>
                                    <td><?= $vn['id'] ?></td>
                                    <td><?= $vn['vnp_Amount'] ?></td>
                                    <td><?= $vn['vnp_BankCode'] ?></td>
                                    <td><?= $vn['vnp_BankTranNo'] ?></td>
                                    <td><?= $vn['vnp_CardType'] ?></td>
                                    <td><?= $vn['vnp_OrderInfo'] ?></td>
                                    <td><?= $vn['vnp_PayDate'] ?></td>
                                    <td><?= $vn['vnp_TmnCode'] ?></td>
                                    <td><?= $vn['vnp_TransactionNo'] ?></td>
                                    <td><?= $vn['fullName'] ?></td>

                                </tr>
                            <?php endforeach ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>