<?php
include "../../model/pdo.php";
include "../../model/binhluan.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $commentId = $_POST['comment_id'];
    $editedContent = $_POST['edited_content'];

    // Gọi hàm sửa đổi bình luận
    $success = edit_comment($commentId, $editedContent);

    if ($success) {
        echo json_encode(['status' => 'success', 'message' => 'Comment edited successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to edit comment']);
    }
} else {
    // Xử lý lỗi nếu có
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}


?>
