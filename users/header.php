<header>
    <section class="section-header tp_header" id="header">
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-8">
                        <div class="header-top-address d-inline-flex align-items-center">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Tầng 2, cao đẳng fpoly, trịnh văn bô, bắc từ liêm, Hà Nội</span>
                        </div>
                        <div class="header-top-hotline d-inline-flex align-items-center">
                            <i class="fa fa-headphones" aria-hidden="true"></i>
                            <a href="tel:1900.2812">
                                0922222004 </a>
                        </div>
                    </div>
                    <div class="header-top-right col-4 d-flex align-items-center justify-content-end">
                        <span>Miễn phí vận chuyển với đơn hàng trên 500.000đ</span>
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <div class="row align-items-center">
                    <div class="header-main-logo col-12 col-lg-3 d-flex justify-content-center d-lg-block position-relative">
                        <a href="index.php?act=trangchu"><img src="assets/image/z4859323722185_0b4c2924f51552f9b9b2b1707d75733e.jpg" alt="logo"></a>
                        <div class="header-menu-icon-mobile d-lg-none">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="header-main-search col-10 col-lg-4">
                        <form action="?act=searchsp" method="post" id="search-form" class="position-relative">
                            <input type="text" class="form-control searchInput" name="search" required placeholder="Nhập từ khoá cần tìm...">
                            <button class="search-button btn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-main-control col-4 col-lg-5 d-none d-lg-flex">
                        <?php
                        if (isset($_SESSION['email']) && isset($_SESSION['email']['role'])&&($_SESSION['email']['role'] == 0|| $_SESSION['email']['role']=== 1)) {
                            extract($_SESSION['email']);

                        ?>
                            <div class="header-control-user d-flex col-6 align-items-center">
                                <div class="header-control-user-icon col-3 text-center">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                                <div class="header-control-user-content col-9">
                                    <div class="header-control-user-content-top"><?= $fullName ?></div>
                                    <div class="header-control-user-content-bottom">
                                        <a href="?act=capnhaptaikhoan&id=<?= $account_id ?>">Cập nhập tài khoản</a>
                                        <span>*</span>
                                        <a href="?act=dangxuat">Thoát</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="header-control-user d-flex col-6 align-items-center">
                                <div class="header-control-user-icon col-3 text-center">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                                <div class="header-control-user-content col-9">
                                    <div class="header-control-user-content-top">Tài khoản</div>
                                    <div class="header-control-user-content-bottom">
                                        <a href="?act=dangnhap">Đăng nhập</a>
                                        <span>*</span>
                                        <a href="?act=dangky">Đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                            $quantity = 0;
                            $total = 0;
                            $subtotal = 0;
                            $sp = 0;
                            if(isset($_SESSION['cart']) && isset($_SESSION['email']) && isset($_SESSION['email']['role'])&&($_SESSION['email']['role'] == 0|| $_SESSION['email']['role']=== 1)) {
                                foreach($_SESSION['cart'] as $item) {
                                    $sp = (int)$item['quantity'];
                                    $quantity += (int)$item['quantity'];
                                    $total += (int)$item['quantity'] * (int)$item['price'];
                                    $subtotal += $total;
                               }
                            }
                        
                        ?>
                        <?php if (isset($_SESSION['email']) && isset($_SESSION['email']['role'])&&($_SESSION['email']['role'] == 0|| $_SESSION['email']['role']=== 1)) {?>
                        <div id="cart" class="header-control-cart col-12 col-lg-5 d-flex align-items-center position-relative" >
                            <div class="header-control-cart-icon col-3 text-center position-relative">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span id="qty" class="badge badge-danger position-absolute top-0 end-0 rounded-circle" style="font-size: 10px; padding: 5px;"><?= $sp?></span>
                            </div>
                            <a href="?act=giohang" class="d-block col-9">
                                <div class="header-control-cart-content text-center">
                                    <div class="header-control-cart-content-top">Giỏ hàng</div>
                                    <div class="header-control-cart-content-bottom">
                                        <strong id="total"><?= number_format($subtotal)?></strong> VND
                                    </div>
                                </div>
                            </a>
                            <div   class="header-control-cart-count-items  cart" style="display: none;">
                                Có 
                                <strong><?= $quantity?></strong>
                                sản phẩm
                            </div>
                        </div>
                        <?php  }?>
                    </div>
                    <div class="header-main-control-mobile d-lg-none row col-2 position-relative" onclick="location.href = '/cart'">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <div class="header-main-control-cart-count">
                            0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav d-none d-lg-block tp_menu">
            <div class="container">
                <nav>
                    <ul class="nav nav-pills nav-ul-1">

                        <li class="nav-item nav-item-1 ">
                            <a href="index.php?act=trangchu" class="nav-link nav-link-1 tp_menu_item">Trang Chủ</a>
                        </li>

                        <?php foreach ($dsdm as $dm) : ?>
                            <li class="nav-item nav-item-1 ">
                                <a href="?act=danhsachdanhmuc&category_id=<?= $dm['category_id'] ?>" class="nav-link nav-link-1 tp_menu_item"><?= $dm['category_name'] ?></a>
                            </li>
                        <?php endforeach ?>
                        <li class="nav-item nav-item-1 ">
                            <a href="?act=lienhe" class="nav-link nav-link-1 tp_menu_item">Liên Hệ</a>
                        </li>
                        <li class="nav-item nav-item-1 ">
                            <a href="?act=tintuc" class="nav-link nav-link-1 tp_menu_item">Tin Tức</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="header-nav-mobile d-block d-lg-none">
            <nav>
                <div class="group-tab group-tab-mobile">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item col-6 text-center padding-0">
                            <a class="nav-link active" id="pill-menu-tab" data-toggle="pill" href="#pills-menu-content" role="tab" aria-controls="pills-menu-content" aria-selected="true">
                                <i class="fa fa-bars" aria-hidden="true"></i> Danh mục
                            </a>
                        </li>
                        <li class="nav-item col-6 text-center padding-0">
                            <a class="nav-link" id="pills-account-tab" data-toggle="pill" href="#pills-account-content" role="tab" aria-controls="pills-account-content" aria-selected="false">
                                <i class="fa fa-user" aria-hidden="true"></i> Tài khoản
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content tab-content-mobile" id="pills-tabContent">
                    <div class="menu-mobile-close position-relative"><i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                    <div class="tab-pane fade show active" id="pills-menu-content" role="tabpanel" aria-labelledby="pill-menu-tab">
                        <ul class="nav nav-pills nav-ul-mobile-1">
                            <li class="nav-item nav-item-mobile nav-item-mobile-1 "><a href="/" class="nav-link nav-link-mobile nav-link-mobile-1 tp_menu_item">Trang chủ</a>
                            </li>
                            <li class="nav-item nav-item-mobile nav-item-mobile-1 has-child position-relative"><a href="/phong-khach-pc381714.html" class="nav-link nav-link-mobile nav-link-mobile-1 tp_menu_item">Phòng
                                    khách</a><i class="fa fa-caret-down i-mobile-1" aria-hidden="true"></i>
                                <ul class="nav nav-mobile nav-ul-mobile-2 hide">
                                    <li class="nav-item nav-item-mobile nav-item-mobile-2 "><a href="/ghe-ngoi-pc381772.html" class="nav-link nav-link-mobile nav-link-mobile-2 tp_menu_item">Ghế ngồi
                                        </a></li>
                                    <li class="nav-item nav-item-mobile nav-item-mobile-2 "><a href="/tu-ke-tivi-pc382488.html" class="nav-link nav-link-mobile nav-link-mobile-2 tp_menu_item">Tủ, kệ
                                            tivi </a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-mobile nav-item-mobile-1 "><a href="/phong-an-pc381715.html" class="nav-link nav-link-mobile nav-link-mobile-1 tp_menu_item">Phòng ăn</a>
                            </li>
                            <li class="nav-item nav-item-mobile nav-item-mobile-1 "><a href="/phong-ngu-pc381716.html" class="nav-link nav-link-mobile nav-link-mobile-1 tp_menu_item">Phòng ngủ</a>
                            </li>
                            <li class="nav-item nav-item-mobile nav-item-mobile-1 "><a href="/phong-lam-viec-pc381717.html" class="nav-link nav-link-mobile nav-link-mobile-1 tp_menu_item">Phòng làm
                                    việc</a></li>
                            <li class="nav-item nav-item-mobile nav-item-mobile-1 "><a href="/bep-pc381718.html" class="nav-link nav-link-mobile nav-link-mobile-1 tp_menu_item">Bếp</a></li>
                            <li class="nav-item nav-item-mobile nav-item-mobile-1 "><a href="/do-trang-tri-pc381719.html" class="nav-link nav-link-mobile nav-link-mobile-1 tp_menu_item">Đồ trang trí</a>
                            </li>
                            <li class="nav-item nav-item-mobile nav-item-mobile-1 "><a href="/news" class="nav-link nav-link-mobile nav-link-mobile-1 tp_menu_item">Tin tức</a></li>
                            <li class="nav-item nav-item-mobile nav-item-mobile-1 "><a href="/lien-he" class="nav-link nav-link-mobile nav-link-mobile-1 tp_menu_item">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-account-content" role="tabpanel" aria-labelledby="pills-account-tab">
                        <ul class="nav nav-pills">
                            <li class="nav-item nav-item-mobile nav-item-mobile-1">
                                <a href="/user/signin" class="nav-link nav-link-mobile nav-link-mobile-1 tp_menu_item">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập
                                </a>
                            </li>
                            <li class="nav-item nav-item-mobile nav-item-mobile-1">
                                <a href="/user/signup" class="nav-link nav-link-mobile nav-link-mobile-1 tp_menu_item">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Đăng ký
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
</header>