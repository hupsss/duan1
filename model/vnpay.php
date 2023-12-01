<?php
    function payment_information($vnp_Amount,$vnp_BankCode,$vnp_BankTranNo,$vnp_CardType,$vnp_OrderInfo,$vnp_PayDate,$vnp_TmnCode,$vnp_TransactionNo,$order_id) {
        $sql = "INSERT INTO payment_information (
            vnp_Amount,
            vnp_BankCode,
            vnp_BankTranNo,
            vnp_CardType,
            vnp_OrderInfo,
            vnp_PayDate,
            vnp_TmnCode,
            vnp_TransactionNo,
            order_id
        ) VALUES (
            '$vnp_Amount',
            '$vnp_BankCode',
            '$vnp_BankTranNo',
            '$vnp_CardType',
            '$vnp_OrderInfo',
            '$vnp_PayDate',
            '$vnp_TmnCode',
            '$vnp_TransactionNo',
            '$order_id'
        )";
        pdo_execute($sql);
        return pdo_execute($sql);
    }

    function loadAll_VnPay($id) {
        $sql = "SELECT payment_information.*, orders.fullName
                FROM payment_information
                JOIN orders ON payment_information.order_id = orders.order_id
                WHERE payment_information.order_id = $id
                ORDER BY payment_information.order_id DESC
                ";
        pdo_query($sql);
        return pdo_query($sql);
    }
?>