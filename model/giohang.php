<?php
    function loadAll_Order() {
        $sql = "SELECT od.order_id, od.fullName as nguoidat , od.tel, od.address, od.note, od.method, od.created_time, ac.fullName as nameAC
                FROM orders od
                JOIN account  ac ON id_account = account_id
                ORDER BY order_id DESC";
        $result = pdo_query($sql);
        return $result;
    }

    function delete_Order($id) {
        $sql = "DELETE FROM orders where order_id = $id";
        $result = pdo_execute($sql);
        return $result;
    }

    function loadAll_Orderdetail($id) {
        $sql = "SELECT ct.detail_id, ct.id_order, ct.quantity, ct.price, ct.total, ct.status,ct.created_time, sp.product_name
                FROM order_detail ct
                JOIN product  sp ON id_product = product_id
                Where id_order = $id
                ORDER BY ct.detail_id DESC";
        $result = pdo_query($sql);
        return $result;
    }
?>