<?php
    function getColorFromProduct($id) {
        $sql = "SELECT DISTINCT color FROM product Where id_category = $id";
        $result = pdo_query($sql);
        return $result;
    }
    function getSizeFromProduct($id) {
        $sql = "SELECT DISTINCT size FROM product Where id_category = $id";
        $result = pdo_query($sql);
        return $result;
    }
    function getMaterialFromProduct($id) {
        $sql = "SELECT DISTINCT material FROM product Where id_category = $id";
        $result = pdo_query($sql);
        return $result;
    }
?>