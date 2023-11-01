<?php
    function thongke() {
        $sql = "SELECT category_id, category_name, count(product_id) as countpro, min(price) as minpro, max(price) as maxpro,
        ROUND(avg(price), 2) as avgpro
        FROM categories
        JOIN product on category_id = id_category
        GROUP BY category_id, category_name";
        $sql .= " order by category_id desc";
        $result = pdo_query($sql);
        return $result;
    }
?>