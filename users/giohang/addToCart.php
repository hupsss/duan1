<?php
    session_start();
    ob_start();
    include "../../model/pdo.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Kiểm tra xem các trường dữ liệu tồn tại trong $_POST hay không
        if (isset($_POST['psId'], $_POST['psName'], $_POST['psPrice'],$_POST['psQuantity'])) {
            // Lấy thông tin đặt hàng từ session (ví dụ: order_id)
            $order_id = $_SESSION['order_id']; // Thay thế bằng cách lấy thông tin đặt hàng thực tế từ session
    
            // Lấy dữ liệu từ request
            $psId = $_POST['psId'];
            $psName = $_POST['psName'];
            $psPrice = $_POST['psPrice'];
            $psQuantity = $_POST['psQuantity'];
            $total = (int)$psPrice * (int)$psQuantity;

            // Thêm dữ liệu vào bảng order_detail
            $sql = "INSERT INTO order_detail (id_order, id_product, quantity, price, total, status, created_time) VALUES ('$order_id', '$psId', '$psQuantity', '$psPrice', '$total', 1, NOW())";
            pdo_execute($sql);
            var_dump(pdo_execute($sql));
            die;
    
            // Xử lý dữ liệu trả về nếu cần
            echo 'Thêm sản phẩm vào đơn hàng thành công!';
        } else {
            echo 'Thiếu trường bắt buộc.';
        }
    } else {
        // Nếu không phải là request POST, trả về lỗi
        echo 'Phương thức yêu cầu không hợp lệ.';
    }
?>