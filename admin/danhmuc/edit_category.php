<style>
    .title {
        margin-top: 30px;
    }
    .container-fluid {
        margin-bottom: 100px;
    }
    .btn_input {
        background-color: #007bff;
        color: #fff;
        border: none;
        outline: none;
        padding: 5px 10px;
    }
</style>
<div class="container">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="title" class="h3 mb-2 text-gray-800">Cập Nhập Danh Mục</h1>
        <form action="index.php?act=updatedm" method="post">
            <div class="form-group">
                <label for="disabledTextInput">Tên Danh Mục</label>
                <input type="hidden" name="category_id" value="<?= $kq['category_id']?>">
                <input type="text" id="disabledTextInput" class="form-control" name="category_name" value="<?= $kq['category_name']?>"  placeholder="Nhập Tên Sản Phẩm">
            </div>
            <?php 
                if(isset($tb) && ($tb != "")) {
                    echo "
                        <div style='color:green'>$tb</div>
                    ";
                }
            ?> 
            <input class="btn_input" type="submit" name="submit" value="Cập Nhập Danh Mục">
            <a href="index.php?act=dsdm">Danh Sách</a>
        </form>
    </div>
</div>