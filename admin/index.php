<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
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
                if (isset($_POST['submit']) && $_POST['submit']) {
                    $category_name = $_POST['category_name'];
            
                    // Kiểm tra xem danh mục đã tồn tại trong cơ sở dữ liệu hay chưa
                    $is_category_exists = check_category($category_name);
            
                    if ($is_category_exists) {
                        $tb = "<div style='color:red'>Danh mục đã tồn tại</div>"; // Hiển thị thông báo lỗi
                    } else {
                        // Nếu danh mục chưa tồn tại, thêm nó vào cơ sở dữ liệu
                        add_category($category_name);
                        $tb = "<div style='color:green'>Thêm Thành Công</div>"; // Hiển thị thông báo thành công
                    }
                }
                include "danhmuc/add_category.php";
                break;
            case "editdm":
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $kq = edit_category($id);

                }      
                include "danhmuc/edit_category.php";
                break;
            case "updatedm":
                if(isset($_POST['submit']) && ($_POST['submit'])) {
                    $id = $_POST['category_id'];
                    $category_name = $_POST['category_name'];
                    update_category($id, $category_name);
                }
                $dsdm = loadAll_dm();
                include "danhmuc/list_category.php";
                break;
            case "deledm":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                  $id_category = $_GET['id'];
                  if (dele_category($id_category)) {
                    $tt = "Xóa Thành Công";
                  } else {
                    $tt = "Không Tồn Tại";
                  }
                }
                $dsdm = loadAll_dm();
                include "danhmuc/list_category.php";
                break;
            case "dssp":
                $dssp = loadAll_sp();
                // $ds_dm = categories();
                include "sanpham/list_product.php";
                break;
            case "addsp":
                if (isset($_POST['submit']) && $_POST['submit']) {
                  $product_name = $_POST['product_name'];
                  $price = $_POST['price'];
                  $discount = $_POST['discount'];
                  $descripsion = $_POST['descripsion'];
                  $id_category = $_POST['id_category'];
                  $photo = null;
                  
              
                  // Kiểm tra xem có dữ liệu nào bị để trống không
                  if (empty($product_name) || empty($price) || empty($descripsion) || empty($id_category)) {
                        $tt = "Vui lòng điền đầy đủ thông tin trước khi submit.";
                  } else {
                    $tb = "<div style='color:green'>Thêm Thành Công</div>";
                      if ($_FILES['image']['name'] != "") {
                          $file = $_FILES['image'];
                          //lấy tên file
                          $image = $file['name'];
                          $photo = time() . "-" . $_FILES['image']['name'];
                          move_uploaded_file($file['tmp_name'], "./upload/" . $image);
                      }
              
                      add_product($product_name, $price, $discount, $image, $descripsion, $id_category);
                    //   header("location: index.php?act=dssp");
                  }
              }
                $dsdm = loadAll_dm();
                include "sanpham/add_product.php";
                break;
                case "editsp":

                    $dsdm = loadAll_dm();
      
                    if (isset($_GET['id']) && ($_GET['id'])) {
                      $id = $_GET['id'];
                      $kq = edit_product($id);
                    }
                    if (isset($_POST['submit']) && ($_POST['submit'])) {
                        $id = $_POST['product_id'];
                        $product_name = $_POST['product_name'];
                        $price = $_POST['price'];
                        $discount = $_POST['discount'];
                        $descripsion = $_POST['descripsion'];
                        $id_category = $_POST['id_category'];
                        $photo = null;
                        $tb = "<div style='color:green'>Cập nhập thành công Thành Công</div>";
                        $image = $_POST['image']; // tên ảnh cũ

                      if ($_FILES['image']['name'] != "") {
      
                        $file = $_FILES['image'];
                        //lấy tên file
                        $image = $file['name'];
                        $photo = time() . "-" . $_FILES['image']['name'];
                        move_uploaded_file($file['tmp_name'], "./upload/" . $image);
                      }
      
                      update_product($id, $product_name, $price, $discount, $image, $descripsion, $id_category);
                    //   header("location: index.php?act=dssp");
                    //   $dssp = loadAll_sp();
                    //   include 'danhmuc/list_category.php';
                    }
                    include "sanpham/edit_product.php";
                    break;
                  case "delesp":
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                      $id = $_GET['id'];
                      dele_product($id);
                    }
                    $dssp = loadAll_sp();
                    include "sanpham/list_product.php";
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