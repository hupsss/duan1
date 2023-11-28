<?php
session_start();
ob_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/phong.php";
include "model/checkout.php";
include "mail/index.php";

$mail = new Mailer();
?>
<!DOCTYPE html>
<html lang="vi-VN" data-nhanh.vn-template="T0444">

<head>
    <meta name="robots" content="noindex" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Nội thất nhà xinh</title>
    <meta name="keywords" content="N&#x1ED9;i&#x20;th&#x1EA5;t&#x20;nh&#xE0;&#x20;xinh">
    <meta name="description" content="N&#x1ED7;&#x20;l&#x1EF1;c&#x20;nghi&#xEA;n&#x20;c&#x1EE9;u&#x20;nh&#x1EEF;ng&#x20;t&#x1EAD;p&#x20;qu&#xE1;n,&#x20;th&#xF3;i&#x20;quen&#x20;sinh&#x20;ho&#x1EA1;t&#x20;c&#x1EE7;a&#x20;ng&#x01B0;&#x1EDD;i&#x20;d&#xE2;n&#x20;Vi&#x1EC7;t&#x20;Nam&#x20;trong&#x20;cu&#x1ED9;c&#x20;s&#x1ED1;ng&#x20;t&#x1EA1;i&#x20;c&#xE1;c&#x20;&#x0111;&#xF4;&#x20;th&#x1ECB;,&#x20;Libra&#x20;Furniture&#x20;&#x0111;&#xE3;&#x20;cho&#x20;ra&#x20;&#x0111;&#x1EDD;i&#x20;m&#x1ED9;t&#x20;ph&#x01B0;&#x01A1;ng&#x20;ph&#xE1;p&#x20;ti&#x1EBF;p&#x20;c&#x1EAD;n&#x20;chu&#x1EA9;n&#x20;m&#x1EF1;c,&#x20;khoa&#x20;h&#x1ECD;c&#x20;&#x0111;&#x1EC3;&#x20;gi&#x1EA3;i&#x20;quy&#x1EBF;t&#x20;h&#x1EBF;t&#x20;nh&#x1EEF;ng&#x20;m&#x1ED1;i&#x20;lo&#x20;ng&#x1EA1;i&#x20;c&#x1EE7;a&#x20;b&#x1EA1;n&#x20;khi&#x20;v&#x1EC1;&#x20;nh&#xE0;&#x20;m&#x1EDB;i.&#x20;Lu&#xF4;n&#x20;s&#x1EB5;n&#x20;s&#xE0;ng&#x20;gi&#xFA;p&#x20;&#x0111;&#x1EE1;&#x20;b&#x1EA1;n&#x20;v&#x1EDB;i&#x20;&#x0111;&#x1ED9;i&#x20;ng&#x0169;&#x20;ki&#x1EBF;n&#x20;tr&#xFA;c&#x20;s&#x01B0;&#x20;uy&#x20;t&#xED;n&#x20;v&#xE0;&#x20;t&#x1EAD;n&#x20;t&#xE2;m&#x20;ph&#x1EE5;c&#x20;v&#x1EE5;.">
    <meta property="og&#x3A;title" content="N&#x1ED9;i&#x20;th&#x1EA5;t&#x20;nh&#xE0;&#x20;xinh">
    <meta property="og&#x3A;url" content="http&#x3A;&#x2F;&#x2F;t0444.store.nhanh.vn">
    <meta name="DC.language" content="scheme&#x3D;utf-8&#x20;content&#x3D;vi">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="google-site-verification" content="">
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Include jQuery UI -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="assets/css/binhluan.css">
    <link rel="stylesheet" href="assets/css/giohang.css">
    <link href="https&#x3A;&#x2F;&#x2F;pos.nvncdn.net&#x2F;ced45f-64461&#x2F;store&#x2F;20191211_2kgqtalKtKvV8nuf3zMskGLx.png" rel="icon" type="image&#x2F;vnd.microsoft.icon">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/fontAwesome/font-awesome-4.7.0.min.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/bootstrap/bootstrap.4.3.1.min.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/owlCarousel/owl.carousel.min.2.3.4.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/font.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/tp/T0444/css/styles.css?v=6" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/tp/T0444/css/responsive.css?v=6" type="text/css">





    <!-- <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.min.js?v=2"></script> -->
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/lib.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/owlCarousel/owl.carousel.min.2.3.4.js?v=2"></script>


    <style type="text/css"></style>
    <style type="text/css">
        img {
            max-width: 100%;
        }

        img.lazyload {
            opacity: 0.001;
            object-fit: scale-down !important;
        }

        .fb-customerchat>span>iframe.fb_customer_chat_bounce_out_v2 {
            max-height: 0 !important;
        }

        .fb-customerchat>span>iframe.fb_customer_chat_bounce_in_v2 {
            max-height: calc(100% - 80px) !important;
        }

        #slider-range {
            width: 80%;
            margin: 20px;
        }

        #price-show {
            margin-top: 10px;
        }
    </style>
    <script src="https://pos.nvnstatic.net/cache/location.vn.js?v=231013_172145" defer></script>
    <script src="https://web.nvnstatic.net/js/lazyLoad/lazysizes.min.js" async></script>


    <style>
        figure.image {
            clear: both;
            display: table;
            margin: .9em auto;
            min-width: 50px;
            text-align: center;
            width: auto !important;
        }

        figure.image img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            min-width: 100%;
        }

        figure.image>figcaption {
            background-color: #f7f7f7;
            caption-side: bottom;
            color: #333;
            display: table-caption;
            font-size: .75em;
            outline-offset: -1px;
            padding: .6em;
            word-break: break-word;
        }

        figure.image img,
        img.image_resized {
            height: auto !important;
            aspect-ratio: auto !important;
        }
    </style>
    <script src="https://web.nvnstatic.net/js/translate/vi-vn.js" defer></script>

