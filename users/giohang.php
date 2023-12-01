<section class="h-100 h-custom" style="background-color: #fff;" id="listCart">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">

                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Giỏ Hàng</h1>
                                        <h6 class="mb-0 text-muted">SL: <strong><?= $quantity ?></strong></h6>
                                    </div>
                                    <hr class="my-4">
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        $quantity = 0;
                                        $total = 0;
                                        $subtotal = 0;
                                        foreach ($_SESSION['cart'] as $key => $item) {
                                            $quantity += (int)$item['quantity'];
                                            $total += (int)$item['quantity'] * (int)$item['price'];
                                    ?>
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="admin/upload/<?= $item['image'] ?>" class="img-fluid rounded-3" alt="<?= $item['product_name'] ?>">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <!-- <h6 class="text-muted">Shirt</h6> -->
                                                    <h6 class="text-black mb-0"><?= $item['product_name'] ?></h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button class="btn btn-link px-2 btn_down" data-id='<?= $key ?>' onclick="down(event)">
                                                        <i class="fa fa-minus"></i>
                                                    </button>

                                                    <input min="0" name="quantity" id="qty_<?= $key ?>" value="<?= $item['quantity'] ?>" type="number" class="form-control form-control-sm" style="width: 32px;">

                                                    <button class="btn btn-link px-2 btn_up" data-id='<?= $key ?>' onclick="up(event)">
                                                        <i class="fa fa-plus"></i>
                                                    </button>

                                                </div>

                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0"><?= number_format((int)$item['quantity'] * (int)$item['price']) ?> VND</h6>
                                                    <?php $subtotal += $total; ?>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <div class="text-muted" onclick="deleteCart(<?= $key ?>)">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-4">

                                            <div class="pt-5">
                                                <h6 class="mb-0"><a href="?act=xoagiohang" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Xóa giỏ hàng</a></h6>
                                            </div>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <h3 class="fw-bold mb-0 text-black">Chưa có sản Phẩm nào !!</h3>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Chí Tiết Hóa đơn</h3>
                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase">SL:</h5>
                                        <h5><?= $quantity ?> Sản phẩm</h5>
                                    </div>
                                    <!-- <h5 class="text-uppercase mb-3">Give code</h5>

                                    <div class="mb-5">
                                        <div class="form-outline">
                                            <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Examplea2">Enter your code</label>
                                        </div>
                                    </div> -->

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Tổng tiền</h5>
                                        <h5><?= number_format($subtotal) ?></h5>
                                    </div>

                                    <a href="?act=checkout"><button type="button" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Đặt Hàng</button></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>