<style>
    .btn-submit {
        border: none;
        outline: none;
        width: 200px;
        height: 30px;
        margin: 20px 0;
        background-color: #007bff;
        color: aliceblue;
    }

    .custom-file {
        margin-bottom: 10px;

    }

    .btn-submit:hover {
        color: lightblue;
        background-color: coral;
    }

    .input-group {
        margin-bottom: 10px;
    }
</style>
<div class="container">
    <div class="content-title">
        <h1>Thêm Sản Phẩm</h1>
    </div>
    <div class="form-add">
        <form action="index.php?act=editsp" method="post" enctype="multipart/form-data">
        <div class="input-group flex-nowrap">

            <input type="hidden" name="product_id" value="<?= $kq['product_id'] ?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Product name</span>
            <input type="text" class="form-control" name="product_name" value="<?= $kq['product_name'] ?>" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Price</span>
            <input type="number" class="form-control" name="price" value="<?= $kq['price'] ?>" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Discount</span>
            <input type="number" class="form-control" name="discount" value="<?= $kq['discount'] ?>" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="image" value="<?= $kq['image']?>" id="customFile">
            <label class="custom-file-label"  for="customFile">Chọn ảnh</label>
        </div>
        <div style="width: 80px;">
            <img src="upload/<?= $kq['image'] ?>" width="80px" height="80px" alt="">
        </div>    
        <div class="input-group">
            <span class="input-group-text">descripsion</span>
            <textarea class="form-control" name="descripsion" aria-label="With textarea"><?= $kq['descripsion'] ?></textarea>
        </div>
        <br>
        <select class="form-select" name="id_category" aria-label="Default select example">
            <?php foreach ($dsdm as $dm) : ?>
                <option value="<?= $dm['category_id'] ?>" <?= ($dm['category_id'] == $kq['id_category']) ? 'selected' : '' ?>>
                    <?= $dm['category_name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <?php
        if (isset($tb) && ($tb != "")) {
            echo $tb;
        }
        ?>
        <input type="submit" class="btn-submit" name="submit" value="Cập Nhập Sản Phẩm">
        </form>
    </div>
</div>