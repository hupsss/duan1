<?php
function product()
{
    $sql = "SELECT product_id, product_name,price,discount,image,descripsion, category_name FROM product JOIN categories on id_category = category_id order by product_id desc";
    $result = pdo_query($sql);
    return $result;
}
function product_home()
{
    $sql = "SELECT product_id, product_name,price,discount,image,descripsion, category_name FROM product JOIN categories on id_category = category_id where 1 order by product_id desc limit 0,9";
    $result = pdo_query($sql);
    return $result;
}
function product_top10()
{
    $sql = "SELECT product_id, product_name,price,discount,image,descripsion, category_name FROM product JOIN categories on id_category = category_id where 1 order by view desc limit 0,10";
    $result = pdo_query($sql);
    return $result;
}

function view($id)
{
    $sp = edit_product_ct($id);
    $luotxem =  $sp['view'] + 1;
    $sql = " UPDATE product SET view = '$luotxem' WHERE product_id = '$id'";
    $result = pdo_query($sql);
    return $result;
}

function add_product($product_name, $price, $discount, $image, $descripsion, $id_category)
{
    $sql = "INSERT INTO product(product_name,price,discount,image,ngayNhap,descripsion,id_category) 
                VALUES('$product_name','$price','$discount','$image',NOW(),'$descripsion','$id_category')";
    pdo_execute($sql);
}
function edit_product($id)
{
    $sql = "SELECT * FROM product WHERE product_id=$id";
    $result = pdo_query_one($sql);
    return $result;
}
function edit_product_ct($id)
{
    $sql = "SELECT * FROM product WHERE product_id=$id";
    $result = pdo_query_one($sql);
    return $result;
}
function edit_product_cl($id, $id_category)
{
    $sql = "SELECT * FROM product WHERE id_category = $id_category AND product_id <> $id";
    $result = pdo_query($sql);
    return $result;
}
function update_product($id, $product_name, $price, $discount, $image, $descripsion, $id_category)
{
    if ($image != "") {
        $sql = "UPDATE product SET product_name= '$product_name', price = '$price',discount='$discount' , image = '$image', 
                descripsion = '$descripsion', id_category = '$id_category' WHERE product_id=$id";
    } else {
        $sql = "UPDATE product SET product_name= '$product_name', price = '$price',discount='$discount' ,descripsion = '$descripsion', 
                    id_category = '$id_category' WHERE product_id=$id";
    }
    $result = pdo_execute($sql);
    return $result;
}
function dele_product($id)
{
    $sql = "DELETE FROM product WHERE product_id=$id";
    $result = pdo_execute($sql);
    return $result;
}

function timkiem_dm($id = 0, $search  = "")
{
    $sql = "SELECT product_id, product_name, price, discount, image, descripsion, category_name 
            FROM product 
            JOIN categories ON id_category = category_id 
            WHERE 1";
 

    if ($id > 0) {
        $sql .= " AND category_id = $id";
    }

    if (!empty($search)) {
        $sql .= " AND product_name LIKE '%".$search."%'";
    }



    // $sql.= " ORDER BY product_id desc";
    $result = pdo_query($sql);
    return $result;
}
    
function count_product() {
    $sql = "SELECT count(product_id) as countsp FROM product";
    $result = pdo_query_one($sql);
    return $result;
}