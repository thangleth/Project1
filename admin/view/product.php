<div class="main-content">
    <h3 class="title-page">
        Sản phẩm
    </h3>
    <div class="d-flex justify-content-end">
        <a href="addProduct.html" class="btn btn-dark mb-2">Thêm sản phẩm</a>
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
            <?php
                if(isset($sanpham)&&count($sanpham)>1){            
                    $i = 1;
                    foreach($sanpham as $item){
                        extract($item);
                        echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$tensp.'</td>
                                <td><img src="../upload/img/'.$imgsp.'" alt="" style="width: 120px;"></td>
                                <td>'.$soluong.'</td>
                                <td>'.$gia.'</td>
                                <td>'.$noibat.'</td>
                                
                                <td>
                                    <a href="#" class="btn btn-warning">Sửa</a>
                                    <a href="#" class="btn btn-danger"> Xóa</a>
                                </td>
                            </tr>';
            $i ++;
            }
            }
            ?>
            </tr>
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