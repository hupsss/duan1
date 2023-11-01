<?php
    function account() {
        $sql = "SELECT * FROM account order by account_id desc";
        $result = pdo_query($sql);
        return $result;
    }

    function add_account($user,$passwork,$hoTen,$email){
        $sql = "INSERT INTO account(user,passwork,hoTen,email) 
                VALUES('$user','$passwork','$hoTen','$email')";
        pdo_execute($sql);
    }

    function Check_user($user,$passwork) {
        $sql = "SELECT * FROM account WHERE user = '".$user."' AND passwork = '".$passwork."'";
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

    function update_account($account_id,$hoTen,$user,$email,$passwork,$address,$tel) {
        $sql = "UPDATE account SET  hoTen = '$hoTen',user='$user' ,email = '$email', 
                passwork = '$passwork', address = '$address', tel = '$tel' WHERE account_id=$account_id";
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
        $sql = "DELETE FROM account WHERE account_id=$id";
        $result = pdo_execute($sql);
        return $result;
    }

    function count_account() {
        $sql = "SELECT count(account_id) as counttk FROM account";
        $result = pdo_query_one($sql);
        return $result;
    }
?>