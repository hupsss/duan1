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
        <h1 class="title" class="h3 mb-2 text-gray-800">Danh Sách Danh Mục</h1>
        <p class="mb-4">Thêm danh mục sản phẩm</a>.</p>
        <a href="index.php?act=adddm">
            <button type="button" class="btn btn-primary">Thêm Danh Mục</button>
        </a>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Các Loại Danh Mục</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mã Danh Mục </th>
                                <th>Tên Danh Mục </th>
                                <th>Thêm</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <?php foreach ($dsdm as $dm) : ?>
                                <tr>
                                    <td><?= $dm['category_id'] ?></td>
                                    <td><?= $dm['category_name'] ?></td>
                                    <td>
                                        <a href="index.php?act=editdm&id=<?= $dm['category_id'] ?>"><button type="button" class="btn btn-warning">Sửa</button></a>
                                        <a href="index.php?act=deledm&id=<?= $dm['category_id'] ?>" onclick="return confirm('ban muon xoa khong')"><button type="button" class="btn btn-danger">Xóa</button></a>
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