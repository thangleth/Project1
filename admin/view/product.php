<?php
    $product_html = '';
    $stt = 1;
    foreach ($sanpham as $item) {
        extract($item);
        if ($imgsp != '') {
            $img_file = '../' . PATH_IMG . $imgsp;
            if (is_file($img_file)) {
                $img = '<img src="' . $img_file . '" alt="" style="width: 120px;">';
            } else {
                $img = '';
            }
        } else {
            $img = '';
        }
        $linkedit = '<a href="index.php?page=updatespform&idsp=' . $idsp . '" class="btn btn-warning">Sửa</a>';
        $linkdelete = '<a href="index.php?page=deletesp&idsp=' . $idsp . '" class="btn btn-danger"> Xóa</a>';
        $product_html .= '<tr>
                                    <td>' . $stt . '</td>
                                    <td>' . $tensp . '</td>
                                    <td>' . $img . '</td>
                                    <td>' . $soluong . '</td>
                                    <td>' . $gia . '</td>
                                    <td>' . $noibat . '</td>
                                    <td>' . $linkedit . '' . $linkdelete . '</td>
                                </tr>';
        $stt++;
    }
    $catalog_html='';
    foreach ($danhmuc as $item) {
        extract($item);
        $catalog_html.='<option value="'.$iddm.'">'.$tendm.'</option>';
    }
?>

<div class="main-content">
    <h3 class="title-page">
        Sản phẩm
    </h3>
    <div class="d-flex justify-content-end">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Thêm sản phẩm
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm sản phẩm</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="addPro" action="index.php?page=addsp" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="categories">Danh mục:</label>
                                <select class="form-select" aria-label="Default select example" name="iddm">
                                    <option selected>Chọn danh mục</option>
                                    <?=$catalog_html?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh sản phẩm</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Tên sản phẩm:</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Nhập tên sả phẩm">
                            </div>
                            <div class="form-group">
                                <label for="price">Giá gốc:</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" name="price" id="price" class="form-control"
                                        placeholder="Nhập giá gốc">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price2">Giá khuyến mãi:</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" name="price2" id="price2" class="form-control"
                                        placeholder="Giá khuyến mãi">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mô tả ngắn</label>
                                <textarea class="form-control" name="description" rows="3"
                                    placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Mô tả chi tiết</label>
                                <textarea class="form-control" name="detail" rows="3"
                                    placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="btnaddsp" class="btn btn-primary">Save changes</button>
                                </div>
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
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Nổi bật</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <?php
        ?>
        <tbody>
            <?= $product_html ?>
        </tbody>
        <tfoot>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Nổi bật</th>
                <th>Danh mục</th>
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