<div class="main-content">
    <h3 class="title-page">
        Danh mục
    </h3>
    <div class="d-flex justify-content-end">
        <a href="addProduct.html" class="btn btn-dark mb-2">Thêm danh mục</a>
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
        <tbody>
            <?php
                if(isset($danhmuc)&&count($danhmuc)>1){            
                    $i = 1;
                    foreach($danhmuc as $item){
                        extract($item);
                        echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$tendm.'</td>
                                <td><img src="../upload/img/'.$img_dm.'" alt="" style="width: 120px;"></td>
                                <td>'.$hienthi.'</td>
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