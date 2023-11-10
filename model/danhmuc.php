<?php
    function loadAll_dm() {
        $sql = "SELECT * FROM categories order by category_id desc";
        $result = pdo_query($sql);
        return $result;
    }
    
    
    function add_category($category_name) {
        $sql = "INSERT INTO categories(category_name) VALUES('$category_name')";
        $result = pdo_execute($sql);
       return $result;
    }
    function edit_category($id) {
        $sql = "SELECT * FROM categories WHERE category_id=$id";
        $result = pdo_query_one($sql);
        return $result;
    }
    function update_category($id,$category_name) {
        $sql = "UPDATE categories SET category_name = '$category_name' WHERE category_id=$id ";
        $result = pdo_execute($sql);
        return $result;
    }
    function dele_category($id_category) {
        try {
            // Bước 1: Xóa tất cả sản phẩm trong danh mục
            $sql_delete_products = "DELETE FROM product WHERE id_category=$id_category";
            pdo_query($sql_delete_products);
           
    
            // Bước 2: Xóa danh mục
            $sql_delete_category = "DELETE FROM categories WHERE category_id = $id_category";
            pdo_query($sql_delete_category);
            
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    function count_category() {
        $sql = "SELECT count(category_id) as countdm FROM categories";
        $result = pdo_query_one($sql);
        return $result;
    }
    function check_category($category_name) {
        $sql = "SELECT category_name FROM categories WHERE category_name = '$category_name'";
        $result = pdo_query($sql);
        return $result;
    }
?>