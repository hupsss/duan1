<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$id_product = $_REQUEST['id_product'];
$dsbl = load_comment($id_product)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/binhluan.css">
    <title>Document</title>
</head>
<style>
    .btn-submit {
        background-color: #4caf50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<body>
    <div class="pview-faq-box fb-comments" data-href="http://t0444.store.nhanh.vn/bo-ban-an-stefano-p18810311.html" data-numposts="5" data-colorscheme="light">
        <div class="container-comment">
            <ul class="comments" id="comments-list">
                <?php foreach ($dsbl as $bl) : ?>
                    <!-- <li class="comment">
                        <div class="user-info"><img src="admin/upload/<?= $bl['image'] ?>" alt="User Image">
                            <div class="username"><?= $bl['fullName'] ?></div>
                        </div>
                        <div class="comment-text"><?= $bl['content'] ?></div>
                        <div class="comment-date"><?= $bl['date_comment'] ?></div>
                        <div class="actions">
                            <?php if (isset($_SESSION['email']) && ($_SESSION['email']['role'] === 0)) : ?>
                                <a href="#" class="edit-comment" data-comment-id="<?= $bl['comment_id'] ?>">Edit</a>
                                <a href="#" class="delete-comment" data-comment-id="<?= $bl['comment_id'] ?>">Delete</a>
                            <?php endif; ?>
                        </div>

                    </li> -->
                    <!-- Thêm ô input và đặt thuộc tính display: none; -->
                    <li class="comment">
                        <div class="user-info">
                            <img src="admin/upload/<?= $bl['image'] ?>" alt="User Image">
                            <div class="username"><?= $bl['fullName'] ?></div>
                        </div>
                        <div class="comment-text" id="comment-text-<?= $bl['comment_id'] ?>">
                            <?= $bl['content'] ?>
                        </div>
                        <input class="edit-comment-input" type="text" id="edit-comment-input-<?= $bl['comment_id'] ?>" value="<?= $bl['content'] ?>" style="display: none;">
                        <div class="comment-date"><?= $bl['date_comment'] ?></div>
                        <div class="actions">
                            <?php if (isset($_SESSION['email']) && ($_SESSION['email']['role'] === 0)) : ?>
                                <a href="#" class="edit-comment" data-comment-id="<?= $bl['comment_id'] ?>">Edit</a>
                                <a href="#" class="delete-comment" data-comment-id="<?= $bl['comment_id'] ?>">Delete</a>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
            <?php
            if (isset($_SESSION['email']) && ($_SESSION['email']['role'] === 0)) :
            ?>
                <div class="comment-form">
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="hidden" name="id_product" value="<?= $id_product ?>">
                        <textarea name="content" placeholder="Write your comment here..."></textarea>
                        <input class="btn-submit" type="submit" name="submit" value="Gửi bình luận">
                    </form>
                </div>
            <?php endif ?>
            <?php
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $content = $_POST['content'];
                $id_product = $_POST['id_product'];
                $id_account = $_SESSION['email']['account_id'];
                $date_comment = date("h:i:s a d/m/Y");
                add_comment($content, $id_product, $id_account, $date_comment);
                header("location:" . $_SERVER['HTTP_REFERER']);
            }
            ?>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        // ... (các phần khác của mã JavaScript)

        // Xử lý khi nhấp vào nút Sửa
        $('.edit-comment').on('click', function(e) {
            e.preventDefault();
            var commentId = $(this).data('comment-id');

            // Lấy giá trị hiện tại của bình luận
            var currentComment = $('#comment-text-' + commentId).text();

            // Đặt giá trị vào ô input
            $('#edit-comment-input-' + commentId).val(currentComment);

            // Ẩn văn bản bình luận và hiển thị ô input
            $('#comment-text-' + commentId).hide();
            $('#edit-comment-input-' + commentId).show();
        });

        // Xử lý khi nhấn vào nút Lưu (để lưu sửa đổi)
        $('.save-comment').on('click', function(e) {
            e.preventDefault();
            var commentId = $(this).data('comment-id');

            // Lấy giá trị từ ô input sau khi sửa đổi
            var editedContent = $('#edit-comment-input-' + commentId).val();

            // Gửi thông tin sửa đổi đến server bằng Ajax hoặc form submit
            $.ajax({
                type: 'POST',
                url: 'users/binhluan/edit_comment.php',
                data: {
                    comment_id: commentId,
                    edited_content: editedContent
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        // Xử lý thành công, ví dụ: thông báo thành công
                        console.log(response.message);

                        // Cập nhật văn bản bình luận hiển thị trên trang
                        $('#comment-text-' + commentId).text(editedContent);

                        // Ẩn ô input và hiển thị lại văn bản bình luận
                        $('#edit-comment-input-' + commentId).hide();
                        $('#comment-text-' + commentId).show();
                    } else {
                        // Xử lý lỗi, ví dụ: thông báo lỗi
                        console.error(response.message);
                    }
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });
        });

        // Xử lý khi nhấp vào nút Xóa
        $('.delete-comment').on('click', function(e) {
            e.preventDefault();
            var commentId = $(this).data('comment-id');
            var confirmDelete = confirm('Bạn có muốn xóa không?');

            if (confirmDelete) {
                // Gửi yêu cầu xóa đến server bằng Ajax
                $.ajax({
                    type: 'POST',
                    url: 'users/binhluan/delete_comment.php', // Đặt đường dẫn đến tệp PHP xử lý xóa ở đây
                    data: {
                        comment_id: commentId
                    },
                    dataType: 'json', // Đặt kiểu dữ liệu mong đợi là JSON
                    success: function(response) {
                        if (response.status === 'success') {
                            // Xóa bình luận khỏi giao diện nếu xóa thành công
                            $('#comment-' + commentId).remove();
                            console.log(response.message);

                            // Reload trang sau khi xóa nếu cần
                            // window.location.reload();
                        } else {
                            // Xử lý lỗi, ví dụ: thông báo lỗi
                            console.error(response.message);
                        }
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            }
        });
    });
</script>

</html>