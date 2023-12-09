<div>

    <br>
</div>
<div class="container">
    <div class="col-lg-12">
        <div class="table-responsive">
            <h3 class="col-lg-12">Lịch sử mua hàng</h3>
            <br>
            <table class="table fs-15 align-middle table-nowrap">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Tên Người đặt </th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Ghi chú</th>
                        <th scope="col">Ngày đặt đơn</th>
                        <th scope="col">Thêm</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lsmh as $dh) : ?>  
                            <tr>
                                <td><?= $dh['order_id'] ?></td>
                                <td><?= $dh['nguoidat'] ?></td>
                                <td><?= $dh['tel'] ?></td>
                                <td><?= $dh['address'] ?></td>
                                <td><?= $dh['note'] ?></td>
                                <?php
                                if ($dh['method'] == "cod") {
                                    echo "<span style='background-color:yellow'>Chưa Thanh Toán</span>";
                                } else {
                                    echo "<span style='background-color:lightgreen'>Đã Thanh Toán</span>";
                                }

                                ?>
                                <td><?= $dh['created_time'] ?></td>
                                <td>
                                    <a href="?act=chitietdonhang&id=<?= $dh['order_id'] ?>" data-bs-toggle="modal" class="btn btn-success btn-sm">Chi tiết</a>
                                    <?php if ($dh['status'] == 1) : ?>
                                        <a href="?act=huydonhang&id=<?= $dh['order_id'] ?>" data-bs-toggle="modal" class="btn btn-danger btn-sm">Hủy Đơn</a>
                                    <?php endif ?>
                                </td>

                            </tr>
                       
                            <tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<div>
    <br>
</div>