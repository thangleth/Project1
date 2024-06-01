<?php
$user_html = '';
if (isset($nguoidung) && count($nguoidung) > 1) {
    $i = 1;
    foreach ($nguoidung as $item) {
        extract($item);
        if ($hinh != '') {
            $img_file = '../' . PATH_IMG . $hinh;
            if (is_file($img_file)) {
                $img = '<img src="' . $img_file . '" alt="" style="width: 120px;">';
            } else {
                $img = '';
            }
        } else {
            $img = '';
        }
        $linkedit = '<a href="index.php?page=updateuserform&iduser=' . $iduser . '" class="btn btn-warning">Sửa</a>';
        $linkdelete = '<a href="index.php?page=deleteuser&iduser=' . $iduser . '" class="btn btn-danger"> Xóa</a>';
        $user_html .= '<tr>
                        <td>' . $i . '</td>
                        <td>' . $user_name . '</td>
                        <td>' . $img . '</td>
                        <td>' . $password . '</td>
                        <td>' . $sdt . '</td>
                        <td>' . $diachi . '</td>
                        <td>' . $vaitro . '</td>
                        <td>' . $linkedit . '' . $linkdelete . '</td>
                    </tr>';
        $i++;
    }
}
?>
<div class="main-content">
    <h3 class="title-page">
        Thành viên
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
                        <form class="addPro" action="index.php?page=adduser" method="POST"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Tên người dùng:</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Nhập tên người dùng">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh:</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Password:</label>
                                <input type="text" class="form-control" name="password" id="password"
                                    placeholder="Nhập Password">
                            </div>
                            <div class="form-group">
                                <label for="name">SĐT:</label>
                                <input type="text" class="form-control" name="sdt" id="sdt" placeholder="Nhập SĐT">
                            </div>
                            <div class="form-group">
                                <label for="name">Địa chỉ:</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Nhập địa chỉ">
                            </div>
                            <div class="form-group">
                                <label for="name">Vai trò:</label>
                                <input type="text" class="form-control" name="role" id="role"
                                    placeholder="Nhập vai trò">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btnadduser" class="btn btn-primary">Submit</button>
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
                <th>Tên người dùng</th>
                <th>Avatar</th>
                <th>Password</th>
                <th>SĐT</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?= $user_html ?>
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