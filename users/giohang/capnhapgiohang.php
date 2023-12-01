<?php
    session_start();
    ob_start();

    include "../../model/pdo.php";
    if(isset($_POST['id']) && isset($_POST['qty'])) {
    
        $id = $_POST['id'];
        $qty = intval($_POST['qty']); // Chuyển đổi thành số nguyên

        if($qty >= 0) { // Kiểm tra giá trị hợp lệ
            if(isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                if(array_key_exists($id, $cart))  {
                    if($qty > 0) {
                        $cart[$id] = array(
                            'product_name' => $cart[$id]['product_name'],
                            'image' => $cart[$id]['image'],
                            'price' => $cart[$id]['price'],
                            'quantity' => $qty
                        );
                    } else {
                        unset($cart[$id]);
                    }
                    $_SESSION['cart'] = $cart;
                }
            }
    }
}
?>