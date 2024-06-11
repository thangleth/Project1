<?php
$user_html = '';
if (isset($nguoidung) &&  count($nguoidung) > 0) {
    $i = 1;
    foreach ($nguoidung as $item) {
        extract($item);
        $img = ''; 
        if ($img_user!= '') {
            $img_file = '../' . PATH_IMG . $img_user;
            if (file_exists($img_file)) {
                $img = '<img src="' . $img_file . '" alt="Avatar" style="width: 120px;">';
            }
        }
        $linkedit = '<a href="index.php?page=updateuserform&iduser=' . $iduser . '" class="btn btn-warning m-1">Sửa</a>';
        $linkdelete = '<a href="index.php?page=deleteuser&iduser=' . $iduser. '" class="btn btn-danger"> Xóa</a>';
        $user_html .= '<tr>
                        <td>' . $i . '</td>
                        <td>' . $name. '</td>
                        <td>' . $email . '</td>
                        <td>' . $img . '</td>
                        <td>' . $password . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $address . '</td>
                        <td>' . $role . '</td>
                        <td>' . $linkedit . '' . $linkdelete . '</td>
                    </tr>';
        $i++;
    }
}
?>
<div class="main-content">
    <h3 class="title-page">Danh sách người dùng</h3>
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Thêm người dùng
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm người dùng</h1>
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
                                <label for="user_name">Tên đăng nhập:</label>
                                <input type="text" class="form-control" name="user_name" id="user_name"
                                    placeholder="Nhập tên đăng nhập">
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu:</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Nhập mật khẩu">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Nhập địa chỉ email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại:</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ:</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Nhập địa chỉ">
                            </div>
                            <div class="form-group">
                                <label for="role">Vai trò:</label>
                                <select class="form-select" name="role" id="role">
                                    <option value="0">Người dùng</option>
                                    <option value="1">Quản trị viên</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Avatar:</label>
                                <input type="file" name="image" class="form-control" id="image">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btnadduser" class="btn btn-primary">Thêm</button>
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
                <th>Tên</th>
                <th>Tên đăng nhập</th>
                <th>Avatar</th>
                <th>Mật khẩu</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody><?= $user_html ?></tbody>
        <tfoot>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Tên đăng nhập</th>
                <th>Avatar</th>
                <th>Mật khẩu</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
                <th>Thao tác</th>
            </tr>
        </tfoot>
    </table>
</div>