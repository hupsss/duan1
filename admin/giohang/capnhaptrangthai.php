<?php
    include "../../model/pdo.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Kết nối đến cơ sở dữ liệu và thực hiện cập nhật trạng thái
        $detail_id = $_POST['detail_id'];
        $new_status = $_POST['new_status'];

        // Thực hiện câu truy vấn SQL để cập nhật trạng thái
        $sql = "UPDATE order_detail SET status = $new_status WHERE detail_id = $detail_id";
        pdo_execute($sql);

        // Trả về phản hồi (có thể là thông báo thành công hoặc mã lỗi)
        echo "Cập nhật trạng thái thành công";
        exit;
    }
?>