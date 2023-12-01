<?php
    session_start();
    ob_start();

    include "../../model/pdo.php";

    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "SELECT * FROM product WHERE product_id = $id";
        $result = pdo_query($sql);
    
        if(!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
    
        $cart = $_SESSION['cart'];
    
        if (!isset($cart[$id])) {
            $cart[$id] = array(
                'product_name' => $result[0]['product_name'], // Sử dụng chỉ số 0
                'image' => $result[0]['image'],
                'price' => $result[0]['price'],
                'quantity' => 1
            );
        } else {
            // Xử lý nếu sản phẩm đã tồn tại trong giỏ hàng
            // Ví dụ: tăng số lượng sản phẩm
            $cart = $_SESSION['cart'];
            if(array_key_exists($id,$cart))  {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = array(
                    'product_name' => $result[0]['product_name'], // Sử dụng chỉ số 0
                    'image' => $result[0]['image'],
                    'price' => $result[0]['price'],
                    'quantity' => 1
                );
            }
        }
    
        // Lưu giỏ hàng vào session
        $_SESSION['cart'] = $cart;

       $quantity = 0;
       $total = 0;
       foreach($cart as $item) {
            $quantity += (int)$item['quantity'];
            $total += (int)$item['quantity'] * (int)$item['price'];
       }
       echo $quantity."-".number_format($total);
        
    }
    

?>