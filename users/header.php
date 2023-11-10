<header>
    <section class="section-header tp_header">
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
                        <form action="/search" method="get" id="search-form" class="position-relative">
                            <input type="text" class="form-control searchInput" name="q" required placeholder="Nhập từ khoá cần tìm...">
                            <button class="search-button btn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-main-control col-4 col-lg-5 d-none d-lg-flex">
                        <div class="header-control-user d-flex col-6 align-items-center">
                            <div class="header-control-user-icon col-3 text-center">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="header-control-user-content col-9">
                                <div class="header-control-user-content-top">Tài khoản</div>
                                <div class="header-control-user-content-bottom">
                                    <a href="/user/signin">Đăng nhập</a>
                                    <span>*</span>
                                    <a href="/user/signup">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-control-cart col-12 col-lg-5 d-flex align-items-center position-relative">
                            <div class="header-control-cart-icon col-3 text-center">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div><a href="/cart" class="d-block col-9">
                                <div class="header-control-cart-content text-center">
                                    <div class="header-control-cart-content-top">Giỏ hàng</div>
                                    <div class="header-control-cart-content-bottom">
                                        <strong>0</strong> Sản phẩm
                                    </div>
                                </div>
                            </a>
                            <div class="header-control-cart-count-items hide"></div>
                        </div>
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
                            <a href="index.php?act=trangchu" class="nav-link nav-link-1 tp_menu_item">Trangchủ</a>
                        </li>
                        <li class="nav-item nav-item-1 ">
                            <a href="index.php?act=phongan" class="nav-link nav-link-1 tp_menu_item">Phòng ăn</a>
                        </li>
                        <li class="nav-item nav-item-1 ">
                            <a href="?act=phongngu" class="nav-link nav-link-1 tp_menu_item">Phòng ngủ</a>
                        </li>
                        <li class="nav-item nav-item-1 ">
                            <a href="?act=phonglamviec" class="nav-link nav-link-1 tp_menu_item">Phòng làm việc</a>
                        </li>
                        <li class="nav-item nav-item-1 ">
                            <a href="?act=bep" class="nav-link nav-link-1 tp_menu_item">Bếp</a>
                        </li>
                        <li class="nav-item nav-item-1 ">
                            <a href="?act=dotrangtri" class="nav-link nav-link-1 tp_menu_item">Đồ trang trí</a>
                        </li>
                        <li class="nav-item nav-item-1 ">
                            <a href="?act=tintuc" class="nav-link nav-link-1 tp_menu_item">Tin tức</a>
                        </li>
                        <li class="nav-item nav-item-1 ">
                            <a href="?act=lienhe" class="nav-link nav-link-1 tp_menu_item">Liên hệ</a>
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