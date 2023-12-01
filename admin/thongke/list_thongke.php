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
        <h1 class="title" class="h3 mb-2 text-gray-800">Thống Kê Sản Phẩm</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thống Kê Sản Phẩm</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Danh Mục</th>
                                <th>Số Lượng Sản Phẩm</th>
                                <th>Giá Cao Nhất</th>
                                <th>Giá Thấp Nhất</th>
                                <th>Giá Trung Bình</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <?php foreach ($ds_thongke as $item) : ?>
                                <tr>
                                    <th scope="row"><?= $item['category_id'] ?></th>
                                    <td><?= $item['category_name'] ?></td>
                                    <td><?= $item['countpro'] ?></td>
                                    <td><?= $item['minpro'] ?></td>
                                    <td><?= $item['maxpro'] ?></td>
                                    <td><?= $item['avgpro'] ?></td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>