</head>

<body class="tp_background tp_text_color">
    <input type="hidden" id="checkStoreId" value="64461">
    <!-- header -->
    <?php
    $dsdm = loadAll_dm();
    include "users/header.php";
    ?>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/tp/T0444/js/index.js?v=2"></script>
    <!-- main -->
    <div id="loaddata">
        <?php
        $dssp = product_home();
        $dsdm = loadAll_dm();
        $spdb =  loadAll_sp_DB();
        $top10sp = product_top10();
        if (isset($_GET['act']) && ($_GET['act'] != "")) {
            $act =  $_GET['act'];
            switch ($act) {
                case  "trangchu":
                    include "users/main.php";
                    break;
                case "tintuc":
                    include "users/tintuc.php";
                    break;
                case "lienhe":
                    include "users/lienhe.php";
                    break;
                case "chitiet":
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $id = $_GET['id'];
                        view($id);
                        $ctsp = edit_product_ct($id);
                        extract($ctsp);
                        $spcl = edit_product_cl($id, $id_category);
                        $dmct = loadOne_dm($id);
                    }
                    include "users/chitiet.php";
                    break;
                case "searchsp":
                    if (isset($_POST['search']) && ($_POST['search'] != "")) {
                        $search = $_POST['search'];
                    } else {
                        $search = '';
                    }
                    if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                        $id = $_GET['category_id'];
                    } else {
                        $id = 0;
                    }
                    $dssp = timkiem_dm($id, $search);
                    include "users/sanpham.php";
                    break;
                case "timkiemdm":
                    if (isset($_POST['search']) && ($_POST['search'] != "")) {
                        $search = $_POST['search'];
                    } else {
                        $search = '';
                    }


                    if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                        $id = $_GET['category_id'];
                    } else {
                        $id = 0;
                    }

                    $dssp = timkiem_dm($id, $search);
                    $color = getColorFromProduct($id);
                    $size = getSizeFromProduct($id);
                    $material = getMaterialFromProduct($id);
                    $sanPhamBanChay =  productBanChay();
                    // var_dump($color);
                    // die;
                    include_once "Users/danhsachdanhmuc.php";
                    break;
                case "dangky":
                    if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                        $fullName = $_POST['fullName'];
                        $password = $_POST['password'];
                        $email = $_POST['email'];
                        $tel = $_POST['tel'];

                        // Kiểm tra nếu có bất kỳ trường nào trống
                        if (empty($fullName) || empty($password) || empty($email) || empty($tel)) {
                            $thongBao = "<div style='color:red'>Vui lòng điền đầy đủ thông tin.</div>";
                        } else {
                            // Thử thêm tài khoản mới
                            $result = add_account($fullName, $password, $email, $tel);
                            // var_dump($result);
                            // die;    
                            if ($result) {
                                $thongBao = "<div style='color:green'>Thêm thành công</div>";
                            } else {
                                $thongBao = "<div style='color:red'>Email đã tồn tại</div>";
                            }
                        }
                    }
                    include "dangky.php";
                    break;
                case "dangnhap":
                    if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        // Kiểm tra xem tên đăng nhập và mật khẩu có rỗng không
                        if (empty($email) || empty($password)) {
                            $thongBao = "<div style='color:red'>Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu</div>";
                        } else {
                            $check_user = Check_user($email, $password);
                            if (is_array($check_user)) {
                                $_SESSION['email'] = $check_user;
                                // Sử dụng đường dẫn tương đối để điều hướng
                                header("location: " . ($_SESSION['email']['role'] === 1 ? "admin/index.php?act=trangchu" : "index.php?act=trangchu"));
                            } else {
                                $thongBao = "<div style='color:red'>Email hoặc tài khoản không hợp lệ. Vui lòng nhập lại</div>";
                            }
                        }
                    }
                    include "dangnhap.php";
                    break;
                case "capnhaptaikhoan":
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $id = $_GET['id'];
                        $kq = edit_account($id);
                    }
                    if (isset($_POST['capnhaptaikhoan']) && ($_POST['capnhaptaikhoan'])) {
                        $id = $_POST['account_id'];
                        $fullName = $_POST['fullName'];
                        $email = $_POST['email'];
                        $tel = $_POST['tel'];
                        $address = $_POST['address'];

                        if ($_FILES['image']['name'] != "") {

                            $file = $_FILES['image'];
                            //lấy tên file
                            $image = $file['name'];
                            $photo = time() . "-" . $_FILES['image']['name'];
                            move_uploaded_file($file['tmp_name'], "admin/upload/" . $image);
                        }
                        update_account($id, $fullName, $email, $image, $address, $tel);
                    }
                    include "users/capnhaptaikhoan.php";
                    break;

                case "quenmatkhau":
                    if(isset($_POST['quenmatkhau']) && ($_POST['quenmatkhau'])) {
                        $email = $_POST['email'];
                        $thongBao_mk = array();
                    
                        if(empty($email)){
                            $thongBao_mk['email'] = "<div style='color:red'>Email không được để trống</div>";
                        }
                    
                        // Hiển thị thông báo lỗi
                        foreach ($thongBao_mk as $message) {
                           
                        }
                    
                        if(empty($thongBao_mk)) {
                            $check_email = Check_email($email);
                    
                            if($check_email) {
                                $code = substr(rand(0,999999),0,6);
                                $title = "Quên mật Khẩu";
                                $content = "Mã xác nhận của bạn là <span style='color:green'>$code</span>";
                                $mail->sendMail($title, $content, $email);
                    
                                $_SESSION['email'] = $email;
                                $_SESSION['confirmation_code'] = $code;
                                header("location: ?act=maxacnhan");
                            } else {
                                $thongBao_em= "<div style='color:red'>Email không tồn tại trong hệ thống</div>";
                            }
                        }
                    }
                    include "dangnhap.php";
                    break;
                case "maxacnhan":
                    if(isset($_POST['maxacnhan']) && ($_POST['maxacnhan'])) {
                        $thongBao_code = array();
                        if($_POST['code'] != $_SESSION['confirmation_code']) {
                            $thongBao_code['fail'] = "<div style='color:red'>Mã xác nhận không hợp lệ !!!</div>";
                        } else {
                            header('location: ?act=nhaplaimatkhau');
                        }
                    }
                    include "users/quenmatkhau/maxacnhan.php";
                    break;
                case "nhaplaimatkhau":
                    if(isset($_POST['nhaplaimatkhau']) && ($_POST['nhaplaimatkhau'])) {
                        $thongBao_nhaplai = array();
                        if($_POST['newPassword'] != $_POST['rePassword']) {
                            $thongBao_nhaplai['fail'] = "<div style='color:red'>Nhập lại mật khẩu không khớp !!</div>";
                        } else {
                            $thongBao_nhaplai['success'] = "<div style='color:green'>Dổi mật khẩu thành công ! Chuyển hướng sau 3s.</div>";
                            forgetPass($_POST['newPassword'],$_SESSION['email']);
                            header("refresh:3; url=index.php?act=dangnhap");
                        }
                    }
                    include "users/quenmatkhau/nhaplaimatkhau.php";
                    break;
                case "dangxuat":
                    session_destroy();
                    header("location: index.php?act=trangchu");
                    include "users/main.php";
                    break;
                case "giohang":
                    include "users/giohang.php";
                    break;
                case "xoagiohang":
                    unset($_SESSION['cart']);
                    header('location: ?act=trangchu');
                    break;
                case "checkout":
                    if(isset($_POST['addNew']) && ($_POST['addNew'])) {
                        $fullName = $_POST['fullName'];
                        $tel = $_POST['tel'];
                        $address = $_POST['address'];
                        $note = $_POST['note'];
                        $method = $_POST['method'];
                        $id_account = $_SESSION['email']['account_id'];
                        if (empty($fullName) || empty($tel) || empty($address) || empty($note) || empty($method) || empty($id_account)) {
                            $err = "<div style='color:red'>Bạn chưa nhập đủ thông tin</div>";
                        } else {
                            $order_id = add_orders($fullName,$tel,$address,$note,$method,$id_account);
                            foreach($_SESSION['cart'] as $key => $item) {
                                $quantity = $item['quantity'];
                                $price = $item['price'];
                                $total += (int)$item['quantity'] * (int)$item['price'];

                                $sql = "INSERT INTO order_detail(id_order,id_product,quantity,price,total,status,created_time) 
                                        VALUES('$order_id','$key','$quantity','$price','$total',1,now())";
                                pdo_execute($sql);
                            }
                            unset($_SESSION['cart']);
                            $success = "<div style='color:green'>Đặt hàng thành công</div>";
                        }
                    }
                    include "users/checkout.php";
                    break;
                default:
                    include "users/main.php";
                    break;
            }
        } else {
            include "users/main.php";
        }
        ?>
    </div>


    <!-- footer -->
    <?php include "users/footer.php" ?>
    <input type="hidden" class="fanpageId" value="">
    <input type="hidden" id="bussinessId" value="64461">
    <input type="hidden" value="" id="uctk" name="uctk" />
    <input type="hidden" id="clienIp" value="14.177.96.253">
    <input type="hidden" value="" id="hasIdentity">
    <div class="site-identified col-12">
        <div class="d-flex align-items-center justify-content-center" data-runtime="Memory:3.92 mb - Time:0.17s">
            <span>Thiết kế bởi</span>
            <img src="https://web.nvnstatic.net/images/favicon.ico?v=2" alt="nhanh_icon">
            <a href="https://www.facebook.com/phamsyhuan2004" target="_blank" rel="nofollow">Phạm Sỹ Huấn</a>
        </div>
    </div>
    <style>
        .site-identified {
            padding: 10px 0;
            background: #000;
            color: #fff;
        }

        .site-identified img {
            width: 17px;
            height: 17px;
            margin: 0 5px;
        }

        .site-identified a {
            color: #fff;
        }
    </style>
