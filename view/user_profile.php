<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white text-center">
            <h2>Thông tin tài khoản</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data" class="profile-form">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="upload/avatar/<?=$_SESSION['user']['img_user']?>" alt="Profile Picture"
                            class="profile-picture mb-3 img-fluid rounded"><br>
                        <input type="file" class="form-control-file mb-3" name="avatar">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="name">Họ tên</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="<?=$_SESSION['user']['name']?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="<?=$_SESSION['user']['email']?>">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" id="address"
                                value="<?=$_SESSION['user']['address']?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Điện thoại</label>
                            <input type="text" class="form-control" name="phone" id="phone"
                                value="<?=$_SESSION['user']['phone']?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Đổi mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="repassword">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" name="repassword" id="repassword">
                        </div>
                        <button type="submit" class="btn-primary">Lưu thay đổi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
body,
input,
label {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

.profile-container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 700px;
    max-width: 90%;
}

.profile-header {
    background-color: #D19C97 !important;
    ;
    color: white;
    padding: 20px;
    text-align: center;
}

.profile-name {
    margin: 10px 0 5px;
    font-size: 24px;
}

.profile-title {
    margin: 0;
    font-size: 16px;
    color: #ddd;
}

.profile-content {
    display: flex;
    align-items: flex-start;
    padding: 20px;
}

.profile-image {
    margin-right: 20px;
}

.profile-picture {
    align-item: top-left;
    border-radius: 10px;
    width: 200px;
    height: 200px;
    object-fit: cover;
    border: 3px solid #D19C97 !important;
    ;
}

.profile-info {
    flex: 1;
    background: #f4f4f4;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.profile-info ul {
    list-style: none;
    padding: 0;
}

.profile-info label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

.profile-info input[type="text"],
.profile-info input[type="email"],
.profile-info input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.profile-info input[type="submit"] {
    width: 100%;
    padding: 10px;
    background: #007BFF;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

.profile-info input[type="submit"]:hover {
    background: #0056b3;
}
</style>