<?php
    function loadAll_account() {
        $sql = "SELECT * FROM account order by account_id desc";
        $result = pdo_query($sql);
        return $result;
    }

    // function add_account($fullName,$password,$email,$tel){
    //     $sql = "INSERT INTO account(fullName,password,email,tel) 
    //             VALUES('$fullName','$password','$email','$tel')";
    //     pdo_execute($sql);
    // }

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
        return $result;
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

    function update_account_admin($account_id,$hoTen,$user,$email,$passwork,$address,$tel,$role) {
        $sql = "UPDATE account SET  hoTen = '$hoTen',user='$user' ,email = '$email', 
                passwork = '$passwork', address = '$address', tel = '$tel', role = '$role' WHERE account_id=$account_id";
        $result = pdo_execute($sql);
        return $result;
    }


    function dele_account($id) {
        $sql = "DELETE FROM account WHERE account_id=$id AND role = 0";
        $result = pdo_execute($sql);
        return $result;
    }

    function count_account() {
        $sql = "SELECT count(account_id) as counttk FROM account";
        $result = pdo_query_one($sql);
        return $result;
    }
?>