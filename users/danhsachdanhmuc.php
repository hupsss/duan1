<section class="section-category">
    <div class="site-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-block">
                    
                    <a href="?act=trangchu" class="breadcrumb-link">Trang chủ</a>
                    <span class="breadcrumb-icon">>></span>
                   
                        <?php
                            // Kiểm tra xem có sản phẩm trong danh sách không
                            if (!empty($dssp)) {
                                // Lấy tên danh mục từ sản phẩm đầu tiên trong danh sách
                                $firstProduct = reset($dssp); // Lấy phần tử đầu tiên của mảng
                                $categoryName = $firstProduct['category_name'];
                                
                                // In ra tên danh mục
                                echo '<span class="breadcrumb-item">' . $categoryName . '</span>';
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section-category-box padding-lg-30">
        <div class="container">
            <div class="row">
                <div class="sidebar-left category-sidebar d-none d-lg-block col-lg-3">
                    <div class="sidebar-left-box">
                        <div class="sidebar-left-category margin-bottom-lg-30 tp_product_category_filter_category">
                            <div class="sidebar-left-box-header margin-bottom-lg-20">
                                <h5 class="sidebar-left-box-label position-relative">
                                    <a href="javascript:void(0);" class="tp_title position-relative">Danh mục sản
                                        phẩm</a>
                                </h5>
                            </div>
                            <div class="sidebar-left-box-items">
                                <ul class="sidebar-left-ul sidebar-left-ul-1">
                                    <!-- lọc danh sách danh mục-->
                                <?php foreach($dsdm as $dm) : ?>
                                    <li class="sidebar-left-li sidebar-left-li-1 ">
                                        <a href="?act=timkiemdm&category_id=<?= $dm['category_id']?>" class="sidebar-left-link sidebar-left-link-1"><?= $dm['category_name']?></a>
                                    </li>
                                <?php endforeach?>

                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-left-price margin-bottom-lg-30 tp_product_category_filter_price">
                            <div class="sidebar-left-box-header margin-bottom-lg-20">
                                <h5 class="sidebar-left-box-label position-relative">
                                    <a href="javascript:void(0);" class="tp_title position-relative">Giá sản
                                        phẩm</a>
                                </h5>
                            </div>
                            
                            <div class="sidebar-left-box-items">
                                <div class="price_slider_wrapper">
                                    <div class="widget_price_filter">
                                        <span class="text-green" style="font-size: 14px">
                                            <input type="hidden" id="hidden_minimum_price" value="1000">
                                            <input type="hidden" id="hidden_maximum_price" value="20000000">
                                            <p id="price-show">Từ: 10000 - 1000000</p>
                                        </span>
                                        <div id="slider-range"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-left-filter sidebar-left-Chất Liệu margin-bottom-lg-30 tp_product_category_filter_category">
                            <div class="sidebar-left-box-header margin-bottom-lg-20">
                                <h5 class="sidebar-left-box-label position-relative">
                                    <a href="javascript:void(0);" class="tp_title position-relative">Chất Liệu</a>
                                </h5>
                            </div>
                            <div class="sidebar-left-box-items">
                                <ul class="sidebar-left-ul sidebar-left-ul-1">
                                    <!-- Lọc chất liệu -->
                                    <?php foreach($material as $ma) : ?>
                                    <li class="sidebar-left-li sidebar-left-li-1 sidebar-left-filter" data-filter="/phong-ngu-pc381716.html?i3=786634">
                                        <input type="checkbox" class="common_selector material" value="<?= $ma['material']?>">
                                        <label class="position-relative pointer"><?= $ma['material']?></label>
                                    </li>
                                    <?php endforeach?>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-left-filter sidebar-left-Kích thước margin-bottom-lg-30 tp_product_category_filter_category">
                            <div class="sidebar-left-box-header margin-bottom-lg-20">
                                <h5 class="sidebar-left-box-label position-relative">
                                    <a href="javascript:void(0);" class="tp_title position-relative">Kích thước</a>
                                </h5>
                            </div>
                            <div class="sidebar-left-box-items">
                                <ul class="sidebar-left-ul sidebar-left-ul-1">
                                    <?php foreach($size as $s)?>
                                    <li class="sidebar-left-li sidebar-left-li-1 sidebar-left-filter" data-filter="/phong-ngu-pc381716.html?i2=786637">
                                        <input type="checkbox" class="common_selector size" value="<?= $s['size']?>">
                                        <label class=" position-relative pointer"><?= $s['size']?></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-left-filter sidebar-left-Màu sắc margin-bottom-lg-30 tp_product_category_filter_category">
                            <div class="sidebar-left-box-header margin-bottom-lg-20">
                                <h5 class="sidebar-left-box-label position-relative">
                                    <a href="javascript:void(0);" class="tp_title position-relative">Màu sắc</a>
                                </h5>
                            </div>
                            <div class="sidebar-left-box-items">
                                <ul class="sidebar-left-ul sidebar-left-ul-1">
                                    <!-- Lọc Màu sắc -->
                                    <?php foreach($color as $cl) :?>
                                    <li class="sidebar-left-li sidebar-left-li-1 sidebar-left-filter" data-filter="">
                                        <input type="checkbox" class="common_selector color" value="<?= $cl['color']?>">
                                        <label class=" position-relative pointer"><?= $cl['color']?></label>
                                    </li>
                                    <?php endforeach?>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-left-hot-product margin-bottom-lg-30 tp_product_detail_related">
                            <div class="sidebar-left-box-header margin-bottom-lg-20">
                                <h5 class="sidebar-left-box-label position-relative">
                                    <a href="javascript:void(0);" class="tp_title position-relative">Sản phẩm bán
                                        chạy</a>
                                </h5>
                            </div>
                            <div class="sidebar-left-box-items">
                                <?php foreach($sanPhamBanChay as $sp) : ?>
                                    <div class="sidebar-left-product-item row">
                                        <div class="sidebar-left-product-img col-4 padding-0">
                                            <a href="?act=chitiet&id=<?= $sp['product_id'] ?>">
                                                <img src="admin/upload/<?= $sp['image']?>"  class="lazyload" alt="<?= $sp['product_name']?>">
                                            </a>
                                        </div>
                                        <div class="sidebar-left-product-info col-8">
                                            <div class="product-name">
                                                <a href="?act=chitiet&id=<?= $sp['product_id'] ?>" class="tp_product_name"><?= $sp['product_name']?></a>
                                            </div>
                                            <div class="sidebar-left-product-price">
                                                <div class="product-price tp_product_price"><?= number_format($sp['price'])?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="category-block col-12 col-lg-9">
                    <style>
                        .category-banner {
                            background: url('') center center no-repeat;
                        }
                    </style>
                    <div class="category-banner d-flex align-items-center justify-content-center position-relative margin-bottom-lg-30">
                        
                        <?php
                            // Kiểm tra xem có sản phẩm trong danh sách không
                            if (!empty($dssp)) {
                                // Lấy tên danh mục từ sản phẩm đầu tiên trong danh sách
                                $firstProduct = reset($dssp); // Lấy phần tử đầu tiên của mảng
                                $categoryName = $firstProduct['category_name'];
                                
                                // In ra tên danh mục
                                echo '<h1 class="category-banner-name tp_title">'.$categoryName.'</h1>';
                            }
                        ?>
                    <?php 
                    // var_dump($id);
                    // die;
                    ?>
                    </div>
                    <div class="category-banner-description margin-bottom-lg-30"></div>
                    <div class="category-product-box">
                        <div class="product-softbar d-flex justify-content-end align-items-center">
                            <span class="product-softbar-label">Sắp xếp</span>
                            <ul class="product-softbar-option pointer position-relative">
                                <li class="product-softbar-select">
                                    <span>
                                        Mặc định </span>
                                </li>
                                <ul class="product-softbar-option-list hide">
                                    <li><a href="/phong-an-pc381715.html?show=priceAsc" class="d-block">Giá tăng
                                            dần</a></li>
                                    <li><a href="/phong-an-pc381715.html?show=priceDesc" class="d-block">Giá giảm
                                            dần</a></li>
                                    <li><a href="/phong-an-pc381715.html?show=nameAsc" class="d-block">A - Z</a>
                                    </li>
                                    <li><a href="/phong-an-pc381715.html?show=nameDesc" class="d-block">Z - A</a>
                                    </li>
                                </ul><i class="fa fa-angle-down" aria-hidden="true"></i>
                            </ul>
                        </div>
                        <div class="category-product-block">
                            <div class="row pagination">
                                    
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>