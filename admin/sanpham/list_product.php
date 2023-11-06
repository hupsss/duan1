<style>
    .title {
        margin-top: 30px;
    }

    .btn {
        margin-bottom: 30px;
    }
</style>
<div class="container">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="title" class="h3 mb-2 text-gray-800">Danh Sách Sản Phẩm</h1>
        <p class="mb-4">Thêm sản phẩm cho danh muc</a>.</p>
        <a href="index.php?act=addsp">
            <button type="button" class="btn btn-primary">Thêm Sản Phẩm</button>
        </a>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Các Loại Sản Phẩm</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mã Sản Phẩm</th>
                                <th>Tên Sản Phẩm </th>
                                <th>Giá</th>
                                <th>Giảm Giá</th>
                                <th>Hình Ảnh</th>
                                <th>Mô Tả</th>
                                <th>Tên Danh Mục</th>
                                <th>Lượt Xem</th>
                                <th>Thêm</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <?php foreach ($dssp as $sp) : ?>
                                <tr>
                                    <td><?= $sp['product_id'] ?></td>
                                    <td><?= $sp['product_name'] ?></td>
                                    <td><?= $sp['price'] ?></td>
                                    <td><?= $sp['discount'] ?></td>
                                    <td>
                                        <img src="upload/<?= $sp['image']?>" alt="" width="50px">
                                    </td>
                                    <td><?= $sp['descripsion'] ?></td>
                                    <td><?= $sp['category_name'] ?></td>
                                    <td><?= $sp['view'] ?></td>
                                    <td>
                                        <a href="index.php?act=editsp&id=<?= $sp['product_id'] ?>"><button type="button" class="btn btn-warning">Sửa</button></a>
                                        <a href="index.php?act=delesp&id=<?= $sp['product_id'] ?>" onclick="return confirm('ban muon xoa khong')"><button type="button" class="btn btn-danger">Xóa</button></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>