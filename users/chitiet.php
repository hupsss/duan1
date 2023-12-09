<section class="section-pview">
    <div class="site-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-block">
                    <a href="?act=trangchu" class="breadcrumb-link">Trang chủ</a>
                    <span class="breadcrumb-icon">>></span>
                    <span class="breadcrumb-item"><?= $ctsp['product_name'] ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="pview-box padding-lg-30" data-psId="18810311" data-storeId="64461">
        <div class="container">
            <div class="row">
                <div class="pview-box-img col-12 col-lg-6">
                    <div id="pviewImgParent" class="pview-img-parent pointer margin-bottom-lg-15">
                        <img id="pviewImg" src="admin/upload/<?= $ctsp['image'] ?>" alt="Bộ bàn ăn Stefano" class="cloudzoom" data-cloudzoom="zoomImage: 'admin/upload/<?= $ctsp['image'] ?>', zoomPosition: 'inside', zoomOffsetX: 0, disableOnScreenWidth: 768">
                    </div>
                    <div class="pview-img-child owl-carousel margin-bottom-lg-15" id="pview-img-child-mobile">
                        <div class="pview-img-child-box" data-src="admin/upload/<?= $ctsp['image'] ?>">
                            <img src="admin/upload/<?= $ctsp['image'] ?>" class="cloudzoom-gallery" data-cloudzoom="useZoom: '.cloudzoom', image: 'admin/upload/<?= $ctsp['image'] ?>', zoomImage: 'admin/upload/<?= $ctsp['image'] ?>'">
                        </div>
                        <!-- <div class="pview-img-child-box" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_KexepctcWvdGNWBlKsLyxlwk.jpg">
                            <img src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_KexepctcWvdGNWBlKsLyxlwk.jpg" class="cloudzoom-gallery" data-cloudzoom="useZoom: '.cloudzoom', image: 'https://pos.nvncdn.net/ced45f-64461/ps/20191221_KexepctcWvdGNWBlKsLyxlwk.jpg', zoomImage: 'https://pos.nvncdn.net/ced45f-64461/ps/20191221_KexepctcWvdGNWBlKsLyxlwk.jpg'">
                        </div>
                        <div class="pview-img-child-box" data-src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_lNvYCizPnj8MBRbEWlbb3KFS.jpg">
                            <img src="https://pos.nvncdn.net/ced45f-64461/ps/20191221_lNvYCizPnj8MBRbEWlbb3KFS.jpg" class="cloudzoom-gallery" data-cloudzoom="useZoom: '.cloudzoom', image: 'https://pos.nvncdn.net/ced45f-64461/ps/20191221_lNvYCizPnj8MBRbEWlbb3KFS.jpg', zoomImage: 'https://pos.nvncdn.net/ced45f-64461/ps/20191221_lNvYCizPnj8MBRbEWlbb3KFS.jpg'">
                        </div> -->
                    </div>
                </div>
                <div class="pview-box-info col-12 col-lg-6">
                    <h3 class="pview-name margin-bottom-lg-15 tp_product_detail_name"><?= $ctsp['product_name'] ?></h3>
                    <input type="hidden" id="hidden-p-name" value="Bộ bàn ăn Stefano">
                    <div class="pview-rating">
                        <p class="number-purchase">Đã bán: 0</p>
                    </div>
                    <div class="pview-price margin-bottom-lg-15">
                        <div class="product-price tp_product_detail_price d-inline-block"><?= number_format($ctsp['price']) ?> VND</div>
                    </div>
                    <div class="pview-id margin-bottom-lg-10">
                        Mã sản phẩm: <strong><?= $ctsp['product_id'] ?></strong></div>
                    <div class="pview-status margin-bottom-lg-10"></div>
                    <div class="pview-type margin-bottom-lg-10">
                        Loại sản phẩm: <strong><?= $dmct['category_name'] ?></strong></div>
                    <div class="pview-intro margin-bottom-lg-10">
                        <div class="pview-intro-label position-relative" onclick="toggleProductIntro()">
                            <strong>Giới thiệu sản phẩm</strong>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                        <div class="pview-intro-content hide" style="display: none;">
                            <p><?= $dmct['description'] ?></p>
                        </div>
                        <div class="pview-intro-content hide">
                            <p><?= $ctsp['descripsion'] ?></p>
                        </div>
                    </div>
                    <div class="pview-color margin-bottom-lg-10 row align-items-center">
                        <div class="pview-color-label col-3 padding-0"><b>Màu sắc:</b></div>
                        <div class="pview-color-wrapper col-9 position-relative padding-0">
                            <div class="pview-color-wrapper-label position-relative pointer">
                                <span><strong><?= $ctsp['color'] ?></strong></span>

                            </div>
                        </div>
                    </div>
                    <div class="pview-size margin-bottom-lg-10 row align-items-center">
                        <div class="pview-size-label col-3 padding-0"><b>Kích cỡ:</b></div>
                        <div class="pview-size-wrapper col-9 position-relative padding-0">
                            <div class="pview-size-wrapper-label position-relative pointer">
                                <span><strong><?= $ctsp['size'] ?></strong></span>

                            </div>
                        </div>
                    </div>
                    <div class="pview-quantity col-12 row align-items-center padding-0 margin-bottom-lg-10">
                        <div class="pview-quantity-label col-3 padding-0"><b>Số lượng:</b></div>
                        <div class="pview-quantity-box col-9 row padding-0">
                            <a href="javascript:void(0);" class="entry number-minus d-inline-flex align-items-center justify-content-center">-</a>
                            <input type="number" class="entry number form-control text-center" id="psQtt" max="5000" min="1" value="1">
                            <a href="javascript:void(0);" class="entry number-plus d-inline-flex align-items-center justify-content-center">+</a>
                        </div>
                    </div>

                    <div class="pview-control-button col-12 padding-0">

                        <button class="pview-buy-button btn button-hover-line tp_button" onclick="addCart(<?= $ctsp['product_id'] ?>)">
                            <span><i class="fa fa-shopping-cart" aria-hidden="true"></i> Thêm vào giỏ hàng</span>
                        </button>
                        <button class="pview-buy-button btn button-hover-line tp_button" id="buyButton" data-psId="<?= $ctsp['product_id'] ?>" data-psName="<?= $ctsp['product_name'] ?>" data-psPrice="<?= $ctsp['price'] ?>"  data-psQuantity="1" data-ck="0">
                            <span>Mua hàng</span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pview-tab margin-bottom-lg-30">
        <div class="container">
            <div class="row">
                <div class="group-tab col-12">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-pview-description-tab" data-toggle="pill" href="#pills-pview-description" role="tab" aria-controls="pills-pview-description" aria-selected="true">Mô tả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-pview-buying-guide-tab" data-toggle="pill" href="#pills-pview-buying-guide" role="tab" aria-controls="pills-pview-buying-guide" aria-selected="false">Hướng dẫn mua hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-pview-tags-tab" data-toggle="pill" href="#pills-pview-tags" role="tab" aria-controls="pills-pview-tags" aria-selected="false">Tags</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content col-12" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-pview-description" role="tabpanel" aria-labelledby="pills-pview-description-tab">
                        <p><?= $ctsp['descripsion'] ?></p>
                    </div>
                    <div class="tab-pane fade" id="pills-pview-buying-guide" role="tabpanel" aria-labelledby="pills-pview-buying-guide-tab">
                        Đang cập nhật...</div>
                    <div class="tab-pane fade" id="pills-pview-tags" role="tabpanel" aria-labelledby="pills-pview-tags-tab">
                        Đang cập nhật...</div>
                </div>
            </div>
        </div>
    </div>
    <div class="pview-faq padding-lg-30">
        <div class="container">
            <div class="row" style="display: block !important;">
                <div class="index-product-box-header margin-bottom-lg-30 col-12">
                    <h5 class="index-product-box-label position-relative">
                        <a href="javascript:void(0);" class="tp_title position-relative">Bình Luận</a>
                    </h5>
                </div>
                <div class="pview-faq-box fb-comments" id="listComment">
                    <script>
                        $(document).ready(function() {
                            var id_product = <?= $ctsp['product_id'] ?>;
                            $('#comments-list').load("users/binhluan/formbl.php", {
                                id_product: id_product
                            });
                        });
                    </script>
                    <div class="container-comment">
                        <ul class="comments" id="comments-list">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pview-related-product padding-lg-30 tp_product_detail_related">
        <div class="container">
            <div class="row">
                <div class="index-product-box-header margin-bottom-lg-30 col-12">
                    <h5 class="index-product-box-label position-relative">
                        <a href="" class="tp_title position-relative">
                            Sản phẩm liên quan </a>
                    </h5>
                </div>
                <div class="index-product-box-list index-new-product-box row">
                    <?php foreach ($spcl as $sp) : ?>
                        <div class="product-box" data-psId="18810311">
                            <div class="product-img position-relative">
                                <a href="?act=chitiet&id=<?= $sp['product_id'] ?>">
                                    <img data-sizes="auto" class="lazyload" src="admin/upload/<?= $sp['image'] ?>" data-src="admin/upload/<?= $sp['image'] ?>" alt="<?= $sp['product_name'] ?>">
                                </a>
                            </div>
                            <div class="product-info">
                                <div class="product-rating text-center">
                                    <p id="voteView0" class="si ic voteView"></p>
                                </div>
                                <h6 class="product-name text-center">
                                    <a href="?act=chitiet&id=<?= $sp['product_id'] ?>" class="tp_product_name"><?= $sp['product_name'] ?></a>
                                </h6>
                                <div class="product-price-box text-center">
                                    <div class="product-price tp_product_price"><?= number_format($sp['price']) ?></div>
                                </div>
                                <div class="product-action text-center">
                                    <a href="?act=chitiet&id=<?= $sp['product_id'] ?>" class="btn button-hover-line tp_button">
                                        <span>Tùy chọn</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Lấy dữ liệu sau khi click mua ngay -->

<!--  -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const quantityInput = document.getElementById('psQtt');
        const numberMinus = document.querySelector('.number-minus');
        const numberPlus = document.querySelector('.number-plus');

        numberMinus.addEventListener('click', function() {
            decrementQuantity();
        });

        numberPlus.addEventListener('click', function() {
            incrementQuantity();
        });

        function incrementQuantity() {
            let currentValue = parseInt(quantityInput.value, 10);
            if (currentValue < parseInt(quantityInput.max, 10)) {
                quantityInput.value = currentValue + 1;
            }
        }

        function decrementQuantity() {
            let currentValue = parseInt(quantityInput.value, 10);
            if (currentValue > parseInt(quantityInput.min, 10)) {
                quantityInput.value = currentValue - 1;
            }
        }
    });
</script>