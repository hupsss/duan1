<?php
    function add_comment($content,$id_product,$id_account,$date_comment) {
        $sql = "INSERT INTO comment(content,id_product,id_account,date_comment) VALUES('$content','$id_product','$id_account','$date_comment')";
        $result = pdo_execute($sql);
       return $result;
    }
    function comment($id_product) {
        $sql = "SELECT comment_id, content, date_comment, hoTen FROM comment JOIN account on id_account = account_id WHERE 1 ";
            if($id_product > 0) {
                $sql .= " AND id_product = '".$id_product."'";
            }
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
