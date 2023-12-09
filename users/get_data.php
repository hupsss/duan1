<?php
include "../model/pdo.php";

if (isset($_POST['action'])) {

    $action = $_POST['action'];
    $minimumPrice = $_POST['minimun_price'];
    $maximumPrice = $_POST['maximun_price'];
    $category_id = $_POST['category_id'];
    $sql = "SELECT * FROM product WHERE id_category = '".$category_id."'";

    if (isset($_POST['minimun_price'])) {

        $sql .= " AND price BETWEEN  " . $minimumPrice . " and " . $maximumPrice;
    }

    if (isset($_POST['color'])) {
        $color_filter = $_POST['color']; // Lấy giá trị màu từ biểu mẫu
    
        // Chuẩn bị câu truy vấn SQL
        $sql = "SELECT * FROM product WHERE id_category = '".$category_id."'"; // WHERE 1 is always true, acts as a placeholder
    
        // Kiểm tra xem mảng có phần tử hay không
        if (!empty($color_filter)) {
            // Chuyển mảng thành chuỗi và thêm vào câu truy vấn SQL
            $color_filter_string = implode("','", $color_filter);
            $sql .= " AND color IN ('".$color_filter_string."')";
        }
    }
    

    if (isset($_POST['material'])) {
        $material_filter = $_POST['material'];
    
        // Chuẩn bị câu truy vấn SQL
        $sql = "SELECT * FROM product WHERE id_category = '".$category_id."'";
    
        // Kiểm tra xem mảng có phần tử hay không
        if (!empty($material_filter)) {
            // Nếu chỉ có một phần tử, không cần dấu nháy đơn xung quanh giá trị trong IN
            if (count($material_filter) > 1) {
                $material_filter_string = implode("','", $material_filter);
                $sql .= " AND material IN ('".$material_filter_string."')";
            } else {
                $sql .= " AND material = '".$material_filter[0]."'";
            }
        }
    }


        if (isset($_POST['size'])) {
            $size_filter = $_POST['size'];
        
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT * FROM product WHERE id_category = '".$category_id."'";
        
            // Kiểm tra xem mảng có phần tử hay không
            if (!empty($size_filter)) {
                // Nếu chỉ có một phần tử, không cần dấu nháy đơn xung quanh giá trị trong IN
                if (count($size_filter) > 1) {
                    $size_filter_string = implode("','", $size_filter);
                    $sql .= " AND size IN ('".$size_filter_string."')";
                } else {
                    $sql .= " AND size = '".$size_filter[0]."'";
                }
            }
        }

    $result = pdo_query($sql);
    $count = count($result);
    $output = "";

    if ($count > 0) {
        foreach ($result as $sp) {
            $output .= '
            <div class="product-box col-6 col-lg-3 margin-bottom-lg-30" data-psId="18810307" data-storeId="64461">
                <div class="product-img position-relative">
                    <a href="?act=chitiet&id=' . $sp['product_id'] . '">
                        <img data-sizes="auto" class="lazyload" src="admin/upload/' . htmlentities($sp['image']) . '" width="200" height="200" alt="">
                    </a>
                </div>
                <div class="product-info">
                    <div class="product-rating text-center">
                        <p id="voteView0" class="si ic voteView"></p>
                    </div>
                    <h6 class="product-name text-center">
                        <a href="?act=chitiet&id=' . $sp['product_id'] . '" class="tp_product_name">' . htmlentities($sp['product_name']) . '</a>
                    </h6>
                    <div class="product-price-box text-center">
                        <div class="product-price tp_product_price">' . htmlentities(number_format($sp['price'])) . '</div>
                    </div>
                    <div class="product-action text-center">
                        <a href="?act=chitiet&id=' . $sp['product_id'] . '" class="btn button-hover-line tp_button">
                            <span>Tùy chọn</span>
                        </a>
                    </div>
                </div>
            </div>
        ';
        }
    } else {
        $output = '<h3>không tìm  thấy sản phẩm nào</h3>';
    }
    echo $output;
}
