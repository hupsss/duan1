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
                        <th scope="col">Mã chi tiết đơn hàng</th>
                        <th scope="col">Mã đơn hàng </th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Hình Ảnh</th>
                        <th scope="col">Số lượng sản phẩm</th>
                        <th scope="col">Giá Tiền</th>
                        <th scope="col">Tông tiền của sản phẩm</th>
                        <th scope="col">Trang thái đơn hàng</th>
                        <th scope="col">Ngày đặt đơn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ctdh as $dh) : ?>
                        <tr>
                            <td><?= $dh['detail_id'] ?></td>
                            <td><?= $dh['id_order'] ?></td>
                            <td><?= $dh['product_name'] ?></td>
                            <td>
                                <img src="admin/upload/<?= $dh['image']?>" width="80px" alt="">
                            </td>
                            <td><?= $dh['quantity'] ?></td>
                            <td><?= $dh['price'] ?></td>
                            <td><?= $dh['total'] ?></td>
                            <td>
                               <?php 
                                if($dh['status'] == 1) {
                                    echo "<span style=''>Đang Chờ Xử Lý</span>";
                                } else if($dh['status'] == 0) {
                                    echo "<span style='background-color:lightgreen'>Đã Giao Hàng </span>";
                                } else if($dh['status'] == 2){
                                    echo "<span style='background-color:yellow'>Đang Giao Hàng </span>";
                                } else {
                                    echo "<span style='background-color:red'>Dơn Hàng Bị Hủy</span>";
                                }
                                
                               ?>
                            </td>
                            <td><?= $dh['created_time'] ?></td>
                        </tr>
                        <!-- Các dòng khác giữ nguyên -->
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<div>
    <br>
</div>