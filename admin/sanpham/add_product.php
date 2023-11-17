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
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Product name</span>
                <input type="text" name="product_name" class="form-control" placeholder="Tên Sản Phẩm" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Price</span>
                <input type="number" name="price" class="form-control" placeholder="Giá" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Discount</span>
                <input type="number" name="discount" class="form-control" placeholder="Giảm Giá" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <!-- <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Image</span>
                <input type="file" name="image" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div> -->
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="customFile">
                <label class="custom-file-label"  for="customFile">Chọn ảnh</label>
            </div>
            <div class="input-group">
                <span class="input-group-text">descripsion</span>
                <textarea class="form-control" name="descripsion" aria-label="With textarea" placeholder="Mô Tả Sản Phẩm"></textarea>
            </div>
            <br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Size</span>
                <input type="text" name="size" class="form-control" placeholder="Kích cỡ" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Color</span>
                <input type="text" name="color" class="form-control" placeholder="Màu sắc" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Material</span>
                <input type="text" name="material" class="form-control" placeholder="Chất liệu" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Special</span>
                <input type="number" name="special" min="0" class="form-control" placeholder="Chất liệu" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <select class="custom-select my-1 mr-sm-2" name="id_category" id="inlineFormCustomSelectPref">
                <?php foreach ($dsdm as $dm) : ?>
                    <option value="<?= $dm['category_id'] ?>">
                        <?= $dm['category_name'] ?>
                    </option>
                <?php endforeach ?>
            </select>
            <br>
            <?php 
                if(isset($tt) && $tt != "") {
                    echo "<div style='color:red'>$tt</div>";
                }
                if(isset($tb) && ($tb != "")) {
                   echo $tb;
                }
            ?>
            <input type="submit" class="btn-submit" name="submit" value="Thêm Sản Phẩm">
            <a href="index.php?act=dssp">Danh Sách</a>
        </form>
    </div>
</div>