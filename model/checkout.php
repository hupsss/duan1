<?php
function get_last_order_id()
{
    $sql = "SELECT MAX(order_id) AS last_order_id FROM orders";
    $result = pdo_query_one($sql);
    return $result['last_order_id'];
}

function add_orders($fullName, $tel, $address, $note, $method, $id_account)
{
    $sql = "INSERT INTO orders(fullName,tel,address,note,method,created_time,id_account) 
                VALUES('$fullName','$tel','$address','$note','$method',NOW(),'$id_account')";

    pdo_execute($sql);
    // Trả về ID của hàng vừa chèn vào cuối cùng
    return get_last_order_id();
}
