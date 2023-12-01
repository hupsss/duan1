<?php
    session_start();
    ob_start();
    include "../../model/pdo.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Kiểm tra xem các trường dữ liệu tồn tại trong $_POST hay không
        if (isset($_POST['psId'], $_POST['psName'], $_POST['psPrice'], $_POST['psColor'], $_POST['psSize'], $_POST['psQuantity'])) {
            // Lấy dữ liệu từ request
            $psId = $_POST['psId'];
            $psName = $_POST['psName'];
            $psPrice = $_POST['psPrice'];
            $psColor = $_POST['psColor'];
            $psSize = $_POST['psSize'];
            $psQuantity = $_POST['psQuantity'];


            // $_SESSION['cart'] = array(
            //     'psId' => $psId,
            //     'psName' => $psName,
            //     'psPrice' => $psPrice,
            //     'psColor' => $psColor,
            //     'psSize' => $psSize,
            //     'psQuantity' => $psQuantity,
            // );
            // $cart = $_SESSION['cart'];
            // var_dump($_SESSION['cart'])            ;
        } else {
            echo 'Missing required fields.';
        }
    } else {
        // Nếu không phải là request POST, trả về lỗi
        echo 'Invalid request method.';
    }
?>