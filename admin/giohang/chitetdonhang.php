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
                                        <select class="status-select" data-detail-id="<?= $dh['detail_id'] ?>">
                                            <option value="1" <?= $dh['status'] == 1 ? 'selected' : '' ?>>Đang chờ xử lý</option>
                                            <option value="0" <?= $dh['status'] == 0 ? 'selected' : '' ?>>Đã giao hàng</option>
                                            <option value="2" <?= $dh['status'] == 2 ? 'selected' : '' ?>>Đơn hàng bị hủy</option>
                                        </select>
                                    </td>
                                    <td><?= $dh['created_time'] ?></td>

                                </tr>
                            <?php endforeach ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(function() {
        $(".status-select").on("change", function() {
            var detailId = $(this).data("detail-id");
            console.log(detailId);
            var newStatus = $(this).val();

            // Gửi yêu cầu AJAX để cập nhật trạng thái
            $.ajax({
                url: "giohang/capnhaptrangthai.php",
                method: "POST",
                data: {
                    detail_id: detailId,
                    new_status: newStatus
                },
                success: function(response) {
                    // Xử lý phản hồi từ máy chủ (nếu cần)
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Xử lý lỗi (nếu có)
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>