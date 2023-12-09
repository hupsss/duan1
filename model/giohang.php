<?php
    function loadAll_Order() {
        $sql = "SELECT od.order_id, od.fullName as nguoidat , od.tel, od.address, od.note, od.method, od.created_time, ac.fullName as nameAC
                FROM orders od
                JOIN account  ac ON id_account = account_id
                ORDER BY order_id DESC";
        $result = pdo_query($sql);
        return $result;
    }

    function loadAll_Order_user($id) {
        $sql = "SELECT od.order_id, od.fullName as nguoidat, od.tel, od.address, od.note, od.method, od.created_time, ac.account_id, ac.fullName as nameAC , odetail.status
                FROM orders od
                JOIN account ac ON od.id_account = ac.account_id
                LEFT JOIN order_detail odetail ON od.order_id = odetail.id_order
                WHERE ac.account_id = $id
                ORDER BY od.order_id DESC";
        $result = pdo_query($sql);
        return $result;
    }
    function delete_Order($id) {
        // Xóa tất cả các thông tin thanh toán từ bảng payment_information trước
        $sql_delete_payment_info = "DELETE FROM payment_information WHERE order_id = $id";
        pdo_execute($sql_delete_payment_info);
    
        // Xóa tất cả các chi tiết đơn đặt hàng từ bảng order_detail trước
        $sql_delete_order_detail = "DELETE FROM order_detail WHERE id_order = $id";
        pdo_execute($sql_delete_order_detail);
    
        // Sau đó, xóa dòng từ bảng orders
        $sql_delete_order = "DELETE FROM orders WHERE order_id = $id";
        return pdo_execute($sql_delete_order);
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
    function loadAll_Orderdetail_user($id) {
        $sql = "SELECT ct.detail_id, ct.id_order, ct.quantity, ct.price, ct.total, ct.status,ct.created_time, sp.product_name, sp.image
                FROM order_detail ct
                JOIN product  sp ON id_product = product_id
                Where id_order = $id
                ORDER BY ct.detail_id DESC";
        $result = pdo_query($sql);
        return $result;
    }

    function load_Status($id) {
        $sql = "SELECT  status FROM order_detail 
                JOIN orders 
                ON id_order = order_id
                WHERE id_order = $id";
        return pdo_query($sql);
    }

    function count_orders() {
        $sql = "SELECT count(order_id) as countdh FROM orders";
        $result = pdo_query_one($sql);
        return $result;
    }

    function huyDon($id) {
        $sql = "UPDATE order_detail SET status = 3 WHERE id_order = $id";
         return pdo_execute($sql);
    }

?>