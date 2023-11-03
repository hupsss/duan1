<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "header.php";
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act =  $_GET['act'];
        switch ($act) {
            case "trangchu":
                include "main.php";
                break;
            case "dsdm":
                $dsdm = loadAll_dm();
                include "danhmuc/list_category.php";
                break;
            case "adddm":
                if(isset($_POST['submit']) && ($_POST['submit'])) {
                    $category_name = $_POST['category_name'];
                    add_category($category_name);
                }
                $dsdm = loadAll_dm();
                include "danhmuc/add_category.php";
                break;
            default:
                include "main.php";
                break;
        }
    } else {
        include "main.php";
    }
    
    include "footer.php";
?>
<script src="../assets/admin.js"></script>