<style>
    .title {
        margin-top: 30px;
    }
    .container-fluid {
        margin-bottom: 100px;
    }
</style>
<div class="container">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="title" class="h3 mb-2 text-gray-800">Thêm Danh Mục</h1>
        <form action="index.php?act=adddm" method="post">
            <div class="form-group">
                <label for="disabledTextInput">Tên Danh Mục</label>
                <input type="text" id="disabledTextInput" class="form-control" name="category_name" placeholder="Nhập Tên Sản Phẩm">
            </div>
            <input type="submit" value="Thêm Danh Mục">
        </form>
    </div>
</div>