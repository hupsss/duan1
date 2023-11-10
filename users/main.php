<section class="section-index">
    <div class="index-banner owl-carousel position-relative tp_banner_main">
        <div class="index-banner-img"><a href="javascript:void(0);"> <img class="owl-lazy" data-src="https://pos.nvncdn.net/ced45f-64461/bn/20200131_Bop5IUj4V4QgBfX9RYntMmcQ.jpg" alt="A3"></a></div>
        <div class="index-banner-img"><a href="javascript:void(0);"> <img class="owl-lazy" data-src="https://pos.nvncdn.net/ced45f-64461/bn/20200131_9kyLVkd6xmUgOf2hj4U2IPWy.jpg" alt="A2"></a></div>
        <div class="index-banner-img"><a href="javascript:void(0);"> <img class="owl-lazy" data-src="https://pos.nvncdn.net/ced45f-64461/bn/20200131_tOEK0m3gmydzjovoABCJFZpa.jpg" alt="A1"></a></div>
    </div>
    <div class="index-privacy padding-lg-30">
        <div class="container">
            <div class="row">
                <div class="index-privacy-block col-12 col-lg-3 row align-items-center">
                    <div class="index-privacy-icon index-privacy-icon-delivery">
                        <div class="index-privacy-icon-border d-flex align-items-center justify-content-center">
                            <a href="">
                                <img src="https://web.nvnstatic.net/tp/T0444/img/privacy_icon_delivery.png?v=3" alt="privacy_icon_delivery">
                            </a>
                        </div>
                    </div>
                    <div class="index-privacy-content d-inline-block">
                        <h6 class="index-privacy-label">
                            <a href="">
                                Giao hàng miễn phí </a>
                        </h6>
                        <div class="index-privacy-title">Đơn hàng trên 500k</div>
                    </div>
                </div>
                <div class="index-privacy-block col-12 col-lg-3 row align-items-center">
                    <div class="index-privacy-icon index-privacy-icon-exchange">
                        <div class="index-privacy-icon-border d-flex align-items-center justify-content-center">
                            <a href="">
                                <img src="https://web.nvnstatic.net/tp/T0444/img/privacy_icon_exchange.png?v=3" alt="privacy_icon_exchange">
                            </a>
                        </div>
                    </div>
                    <div class="index-privacy-content d-inline-block">
                        <h6 class="index-privacy-label">
                            <a href="">
                                Đổi trả miễn phí </a>
                        </h6>
                        <div class="index-privacy-title">Trong 7 ngày đầu</div>
                    </div>
                </div>
                <div class="index-privacy-block col-12 col-lg-3 row align-items-center">
                    <div class="index-privacy-icon index-privacy-icon-advisory">
                        <div class="index-privacy-icon-border d-flex align-items-center justify-content-center">
                            <a href="">
                                <img src="https://web.nvnstatic.net/tp/T0444/img/privacy_icon_advisory.png?v=3" alt="privacy_icon_advisory">
                            </a>
                        </div>
                    </div>
                    <div class="index-privacy-content d-inline-block9">
                        <h6 class="index-privacy-label">
                            <a href="">
                                Tư vấn trực tuyến </a>
                        </h6>
                        <div class="index-privacy-title">Hỗ trợ 24/7</div>
                    </div>
                </div>
                <div class="index-privacy-block col-12 col-lg-3 row align-items-center">
                    <div class="index-privacy-icon index-privacy-icon-payment">
                        <div class="index-privacy-icon-border d-flex align-items-center justify-content-center">
                            <a href="">
                                <img src="https://web.nvnstatic.net/tp/T0444/img/privacy_icon_payment.png?v=3" alt="privacy_icon_payment">
                            </a>
                        </div>
                    </div>
                    <div class="index-privacy-content d-inline-block">
                        <h6 class="index-privacy-label">
                            <a href="">
                                Thanh toán </a>
                        </h6>
                        <div class="index-privacy-title">Bảo mật thanh toán</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-banner-category-top padding-lg-30">
        <div class="container">
            <div class="row">
                <div class="index-banner-category-top-block row"></div>
            </div>
        </div>
    </div>
    <div class="index-new-products index-product-box position-relative padding-lg-30 tp_product_new">
        <div class="container">
            <div class="row">
                <div class="index-product-box-header margin-bottom-lg-30">
                    <h5 class="index-product-box-label position-relative">
                        <a href="/product?show=new" class="position-relative tp_title">
                            Sản phẩm mới </a>
                    </h5>
                </div>
                <div class="index-product-box-list index-new-product-box row">
                    <?php foreach($dssp as $sp) :?>
                    <div class="product-box col-lg-2" data-psId="18810324" data-storeId="64461">
                        <div class="product-img position-relative">
                            <a href="?act=chitiet&id=<?= $sp['product_id']?>">
                                <img data-sizes="auto" class="lazyload" src="admin/upload/<?= $sp['image']?>"  alt="Kệ TV Batista">
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-rating text-center">
                                <p id="voteView0" class="si ic voteView"></p>
                            </div>
                            <h6 class="product-name text-center">
                                <a href="?act=chitiet&id=<?= $sp['product_id']?>" class="tp_product_name"><?= $sp['product_name']?></a>
                            </h6>
                            <div class="product-price-box text-center">
                                <div class="product-price tp_product_price"><?= number_format($sp['price'])?> VND</div>
                            </div>
                            <div class="product-action text-center">
                                <a href="?act=chitiet&id=<?= $sp['product_id']?>" class="btn button-hover-line tp_button">
                                    <span>Tùy chọn</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>
                
                </div>
            </div>
        </div>
    </div>
    <div class="index-banner-intro-top padding-lg-30">
        <div class="container">
            <div class="row">
                <div class="index-banner-intro-top-block image-hover-line"></div>
            </div>
        </div>
    </div>
    <div class="index-best-seller-list index-product-box tp_product_hot position-relative padding-lg-30">
        <div class="container">
            <div class="row">
                <div class="index-product-box-header margin-bottom-lg-30">
                    <h5 class="index-product-box-label position-relative">
                        <a href="/product?show=bestseller" class="tp_title position-relative tp_title">
                            Sản phẩm được ưa thích </a>
                    </h5>
                </div>
                <div class="index-product-box-list index-new-product-box row">
                    <?php foreach($spdb as $sp) :?>
                        <div class="product-box margin-bottom-lg-30" data-psId="18810332">
                            <div class="product-img position-relative">
                                <a href="?act=chitiet&id=<?= $sp['product_id']?>">
                                <img data-sizes="auto" class="lazyload" src="admin/upload/<?= $sp['image']?>"  alt="Kệ TV Batista">
                                </a>
                            </div>
                            <div class="product-info">
                                <div class="product-rating text-center">
                                    <p id="voteView0" class="si ic voteView"></p>
                                </div>
                                <h6 class="product-name text-center">
                                    <a href="?act=chitiet&id=<?= $sp['product_id']?>" class="tp_product_name"><?= $sp['product_name']?></a>
                                </h6>
                                <div class="product-price-box text-center">
                                    <div class="product-price tp_product_price"><?= number_format($sp['price'])?></div>
                                </div>
                                <div class="product-action text-center">
                                    <a href="?act=chitiet&id=<?= $sp['product_id']?>" class="btn button-hover-line tp_button">
                                        <span>Tùy chọn</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </div>
    <div class="index-banner-intro-bottom padding-bottom-lg-30">
        <div class="container">
            <div class="row">
                <div class="index-banner-intro-bottom-block image-hover-line"></div>
            </div>
        </div>
    </div>
    <style>
        .index-banner-category-bottom {
            background: url('') no-repeat center center;
            background-size: cover;
        }
    </style>
    <div class="index-banner-category-bottom position-relative padding-lg-30 margin-lg-30">
        <div class="container">
            <div class="row">
                <div class="index-banner-category-bottom-block owl-carousel">
                    <div class="index-banner-category-bottom-img image-hover-light position-relative" onclick="window.location.href='/phong-khach-pc381714.html'">
                        <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/pc/20191219_aivBaPwziESLjxG6SC17zKdc.jpg" alt="Phòng khách">
                        <div class="index-banner-category-bottom-info text-center">
                            <h2 class="index-banner-category-bottom-name">
                                <a href="/phong-khach-pc381714.html">Phòng khách</a>
                            </h2>
                            <p>Tìm hiểu thêm</p>
                        </div>
                    </div>
                    <div class="index-banner-category-bottom-img image-hover-light position-relative" onclick="window.location.href='/phong-an-pc381715.html'">
                        <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/pc/20191219_HhzIYDJCmAPWRmvBh9LmM5c9.jpg" alt="Phòng ăn">
                        <div class="index-banner-category-bottom-info text-center">
                            <h2 class="index-banner-category-bottom-name">
                                <a href="/phong-an-pc381715.html">Phòng ăn</a>
                            </h2>
                            <p>Tìm hiểu thêm</p>
                        </div>
                    </div>
                    <div class="index-banner-category-bottom-img image-hover-light position-relative" onclick="window.location.href='/phong-ngu-pc381716.html'">
                        <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/pc/20191219_OqWYjl47WQQDQU0hKmeWvRUg.jpg" alt="Phòng ngủ">
                        <div class="index-banner-category-bottom-info text-center">
                            <h2 class="index-banner-category-bottom-name">
                                <a href="/phong-ngu-pc381716.html">Phòng ngủ</a>
                            </h2>
                            <p>Tìm hiểu thêm</p>
                        </div>
                    </div>
                    <div class="index-banner-category-bottom-img image-hover-light position-relative" onclick="window.location.href='/phong-lam-viec-pc381717.html'">
                        <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/pc/20191219_R988GUbqkIekXAnKLQLRPvB6.jpg" alt="Phòng làm việc">
                        <div class="index-banner-category-bottom-info text-center">
                            <h2 class="index-banner-category-bottom-name">
                                <a href="/phong-lam-viec-pc381717.html">Phòng làm việc</a>
                            </h2>
                            <p>Tìm hiểu thêm</p>
                        </div>
                    </div>
                    <div class="index-banner-category-bottom-img image-hover-light position-relative" onclick="window.location.href='/bep-pc381718.html'">
                        <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/pc/20191219_2fzlvxHyvbCdtT8OOgc2OC79.jpg" alt="Bếp">
                        <div class="index-banner-category-bottom-info text-center">
                            <h2 class="index-banner-category-bottom-name">
                                <a href="/bep-pc381718.html">Bếp</a>
                            </h2>
                            <p>Tìm hiểu thêm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-product-tab-show padding-lg-30">
        <div class="container">
            <div class="row">
                <div class="index-product-box-header position-relative margin-bottom-lg-30">
                    <h5 class="index-product-box-label position-relative">
                        <a href="javascript:void(0);" class="tp_title position-relative tp_title">
                            Sản phẩm đáng chú ý </a>
                    </h5>
                    <div class="index-product-tab-list">
                        <div class="group-tab">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a href="#index-home-product-tab-block" class="tp_title position-relative active" id="index-home-product-tab" data-toggle="pill" role="tab" aria-controls="index-home-product-block" aria-selected="false">
                                        Sản phẩm nổi bật </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#index-new-product-tab-block" class="tp_title position-relative tp_product_new" id="index-new-product-tab" data-toggle="pill" role="tab" aria-controls="index-new-product-block" aria-selected="true">
                                        Sản phẩm mới </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#index-hot-product-tab-block" class="tp_title position-relative tp_product_hot" id="index-hot-product-tab" data-toggle="pill" role="tab" aria-controls="index-hot-product-block" aria-selected="false">
                                        Sản phẩm được ưa thích </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="index-product-tab-box index-product-tab-show-box">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="index-home-product-tab-block" role="tabpanel" aria-labelledby="index-home-product-tab">
                            <div class="index-product-tab-block index-home-product-tab-block owl-carousel">
                                <div class="product-box" data-psId="18810315">
                                    <div class="product-img position-relative">
                                        <a href="/ke-sach-freestyle-p18810315.html">
                                            <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_yaRhXiMctQYqGGSZrZC6XYIX.jpg" alt="Kệ sách FreeStyle">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/ke-sach-freestyle-p18810315.html" class="tp_product_name">Kệ
                                                sách FreeStyle</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">6.490.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/ke-sach-freestyle-p18810315.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810311">
                                    <div class="product-img position-relative">
                                        <a href="/bo-ban-an-stefano-p18810311.html">
                                            <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_EV8QvVWDpe5YNfvcxCjTnYiw.jpg" alt="Bộ bàn ăn Stefano">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/bo-ban-an-stefano-p18810311.html" class="tp_product_name">Bộ
                                                bàn ăn Stefano</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">14.950.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/bo-ban-an-stefano-p18810311.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810310">
                                    <div class="product-img position-relative">
                                        <a href="/bo-ban-an-marryland-p18810310.html">
                                            <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_OxHDpUfye1Zs1AeSFMrKJKor.jpg" alt="Bộ bàn ăn Marryland">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/bo-ban-an-marryland-p18810310.html" class="tp_product_name">Bộ
                                                bàn ăn Marryland</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">3.990.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/bo-ban-an-marryland-p18810310.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810309">
                                    <div class="product-img position-relative">
                                        <a href="/bo-ban-an-edward-p18810309.html">
                                            <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_0fH2LceuN65oSeiHO3KDYl8i.jpg" alt="Bộ bàn ăn Edward">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/bo-ban-an-edward-p18810309.html" class="tp_product_name">Bộ
                                                bàn ăn Edward</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">1.290.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/bo-ban-an-edward-p18810309.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810306">
                                    <div class="product-img position-relative">
                                        <a href="/ban-cafe-cabaret-p18810306.html">
                                            <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_a2maE7EjvjNSPdXrLHezkNyE.jpg" alt="Bàn cafe Cabaret">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/ban-cafe-cabaret-p18810306.html" class="tp_product_name">Bàn
                                                cafe Cabaret</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">1.390.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/ban-cafe-cabaret-p18810306.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810305">
                                    <div class="product-img position-relative">
                                        <a href="/ghe-banh-bogart-p18810305.html">
                                            <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_8xRZRfIDuSeSdGIhdcfGcSCT.jpg" alt="Ghế bành Bogart">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/ghe-banh-bogart-p18810305.html" class="tp_product_name">Ghế
                                                bành Bogart</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">5.490.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/ghe-banh-bogart-p18810305.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810304">
                                    <div class="product-img position-relative">
                                        <a href="/ghe-banh-connemara-p18810304.html">
                                            <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_ZJSXJafMa01wdpgrWQrJvIwU.jpg" alt="Ghế bành Connemara">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/ghe-banh-connemara-p18810304.html" class="tp_product_name">Ghế
                                                bành Connemara</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">7.490.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/ghe-banh-connemara-p18810304.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="index-new-product-tab-block" role="tabpanel" aria-labelledby="index-new-product-tab">
                            <div class="index-product-tab-block index-new-product-tab-block owl-carousel">
                                <div class="product-box" data-psId="18810324">
                                    <div class="product-img position-relative">
                                        <a href="/ke-tv-batista-p18810324.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_skfxDEKyelBI36ivLnLJZCp1.jpg" alt="Kệ TV Batista">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/ke-tv-batista-p18810324.html" class="tp_product_name">Kệ TV
                                                Batista</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">5.990.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/ke-tv-batista-p18810324.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810323">
                                    <div class="product-img position-relative">
                                        <a href="/sofa-giuong-p18810323.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_2OVdeV4hqzYI6MNdoX4H3kXb.png" alt="Sofa giường">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/sofa-giuong-p18810323.html" class="tp_product_name">Sofa
                                                giường</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">2.990.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/sofa-giuong-p18810323.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810322">
                                    <div class="product-img position-relative">
                                        <a href="/ghe-banh-viking-freja-p18810322.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_1TDYtMJHs7hp1WhGW8ovPdKT.jpg" alt="Ghế bành Viking Freja">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/ghe-banh-viking-freja-p18810322.html" class="tp_product_name">Ghế bành Viking Freja</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">1.100.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/ghe-banh-viking-freja-p18810322.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810321">
                                    <div class="product-img position-relative">
                                        <a href="/don-mem-connemara-p18810321.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_1OFmW6Opx7gi2x3O8YBQ0S5Y.jpg" alt="Đôn mềm Connemara">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/don-mem-connemara-p18810321.html" class="tp_product_name">Đôn
                                                mềm Connemara</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">4.490.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/don-mem-connemara-p18810321.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810320">
                                    <div class="product-img position-relative">
                                        <a href="/ghe-banh-nanjing-p18810320.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_RRj14bJ5bpkw82vwI86814iN.jpg" alt="Ghế bành NanJing">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/ghe-banh-nanjing-p18810320.html" class="tp_product_name">Ghế
                                                bành NanJing</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">1.492.500₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/ghe-banh-nanjing-p18810320.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810319">
                                    <div class="product-img position-relative">
                                        <a href="/sofa-giuong-temasek-p18810319.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_2HCRFGdwjX3ciG9eDMIYzWb3.jpg" alt="Sofa giường Temasek">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/sofa-giuong-temasek-p18810319.html" class="tp_product_name">Sofa giường Temasek</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">1.990.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/sofa-giuong-temasek-p18810319.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="index-hot-product-tab-block" role="tabpanel" aria-labelledby="index-hot-product-tab">
                            <div class="index-product-tab-block index-hot-product-tab-block owl-carousel">
                                <div class="product-box" data-psId="18810332">
                                    <div class="product-img position-relative">
                                        <a href="/ghe-banh-domingo-p18810332.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_XzHll0qpfUS4JDAJgwXW5q61.jpg" alt="Ghế bành Domingo">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/ghe-banh-domingo-p18810332.html" class="tp_product_name">Ghế
                                                bành Domingo</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">3.290.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/ghe-banh-domingo-p18810332.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810331">
                                    <div class="product-img position-relative">
                                        <a href="/dem-ngoi-viking-kudde-p18810331.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_xDP30DEx94zVYpgF3OfigaJE.jpg" alt="Đệm ngồi Viking Kudde">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/dem-ngoi-viking-kudde-p18810331.html" class="tp_product_name">Đệm ngồi Viking Kudde</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">1.190.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/dem-ngoi-viking-kudde-p18810331.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810330">
                                    <div class="product-img position-relative">
                                        <a href="/moc-dan-tuong-elektra-p18810330.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_g5JbTYxCHWr4qXf1VG3Ad4gY.jpg" alt="Móc dán tường Elektra">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/moc-dan-tuong-elektra-p18810330.html" class="tp_product_name">Móc dán tường Elektra</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">13.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/moc-dan-tuong-elektra-p18810330.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810329">
                                    <div class="product-img position-relative">
                                        <a href="/mieng-boc-canh-ban-elektra-p18810329.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_XkKsl77DWMv9lt3fEWx4R0KH.jpg" alt="Miếng bọc cạnh bàn Elektra">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/mieng-boc-canh-ban-elektra-p18810329.html" class="tp_product_name">Miếng bọc cạnh bàn Elektra</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">11.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/mieng-boc-canh-ban-elektra-p18810329.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810328">
                                    <div class="product-img position-relative">
                                        <a href="/thiet-bi-chot-an-toan-elektra-p18810328.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_6qglgRGHdBRVDTP9GgMyhdTb.jpg" alt="Thiết bị chốt an toàn Elektra">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/thiet-bi-chot-an-toan-elektra-p18810328.html" class="tp_product_name">Thiết bị chốt an toàn Elektra</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">39.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/thiet-bi-chot-an-toan-elektra-p18810328.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810327">
                                    <div class="product-img position-relative">
                                        <a href="/khan-tay-soft-p18810327.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_0Ox2HpOhAaP5WfS5H8fFut5T.jpg" alt="Khăn tay Soft">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/khan-tay-soft-p18810327.html" class="tp_product_name">Khăn tay
                                                Soft</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">39.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/khan-tay-soft-p18810327.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810326">
                                    <div class="product-img position-relative">
                                        <a href="/tui-dung-do-giat-lynn-p18810326.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_pynQEqXX61utWU7Wwd2kDefL.jpg" alt="Túi đựng đồ giặt Lynn">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/tui-dung-do-giat-lynn-p18810326.html" class="tp_product_name">Túi đựng đồ giặt Lynn</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">49.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/tui-dung-do-giat-lynn-p18810326.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box" data-psId="18810315">
                                    <div class="product-img position-relative">
                                        <a href="/ke-sach-freestyle-p18810315.html">
                                            <img data-sizes="auto" class="lazyload" src="/tp/T0444/img/blank.png" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_yaRhXiMctQYqGGSZrZC6XYIX.jpg" alt="Kệ sách FreeStyle">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating text-center">
                                            <p id="voteView0" class="si ic voteView"></p>
                                        </div>
                                        <h6 class="product-name text-center">
                                            <a href="/ke-sach-freestyle-p18810315.html" class="tp_product_name">Kệ
                                                sách FreeStyle</a>
                                        </h6>
                                        <div class="product-price-box text-center">
                                            <div class="product-price tp_product_price">6.490.000₫</div>
                                        </div>
                                        <div class="product-action text-center">
                                            <a href="/ke-sach-freestyle-p18810315.html" class="btn button-hover-line tp_button">
                                                <span>Tùy chọn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-banner-bottom padding-lg-30">
        <div class="container">
            <div class="row">
                <div class="index-banner-bottom-left col-12 col-lg-6">
                    <div class="index-banner-intro-bottom-block image-hover-line"></div>
                </div>
                <div class="index-banner-bottom-right col-12 col-lg-6">
                    <div class="index-banner-intro-bottom-block image-hover-line"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-product-tab-category padding-lg-30 tp_product_category_box">
        <div class="container">
            <div class="row">
                <div class="index-product-box-header position-relative margin-bottom-lg-30">
                    <h5 class="index-product-box-label position-relative">
                        <a href="javascript:void(0);" class="tp_title position-relative tp_title">
                            Danh mục nổi bật </a>
                    </h5>
                    <div class="index-product-tab-list">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a href="#index-category-product-block-1" class="tp_title position-relative" id="index-category-product-tab-1" data-toggle="pill" role="tab" aria-controls="index-category-product-block-1" aria-selected="true">
                                    Phòng khách </a>
                            </li>
                            <li class="nav-item">
                                <a href="#index-category-product-block-2" class="tp_title position-relative" id="index-category-product-tab-2" data-toggle="pill" role="tab" aria-controls="index-category-product-block-2" aria-selected="true">
                                    Phòng ăn </a>
                            </li>
                            <li class="nav-item">
                                <a href="#index-category-product-block-3" class="tp_title position-relative" id="index-category-product-tab-3" data-toggle="pill" role="tab" aria-controls="index-category-product-block-3" aria-selected="true">
                                    Phòng ngủ </a>
                            </li>
                            <li class="nav-item">
                                <a href="#index-category-product-block-4" class="tp_title position-relative" id="index-category-product-tab-4" data-toggle="pill" role="tab" aria-controls="index-category-product-block-4" aria-selected="true">
                                    Phòng làm việc </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="index-product-tab-box index-product-tab-show-box">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show" id="index-category-product-block-1" role="tabpanel" aria-labelledby="index-category-product-tab-1">
                        <div class="index-product-tab-block index-category-product-tab-block owl-carousel">
                            <div class="product-box" data-psId="18884040">
                                <div class="product-img position-relative">
                                    <a href="/tu-tv-freestyle-p18884040.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191224_suooYdyb4CJo5wAI1UlSZ6dl.jpg" alt="Tủ TV FreeStyle">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/tu-tv-freestyle-p18884040.html" class="tp_product_name">Tủ TV
                                            FreeStyle</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">6.990.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/tu-tv-freestyle-p18884040.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810332">
                                <div class="product-img position-relative">
                                    <a href="/ghe-banh-domingo-p18810332.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_XzHll0qpfUS4JDAJgwXW5q61.jpg" alt="Ghế bành Domingo">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ghe-banh-domingo-p18810332.html" class="tp_product_name">Ghế bành
                                            Domingo</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">3.290.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ghe-banh-domingo-p18810332.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810325">
                                <div class="product-img position-relative">
                                    <a href="/ke-tv-mozart-p18810325.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_LxqDwkhis6xwjWVjZisMH5DW.jpg" alt="Kệ TV Mozart">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ke-tv-mozart-p18810325.html" class="tp_product_name">Kệ TV
                                            Mozart</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">2.990.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ke-tv-mozart-p18810325.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810324">
                                <div class="product-img position-relative">
                                    <a href="/ke-tv-batista-p18810324.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_skfxDEKyelBI36ivLnLJZCp1.jpg" alt="Kệ TV Batista">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ke-tv-batista-p18810324.html" class="tp_product_name">Kệ TV
                                            Batista</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">5.990.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ke-tv-batista-p18810324.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810318">
                                <div class="product-img position-relative">
                                    <a href="/ghe-don-carnaby-p18810318.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_KqPdNpeR3hLEt25togMz22IQ.jpg" alt="Ghế đôn Carnaby">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ghe-don-carnaby-p18810318.html" class="tp_product_name">Ghế đôn
                                            Carnaby</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">2.490.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ghe-don-carnaby-p18810318.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810317">
                                <div class="product-img position-relative">
                                    <a href="/ghe-thu-gian-sitting-bull-p18810317.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_FIgyGEahjJ60wd1xczLQTET9.jpg" alt="Ghế thư giãn Sitting Bull">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ghe-thu-gian-sitting-bull-p18810317.html" class="tp_product_name">Ghế thư giãn Sitting Bull</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">1.790.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ghe-thu-gian-sitting-bull-p18810317.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810316">
                                <div class="product-img position-relative">
                                    <a href="/ghe-dau-sacramento-p18810316.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_eKBd0vOnZ6rXrykwBB1HDAlo.jpg" alt="Ghế đẩu Sacramento">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ghe-dau-sacramento-p18810316.html" class="tp_product_name">Ghế đẩu
                                            Sacramento</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">1.990.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ghe-dau-sacramento-p18810316.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810312">
                                <div class="product-img position-relative">
                                    <a href="/tu-ngan-keo-batista-p18810312.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_UWi2j7SioEz6ieezI8BvZnOp.png" alt="Tủ ngăn kéo Batista">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/tu-ngan-keo-batista-p18810312.html" class="tp_product_name">Tủ
                                            ngăn kéo Batista</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">4.990.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/tu-ngan-keo-batista-p18810312.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="index-category-product-block-2" role="tabpanel" aria-labelledby="index-category-product-tab-2">
                        <div class="index-product-tab-block index-category-product-tab-block owl-carousel">
                            <div class="product-box" data-psId="18810311">
                                <div class="product-img position-relative">
                                    <a href="/bo-ban-an-stefano-p18810311.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_EV8QvVWDpe5YNfvcxCjTnYiw.jpg" alt="Bộ bàn ăn Stefano">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/bo-ban-an-stefano-p18810311.html" class="tp_product_name">Bộ bàn
                                            ăn Stefano</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">14.950.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/bo-ban-an-stefano-p18810311.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810310">
                                <div class="product-img position-relative">
                                    <a href="/bo-ban-an-marryland-p18810310.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_OxHDpUfye1Zs1AeSFMrKJKor.jpg" alt="Bộ bàn ăn Marryland">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/bo-ban-an-marryland-p18810310.html" class="tp_product_name">Bộ bàn
                                            ăn Marryland</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">3.990.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/bo-ban-an-marryland-p18810310.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810309">
                                <div class="product-img position-relative">
                                    <a href="/bo-ban-an-edward-p18810309.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_0fH2LceuN65oSeiHO3KDYl8i.jpg" alt="Bộ bàn ăn Edward">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/bo-ban-an-edward-p18810309.html" class="tp_product_name">Bộ bàn ăn
                                            Edward</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">1.290.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/bo-ban-an-edward-p18810309.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810307">
                                <div class="product-img position-relative">
                                    <a href="/ban-an-verona-p18810307.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/store2/64461/ps/20191221/h_1a.jpg" alt="Bàn ăn Verona">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ban-an-verona-p18810307.html" class="tp_product_name">Bàn ăn
                                            Verona</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">1.790.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ban-an-verona-p18810307.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="index-category-product-block-3" role="tabpanel" aria-labelledby="index-category-product-tab-3">
                        <div class="index-product-tab-block index-category-product-tab-block owl-carousel">
                            <div class="product-box" data-psId="18810322">
                                <div class="product-img position-relative">
                                    <a href="/ghe-banh-viking-freja-p18810322.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_1TDYtMJHs7hp1WhGW8ovPdKT.jpg" alt="Ghế bành Viking Freja">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ghe-banh-viking-freja-p18810322.html" class="tp_product_name">Ghế
                                            bành Viking Freja</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">1.100.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ghe-banh-viking-freja-p18810322.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810320">
                                <div class="product-img position-relative">
                                    <a href="/ghe-banh-nanjing-p18810320.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_RRj14bJ5bpkw82vwI86814iN.jpg" alt="Ghế bành NanJing">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ghe-banh-nanjing-p18810320.html" class="tp_product_name">Ghế bành
                                            NanJing</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">1.492.500₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ghe-banh-nanjing-p18810320.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810319">
                                <div class="product-img position-relative">
                                    <a href="/sofa-giuong-temasek-p18810319.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_2HCRFGdwjX3ciG9eDMIYzWb3.jpg" alt="Sofa giường Temasek">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/sofa-giuong-temasek-p18810319.html" class="tp_product_name">Sofa
                                            giường Temasek</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">1.990.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/sofa-giuong-temasek-p18810319.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810308">
                                <div class="product-img position-relative">
                                    <a href="/ban-goc-caruso-p18810308.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_RVUbb0ytc2PxXdIDGSYtO8aE.jpg" alt="Bàn góc Caruso">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ban-goc-caruso-p18810308.html" class="tp_product_name">Bàn góc
                                            Caruso</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">1.290.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ban-goc-caruso-p18810308.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="index-category-product-block-4" role="tabpanel" aria-labelledby="index-category-product-tab-4">
                        <div class="index-product-tab-block index-category-product-tab-block owl-carousel">
                            <div class="product-box" data-psId="18810323">
                                <div class="product-img position-relative">
                                    <a href="/sofa-giuong-p18810323.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_2OVdeV4hqzYI6MNdoX4H3kXb.png" alt="Sofa giường">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/sofa-giuong-p18810323.html" class="tp_product_name">Sofa
                                            giường</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">2.990.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/sofa-giuong-p18810323.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810315">
                                <div class="product-img position-relative">
                                    <a href="/ke-sach-freestyle-p18810315.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_yaRhXiMctQYqGGSZrZC6XYIX.jpg" alt="Kệ sách FreeStyle">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ke-sach-freestyle-p18810315.html" class="tp_product_name">Kệ sách
                                            FreeStyle</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">6.490.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ke-sach-freestyle-p18810315.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810314">
                                <div class="product-img position-relative">
                                    <a href="/ke-tv-cobra-p18810314.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_zImvlDNGX9vq7wLIf6xFVQpd.jpg" alt="Kệ TV Cobra">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ke-tv-cobra-p18810314.html" class="tp_product_name">Kệ TV
                                            Cobra</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">6.490.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ke-tv-cobra-p18810314.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box" data-psId="18810313">
                                <div class="product-img position-relative">
                                    <a href="/ke-tv-kitka-p18810313.html">
                                        <img data-sizes="auto" class="lazyload" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_YrTtC5g59AF6Dm4ekC5LmWlZ.jpg" alt="Kệ TV Kitka">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating text-center">
                                        <p id="voteView0" class="si ic voteView"></p>
                                    </div>
                                    <h6 class="product-name text-center">
                                        <a href="/ke-tv-kitka-p18810313.html" class="tp_product_name">Kệ TV
                                            Kitka</a>
                                    </h6>
                                    <div class="product-price-box text-center">
                                        <div class="product-price tp_product_price">5.490.000₫</div>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="/ke-tv-kitka-p18810313.html" class="btn button-hover-line tp_button">
                                            <span>Tùy chọn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .index-feedback {
            background: url('') no-repeat center center;
            background-size: cover;
        }
    </style>
    <div class="index-feedback margin-lg-30 padding-lg-30 position-relative">
        <div class="container">
            <div class="row">
                <div class="index-feedback-box owl-carousel position-relative"></div>
            </div>
        </div>
    </div>
    <div class="index-news padding-lg-30">
        <div class="container">
            <div class="row">
                <div class="index-product-box-header margin-bottom-lg-30">
                    <h5 class="index-product-box-label position-relative">
                        <a href="/news" class="tp_title position-relative tp_title">
                            Tin tức </a>
                    </h5>
                </div>
                <div class="index-news-box owl-carousel">
                    <div class="index-news-block position-relative item-hover-bottom-line">
                        <div class="index-news-img">
                            <a href="/15-xu-huong-thiet-ke-noi-that-moi-nhat-n57752.html">
                                <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/art/20191221_fiEaWWCws6ifFshGA0GGuNOh.jpg" alt="15 Xu Hướng Thiết Kế Nội Thất Mới Nhất">
                            </a>
                        </div>
                        <div class="index-news-date d-flex align-items-center text-center">
                            21 / 12 2019</div>
                        <div class="index-news-info">
                            <h6 class="index-news-title margin-bottom-lg-15">
                                <a href="/15-xu-huong-thiet-ke-noi-that-moi-nhat-n57752.html" class="tp_title">15 Xu
                                    Hướng Thiết Kế Nội Thất Mới Nhất</a>
                            </h6>
                            <div class="index-news-description text-justify">Bạn đã sẵn sàng để đón nhận những thứ
                                sẽ trở thành xu hướng thiết kế nội thất trong năm sau và nhiều nhiều năm sau nữa?Một
                                năm mới lại tới với những sự khởi đầu mới, tại sao không bắt đầu từ ngay trong chính
                                căn nhà của bạn? Khi nhắc đến những chất liệu và thiết kế là xu hướng của các năm
                                trước, chắc chắn những chuyên gia, stylish không chỉ về nội thất mà còn là designer,
                                kiến trúc sư, decorator là những người hiểu rõ hơn ai hết.</div>
                            <a href="/15-xu-huong-thiet-ke-noi-that-moi-nhat-n57752.html" class="index-news-link">Xem thêm</a>
                        </div>
                    </div>
                    <div class="index-news-block position-relative item-hover-bottom-line">
                        <div class="index-news-img">
                            <a href="/giai-phap-thiet-ke-noi-that-nha-ong-hien-dai-n57751.html">
                                <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/art/20191221_9YyoIFbwQYpkQ3aGQXi3mQjk.jpg" alt="Giải pháp thiết kế nội thất nhà ống hiện đại">
                            </a>
                        </div>
                        <div class="index-news-date d-flex align-items-center text-center">
                            21 / 12 2019</div>
                        <div class="index-news-info">
                            <h6 class="index-news-title margin-bottom-lg-15">
                                <a href="/giai-phap-thiet-ke-noi-that-nha-ong-hien-dai-n57751.html" class="tp_title">Giải pháp thiết kế nội thất nhà ống hiện đại</a>
                            </h6>
                            <div class="index-news-description text-justify">Nhà ống là hình thể của loại hình nhà
                                phố phổ biến hiện nay, đặc điểm chung của nhà ống là không gian nhà chật hẹp, thiếu
                                ánh sáng, không khí tự nhiên. Tuy nhiên, với cách thiết kế nội thất hài hòa về kiến
                                trúc và môi trường xung quanh hợp lý trong cách bố trí, sắp xếp nội thất sẽ giúp căn
                                nhà của bạn trở nên sang trọng, hiện đại.</div>
                            <a href="/giai-phap-thiet-ke-noi-that-nha-ong-hien-dai-n57751.html" class="index-news-link">Xem thêm</a>
                        </div>
                    </div>
                    <div class="index-news-block position-relative item-hover-bottom-line">
                        <div class="index-news-img">
                            <a href="/trang-tri-khong-gian-noi-that-dep-voi-chat-lieu-go-cao-cap-n57750.html">
                                <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/art/20191221_4Wxr9zVOprA7jtzKyjUsRtUj.jpg" alt="Trang trí không gian nội thất đẹp với chất liệu gỗ cao cấp">
                            </a>
                        </div>
                        <div class="index-news-date d-flex align-items-center text-center">
                            21 / 12 2019</div>
                        <div class="index-news-info">
                            <h6 class="index-news-title margin-bottom-lg-15">
                                <a href="/trang-tri-khong-gian-noi-that-dep-voi-chat-lieu-go-cao-cap-n57750.html" class="tp_title">Trang trí không gian nội thất đẹp với chất liệu gỗ cao cấp</a>
                            </h6>
                            <div class="index-news-description text-justify">Gỗ là chất liệu quen thuộc và gần gũi
                                với cuộc sống của người Việt từ xưa đến nay. Vì thế, trang trí không gian nội thất
                                đẹp với chất liệu gỗ tự nhiên hay công nghiệp chắc chắn sẽ là sự lựa chọn của nhiều
                                gia đình.</div>
                            <a href="/trang-tri-khong-gian-noi-that-dep-voi-chat-lieu-go-cao-cap-n57750.html" class="index-news-link">Xem thêm</a>
                        </div>
                    </div>
                    <div class="index-news-block position-relative item-hover-bottom-line">
                        <div class="index-news-img">
                            <a href="/san-pham-noi-that-thong-minh-chat-luong-tai-ha-noi-n57749.html">
                                <img class="lazyload" data-sizes="auto" src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" data-src="https://pos.nvncdn.net/ced45f-64461/art/20191221_09O71QBNAAjf39746Md9XJDZ.jpg" alt="SẢN PHẨM NỘI THẤT THÔNG MINH CHẤT LƯỢNG TẠI HÀ NỘI">
                            </a>
                        </div>
                        <div class="index-news-date d-flex align-items-center text-center">
                            21 / 12 2019</div>
                        <div class="index-news-info">
                            <h6 class="index-news-title margin-bottom-lg-15">
                                <a href="/san-pham-noi-that-thong-minh-chat-luong-tai-ha-noi-n57749.html" class="tp_title">SẢN PHẨM NỘI THẤT THÔNG MINH CHẤT LƯỢNG TẠI HÀ NỘI</a>
                            </h6>
                            <div class="index-news-description text-justify">Để có một ngôi nhà đẹp thì nội thất
                                chính là yếu tố quyết định. Những đồ nội thất bạn sở hữu trong ngôi nhà của bạn sẽ
                                nói lên tính cách, gu thẩm mỹ và năng lực về tài chính của bạn. Nhất là trong cuộc
                                sống hiện nay, xu hướng ở những căn hộ chung cư cao thường là rất nhiều. Vì thế cho
                                nên những sản phẩm về nội thất thông minh là lựa chọn tuyệt vời để tiết kiệm không
                                gian cho ngôi nhà.</div>
                            <a href="/san-pham-noi-that-thong-minh-chat-luong-tai-ha-noi-n57749.html" class="index-news-link">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-brands padding-lg-30">
        <div class="container">
            <div class="row">
                <div class="index-brands-box owl-carousel position-relative">
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Light chair" class="lazyload" data-sizes="auto" data-src="https://pos.nvncdn.net/ced45f-64461/brand/20191225_OrrsVseaQJwm0IlDiyLCcNvc.png">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Larner" class="lazyload" data-sizes="auto" data-src="https://pos.nvncdn.net/ced45f-64461/brand/20191225_HmFcHKACS9xQGgoa3CvzMtlz.png">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Home" class="lazyload" data-sizes="auto" data-src="https://pos.nvncdn.net/ced45f-64461/brand/20191225_xrRVo14IAqMkL50vQ7ha2ctC.png">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="City Funi" class="lazyload" data-sizes="auto" data-src="https://pos.nvncdn.net/ced45f-64461/brand/20191225_GnFuW7jce5USs6zRw7RBuqOL.png">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Wages" class="lazyload" data-sizes="auto" data-src="https://pos.nvncdn.net/ced45f-64461/brand/20191225_z9kNYVPaFHwAz0ndx7XwVFQH.png">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Magnusses" class="lazyload" data-sizes="auto" data-src="https://pos.nvncdn.net/ced45f-64461/brand/20191225_8A5bBs57f2IQ62c5BF5lyO45.png">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Cabaret" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Verona" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Caruso" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Edward" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Sacramento" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Sitting Bull" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Carnaby" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Toronto" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Mozart" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Lynn" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Temasek" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Kitka" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Uma" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Stefano" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Marryland" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Batista" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Cobra" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Idasy" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="NanJing" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Viking" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Domingo" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Bogart" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Connemara" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                    <div class="index-brands-block d-flex align-items-center">
                        <img src="https://web.nvnstatic.net/tp/T0444/img/blank.png?v=3" alt="Việt Nam" class="lazyload" data-sizes="auto" data-src="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>