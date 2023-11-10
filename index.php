<?php
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
?>
<!DOCTYPE html>
<html lang="vi-VN" data-nhanh.vn-template="T0444">

<head>
    <meta name="robots" content="noindex" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Nội thất nhà xinh</title>
    <meta name="keywords" content="N&#x1ED9;i&#x20;th&#x1EA5;t&#x20;nh&#xE0;&#x20;xinh">
    <meta name="description"
        content="N&#x1ED7;&#x20;l&#x1EF1;c&#x20;nghi&#xEA;n&#x20;c&#x1EE9;u&#x20;nh&#x1EEF;ng&#x20;t&#x1EAD;p&#x20;qu&#xE1;n,&#x20;th&#xF3;i&#x20;quen&#x20;sinh&#x20;ho&#x1EA1;t&#x20;c&#x1EE7;a&#x20;ng&#x01B0;&#x1EDD;i&#x20;d&#xE2;n&#x20;Vi&#x1EC7;t&#x20;Nam&#x20;trong&#x20;cu&#x1ED9;c&#x20;s&#x1ED1;ng&#x20;t&#x1EA1;i&#x20;c&#xE1;c&#x20;&#x0111;&#xF4;&#x20;th&#x1ECB;,&#x20;Libra&#x20;Furniture&#x20;&#x0111;&#xE3;&#x20;cho&#x20;ra&#x20;&#x0111;&#x1EDD;i&#x20;m&#x1ED9;t&#x20;ph&#x01B0;&#x01A1;ng&#x20;ph&#xE1;p&#x20;ti&#x1EBF;p&#x20;c&#x1EAD;n&#x20;chu&#x1EA9;n&#x20;m&#x1EF1;c,&#x20;khoa&#x20;h&#x1ECD;c&#x20;&#x0111;&#x1EC3;&#x20;gi&#x1EA3;i&#x20;quy&#x1EBF;t&#x20;h&#x1EBF;t&#x20;nh&#x1EEF;ng&#x20;m&#x1ED1;i&#x20;lo&#x20;ng&#x1EA1;i&#x20;c&#x1EE7;a&#x20;b&#x1EA1;n&#x20;khi&#x20;v&#x1EC1;&#x20;nh&#xE0;&#x20;m&#x1EDB;i.&#x20;Lu&#xF4;n&#x20;s&#x1EB5;n&#x20;s&#xE0;ng&#x20;gi&#xFA;p&#x20;&#x0111;&#x1EE1;&#x20;b&#x1EA1;n&#x20;v&#x1EDB;i&#x20;&#x0111;&#x1ED9;i&#x20;ng&#x0169;&#x20;ki&#x1EBF;n&#x20;tr&#xFA;c&#x20;s&#x01B0;&#x20;uy&#x20;t&#xED;n&#x20;v&#xE0;&#x20;t&#x1EAD;n&#x20;t&#xE2;m&#x20;ph&#x1EE5;c&#x20;v&#x1EE5;.">
    <meta property="og&#x3A;title" content="N&#x1ED9;i&#x20;th&#x1EA5;t&#x20;nh&#xE0;&#x20;xinh">
    <meta property="og&#x3A;url" content="http&#x3A;&#x2F;&#x2F;t0444.store.nhanh.vn">
    <meta name="DC.language" content="scheme&#x3D;utf-8&#x20;content&#x3D;vi">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="google-site-verification" content="">
    <link
        href="https&#x3A;&#x2F;&#x2F;pos.nvncdn.net&#x2F;ced45f-64461&#x2F;store&#x2F;20191211_2kgqtalKtKvV8nuf3zMskGLx.png"
        rel="icon" type="image&#x2F;vnd.microsoft.icon">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/fontAwesome/font-awesome-4.7.0.min.css?v=2"
        type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/bootstrap/bootstrap.4.3.1.min.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/owlCarousel/owl.carousel.min.2.3.4.css?v=2"
        type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/css/font.css?v=2" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/tp/T0444/css/styles.css?v=6" type="text/css">
    <link rel="stylesheet" href="https://web.nvnstatic.net/tp/T0444/css/responsive.css?v=6" type="text/css">
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.min.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/lib.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.cookie.js?v=2"></script>
    <script defer type="text/javascript"
        src="https://web.nvnstatic.net/js/bootstrap/boostrap.popper.min.js?v=2"></script>
    <script defer type="text/javascript"
        src="https://web.nvnstatic.net/js/bootstrap/bootstrap.4.3.1.min.js?v=2"></script>
    <script defer type="text/javascript"
        src="https://web.nvnstatic.net/js/owlCarousel/owl.carousel.min.2.3.4.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/js/jquery/jquery.number.min.js?v=2"></script>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/tp/T0444/js/script.js?v=2"></script>
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
    <?php include "users/header.php"; ?>
    <script defer type="text/javascript" src="https://web.nvnstatic.net/tp/T0444/js/index.js?v=2"></script>
    <!-- main -->
    <?php
        $dssp = product_home();
        $dsdm = loadAll_dm();
        $spdb =  sanphamDB();
        if(isset($_GET['act']) && ($_GET['act'] != "")) {
            $act =  $_GET['act'];
            switch($act) {
                case  "trangchu" :
                    include "users/main.php";
                    break;
                case "phongan":
                    include "users/phongan.php";
                    break;
                case "phongngu":
                    include "users/phongngu.php";
                    break;
                case "phonglamviec":
                    include "users/phonglamviec.php";
                    break;
                case "bep":
                    include "users/bep.php";
                    break;
                case "dotrangtri":
                    include "users/dotrangtri.php";
                    break;
                case "tintuc":
                    include "users/tintuc.php";
                    break;
                case "lienhe":
                    include "users/lienhe.php";
                    break;
                case "chitiet":
                    if(isset($_GET['id']) && ($_GET['id']>0)) {
                        $id = $_GET['id'];
                        view($id);
                        $ctsp = edit_product_ct($id);
                        extract($ctsp);
                        $spcl = edit_product_cl($id,$id_category);
                        $dmct = loadOne_dm($id);
                       
                    }
                    include "users/chitiet.php";
                    break;
                default:
                    include "users/main.php";
                    break;
            }
        } else {
            include "users/main.php";
        }
    ?>
    <!-- footer -->
    <?php include "users/footer.php"?>
    <input type="hidden" class="fanpageId" value="">
    <input type="hidden" id="bussinessId" value="64461">
    <input type="hidden" value="" id="uctk" name="uctk" />
    <input type="hidden" id="clienIp" value="14.177.96.253">
    <input type="hidden" value="" id="hasIdentity">
    <div class="site-identified col-12">
        <div class="d-flex align-items-center justify-content-center" data-runtime="Memory:3.92 mb - Time:0.17s">
            <span>Thiết kế bởi</span>
            <img src="https://web.nvnstatic.net/images/favicon.ico?v=2" alt="nhanh_icon">
            <a href="https://nhanh.vn" target="_blank" rel="nofollow">Nhanh.vn</a>
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

</html>