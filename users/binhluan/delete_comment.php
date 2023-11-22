<?php
include "../../model/pdo.php";
include "../../model/binhluan.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_product = $_POST['comment_id'];

    // Gọi hàm xóa bình luận
    $success = dele_comment($id_product);

    if ($success) {
        echo json_encode(['status' => 'success', 'message' => 'Comment deleted successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to delete comment']);
    }
} else {
    // Xử lý lỗi nếu có
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
