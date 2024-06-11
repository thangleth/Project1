<?php
$catalog_html = '';
$stt = 1;
    foreach ($danhmuc as $item) {
        extract($item);
        if ($imgdm != '') {
            $img_file = '../' . PATH_IMG . $imgdm;
            if (is_file($img_file)) {
                $img = '<img src="' . $img_file . '" alt="" style="width: 120px;">';
            } else {
                $img = '';
            } 
        } else {
            $img = '';
        }
        $linkedit = '<a href="index.php?page=updatedmform&iddm=' . $iddm . '" class="btn btn-warning m-1">Sửa</a>';
        $linkdelete = '<a href="index.php?page=deletedm&iddm=' . $iddm . '" class="btn btn-danger"> Xóa</a>';
        $catalog_html .= '<tr>
                                        <td>' . $stt . '</td>
                                        <td>' . $tendm . '</td>
                                        <td>' . $img . '</td>
                                        <td>' . $hienthi . '</td>
                                        <td>' . $linkedit . '' . $linkdelete . '</td>
                                    </tr>';
        $stt++;
    }
?>
<div class="main-content">
    <h3 class="title-page">
        Danh mục
    </h3>
    <div class="d-flex justify-content-end">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Thêm danh mục
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm danh mục</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="addPro" action="index.php?page=adddm" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Tên danh mục:</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Nhập tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh sản phẩm</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Hiển thị</label>
                                <textarea class="form-control" name="display" rows="3"
                                    placeholder="Bạn có muốn danh mục hiển thi không" style="height: 78px;"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btnadddm" class="btn btn-dark">Thêm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên danhn mục</th>
                <th>Hình ảnh</th>
                <th>Hiển thị</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <?php
        ?>
        <tbody><?= $catalog_html ?></tbody>
        <tfoot>
            <tr>
                <th>STT</th>
                <th>Tên danhn mục</th>
                <th>Hình ảnh</th>
                <th>Hiển thị</th>
                <th>Thao tác</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
<script src="assets/js/main.js"></script>
<script>
new DataTable('#example');
</script>
</body>

</html>