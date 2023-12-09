<?php
    // lấy tất cả các trường dữ liệu trong bảng tài khoản
    function loadAll_account() {
        $sql = "SELECT * FROM account order by account_id desc";
        $result = pdo_query($sql);
        return $result;
    }

    function add_account($fullName, $password, $email, $tel) {
        // Kiểm tra xem email đã tồn tại chưa
        $existingEmailCheck = "SELECT * FROM account WHERE email = '".$email."'";
        
        $result = pdo_query($existingEmailCheck);
        // var_dump($result);
        // die;
        // Lấy số lượng
        $count = count($result);
    
        // Nếu số lượng lớn hơn 0, email đã tồn tại
        if ($count > 0 ) {
            return false; // Email đã tồn tại
        } else {
    
        // Nếu email là duy nhất, tiến hành thêm mới
        $sql = "INSERT INTO account (fullName, password, email, tel) 
                VALUES ('$fullName', '$password', '$email', '$tel')";
        pdo_execute($sql);
    
        return true; // Thêm mới thành công
        }
    }

    function Check_user($email,$password) {
        $sql = "SELECT * FROM account WHERE email = '".$email."' AND password = '".$password."'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function Check_email($email) {
        $sql = "SELECT * FROM account WHERE email = '".$email."' ";
        $result = pdo_query_one($sql);
        if($result) {
            return $result;
        } else {
            return false; // Trả về giá trị false nếu email không tồn tại
        }
    }

    function edit_account($id) {
        $sql = "SELECT * FROM account WHERE account_id=$id";
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_account($id,$fullName,$email, $image,$address,$tel) {
        if($image != "" ) {
            $sql = "UPDATE account 
                    SET  fullName = '$fullName', email = '$email', image = '$image', address = '$address', tel = '$tel' 
                    WHERE account_id=$id";
        } else {
            $sql = "UPDATE account 
                    SET  fullName = '$fullName', email = '$email', address = '$address', tel = '$tel' 
                    WHERE account_id=$id";
        }
        $result = pdo_execute($sql);
        return $result;
    }

    function update_account_admin($account_id,$role) {
        $sql = "UPDATE account SET role = '$role' WHERE account_id=$account_id";
        $result = pdo_execute($sql);
        return $result;
    }


    function dele_account($id) {
        // Xóa chi tiết đơn hàng liên quan
        $sqlDeleteOrderDetails = "DELETE FROM order_detail 
                                 WHERE id_order IN (SELECT order_id FROM orders WHERE id_account = $id)";
        pdo_execute($sqlDeleteOrderDetails);
    
        // Xóa payment_information liên quan
        $sqlDeletePaymentInfo = "DELETE FROM payment_information 
                                 WHERE order_id IN (SELECT order_id FROM orders WHERE id_account = $id)";
        pdo_execute($sqlDeletePaymentInfo);
    
        // Xóa đơn hàng liên quan
        $sqlDeleteOrders = "DELETE FROM orders WHERE id_account = $id";
        pdo_execute($sqlDeleteOrders);
    
        // Xóa bình luận liên quan
        $sqlDeleteComments = "DELETE FROM comment WHERE id_account = $id";
        pdo_execute($sqlDeleteComments);
    
        // Xóa tài khoản
        $sqlDeleteAccount = "DELETE FROM account WHERE account_id = $id AND role = 0";
        $result = pdo_execute($sqlDeleteAccount);
    
        return $result;
    }

    function count_account() {
        $sql = "SELECT count(account_id) as counttk FROM account";
        $result = pdo_query_one($sql);
        return $result;
    }

    function forgetPass($password,$email) {
        $sql = "UPDATE account SET password = '$password' Where email = '$email'";
        $result = pdo_execute($sql);
        return $result;
    }
    function isValidPhoneNumber($tel) {
        // Số điện thoại Việt Nam có thể bắt đầu bằng +84 hoặc 0, tiếp theo là 9 hoặc 10 chữ số
        $pattern = '/^(0|\+84)(9\d|1\d{2})\d{7}$/';
        return preg_match($pattern, $tel);
    }
    function isValidPassword($password) {
        // Mật khẩu phải chứa ít nhất 6 ký tự, 1 chữ in hoa và 1 số
        $pattern = '/^(?=.*[A-Z])(?=.*\d).{6,}$/';
        return preg_match($pattern, $password);
    }
?>