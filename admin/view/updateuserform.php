<?php
extract($userone);
$hinh_anh = '';
if ($img_user != '') {
    $hinh_duongdan = '../' . PATH_IMG . $img_user;
    if (file_exists($hinh_duongdan)) {
        $hinh_anh = '<img src="' . $hinh_duongdan . '" alt="" style="width: 120px;">';
    } else {
        $hinh_anh = 'Người dùng chưa có hình!';
    }
}
?>
<div class="main-content">
    <h3 class="title-page">Thành viên</h3>
    <div class="modal-body">
        <form class="addPro" action="index.php?page=updateuser" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" class="form-control" name="name" id="name" value="<?= $name ?>"
                    placeholder="Nhập tên người dùng">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" id="email" value="<?= $email ?>"
                    placeholder="Nhập email người dùng">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Ảnh:</label>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                    <?= $hinh_anh ?>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" name="password" id="password" value="<?= $password ?>"
                    placeholder="Nhập Password">
            </div>
            <div class="form-group">
                <label for="phone">SĐT:</label>
                <input type="text" class="form-control" name="phone" id="phone" value="<?= $phone ?>"
                    placeholder="Nhập SĐT">
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" class="form-control" name="address" id="address" value="<?= $address ?>"
                    placeholder="Nhập địa chỉ">
            </div>
            <div class="form-group">
                <label for="role">Vai trò:</label>
                <input type="text" class="form-control" name="role" id="role" value="<?= $role ?>"
                    placeholder="Nhập vai trò">
            </div>
            <div class="form-group">
                <button type="submit" name="btnupdateuser" class="btn btn-primary">Submit</button>
                <input type="hidden" name="imgcu" value="<?= $img_user ?>">
                <input type="hidden" name="iduser" value="<?= $iduser ?>">
            </div>
        </form>
    </div>
</div>