</body>
<!-- Xử Lý bộ lọc -->
<script>
    $(document).ready(function() {
        filter_data();

        function filter_data() {
            var action = 'action';
            var currentURL = window.location.search;
            const urlParams = new URLSearchParams(currentURL);
            const category_id = urlParams.get('category_id');
            var minimun_price = $('#hidden_minimum_price').val();
            var maximun_price = $('#hidden_maximum_price').val();
            var color = get_filter('color');
            var size = get_filter('size');
            var material = get_filter('material');

            $.ajax({
                url: "users/get_data.php",
                type: "POST",

                data: {
                    action: action,

                    minimun_price: minimun_price,
                    maximun_price: maximun_price,
                    category_id: category_id,
                    color: color,
                    size: size,
                    material: material
                },
                success: function(data) {
                    $('.pagination').html(data);
                }

            });

        }

        function get_filter(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function() {
                filter.push($(this).val());
            });
            return filter;
        }
        $('.common_selector').click(function() {
            filter_data();
        })

        // Khởi tạo thanh trượt
        $("#slider-range").slider({
            range: true,
            min: 10000,
            max: 10000000,
            values: [10000, 10000000],
            step: 10000,
            stop: function(event, ui) {
                $('#price-show').html('Từ: ' + ui.values[0] + ' - ' + ui.values[1]);
                $('#hidden_minimum_price').val(ui.values[0]);
                $('#hidden_maximum_price').val(ui.values[1]);
                filter_data();
            }
        });
    });
