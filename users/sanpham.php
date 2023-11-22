<div class="index-new-products index-product-box position-relative padding-lg-30 tp_product_new">
        <div class="container">
            <div class="row">
                <div class="index-product-box-header margin-bottom-lg-30">
                    <h5 class="index-product-box-label position-relative">
                        <a href="/product?show=new" class="position-relative tp_title">
                            Sản phẩm </a>
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