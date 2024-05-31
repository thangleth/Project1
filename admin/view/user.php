<div class="main-content">
    <h3 class="title-page">Thành viên</h3>
    <div class="d-flex justify-content-end">
        <a href="addProduct.html" class="btn btn-dark mb-2">Thêm thành viên</a>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên người dùng</th>
                <th>Avatar</th>
                <th>Password</th>
                <th>SĐT</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <?php
        ?>
        <tbody>
            <?php
                if(isset($nguoidung)&&count($nguoidung)>1){            
                    $i = 1;
                    foreach($nguoidung as $item){
                        extract($item);
                        echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$user_name.'</td>
                                <td><img src="../upload/avatar/'.$hinh.'" alt="" style="width: 120px;"></td>
                                <td>'.$password.'</td>
                                <td>'.$sdt.'</td>
                                <td>'.$diachi.'</td>
                                <td>'.$vaitro.'</td>
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
                <th>Tên người dùng</th>
                <th>Avatar</th>
                <th>Password</th>
                <th>SĐT</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
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