</script>
<!-- Thêm vào giỏ hàng -->
<script>
    function addCart(id) {
        $.post("users/giohang/themgiohang.php", {
            'id': id
        }, function(data) {
            item = data.split("-");
            $('#qty').text(item[0]);
            $('#total').text(item[1]);
        });
    }

    // function updateCart(id) {
    //     num = $('#qty_'+id).val();
    //     $.post('users/giohang/capnhapgiohang.php', {
    //         'id': id,
    //         'qty': num
    //     }, (data) => {
    //         $('#header').load('?act=giohang #header');
    //         $('#listCart').load("?act=giohang #listCart");
    //     });
    // }
        
    function up(event) {
        btnUp = event.target
        btn = btnUp.closest("button")
        const parentElement = $(btnUp).closest("div");
        const id = $(btn).attr("data-id");
        var input = parentElement.find("input");
        
        var num = Number(input.val());
        console.log(id,'nam')
        num= num+1;
        input.val(num)
        $.post('users/giohang/capnhapgiohang.php', {
            'id': id,
            'qty': num
        }, (data) => {
            // $('#header').load('?act=giohang #header');
            $('#listCart').load("?act=giohang #listCart");
        });
    }

    function down(event) {
        btnUp = event.target
        btn = btnUp.closest("button")
        const parentElement = $(btnUp).closest("div");
        const id = $(btn).attr("data-id");
        // alert(id)
        var input = parentElement.find("input");
      
        var num = Number(input.val());
        console.log(id,'nam')
        num= num-1;
        input.val(num)
        $.post('users/giohang/capnhapgiohang.php', {
            'id': id,
            'qty': num
        }, (data) => {
            $('#header').load('?act=giohang #header');
            $('#listCart').load("?act=giohang #listCart");
        });
    }

    function deleteCart(id) {
        $.post('users/giohang/capnhapgiohang.php', {
            'id': id,
            'qty': 0
        }, (data) => {
            $('#header').load('?act=giohang #header');
            $('#listCart').load("?act=giohang #listCart");
        });
    }
</script>
<script src="assets/js/chitiet.js"></script>
<script src="assets/js/giohang.js"></script>

</html>