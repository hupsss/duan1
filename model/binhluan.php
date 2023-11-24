<?php
    function add_comment($content,$id_product,$id_account,$date_comment) {
        $sql = "INSERT INTO comment(content,id_product,id_account,date_comment) VALUES('$content','$id_product','$id_account','$date_comment')";
        $result = pdo_execute($sql);
       return $result;
    }
    function edit_comment($commentId, $editedContent) {
        // Chắc chắn rằng các biến đầu vào được đưa vào câu lệnh SQL an toàn
        $editedContent = addslashes($editedContent);
    
        // Tạo câu lệnh SQL để cập nhật nội dung của bình luận
        $sql = "UPDATE comment SET content = '$editedContent' WHERE comment_id = $commentId";
    
        // Thực thi câu lệnh SQL
        $result = pdo_execute($sql);
    
        // Trả về kết quả thực hiện (true nếu thành công, false nếu không)
        return $result;
    }

    function load_comment($id_product) {
        $sql = "SELECT comment_id, content, id_product, id_account, date_comment, fullName ,image FROM comment JOIN account on id_account = account_id WHERE 1 ";
            if($id_product > 0) {
                $sql .= " AND id_product = '".$id_product."'";
            }
        $sql .= "order by comment_id desc";
            $result = pdo_query($sql);
            return $result;
        
    }
    function loadAll_comment() {
        $sql = "SELECT comment_id, content, id_product, date_comment, fullName, product_name
                FROM comment 
                JOIN account 
                ON id_account = account_id 
                JOIN product 
                ON id_product = product_id
                WHERE 1 ";
        $sql .= "order by comment_id desc";

        $result = pdo_query($sql);
        return $result;
        
    }
    function dele_comment($comment_id) {
        $sql = "DELETE FROM comment WHERE comment_id = $comment_id";
            pdo_query($sql);
    }
    function count_comment() {
        $sql = "SELECT count(comment_id) as countcm FROM comment";
        $result = pdo_query_one($sql);
        return $result;
    }
?>
