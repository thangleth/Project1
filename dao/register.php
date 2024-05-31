<?php
include './connect.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    $confirmpassword = $_POST["confirmpassword"];

    $conn = connectdb();

    if ($conn) {
        $stmt = $conn->prepare("SELECT * FROM user WHERE user_name = ? OR email = ?");
        $stmt->execute([$username, $email]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(count($result) > 0){
            echo "<script>alert('Username hoặc Email đã tồn tại');</script>";
        } else {
            if($password === $confirmpassword){
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $conn->prepare("INSERT INTO user (name, user_name, email, password) VALUES (?, ?, ?, ?)");
                $stmt->execute([$name, $username, $email, $hashed_password]);

                if($stmt->rowCount() > 0){
                    echo "<script>alert('Đăng ký thành công');</script>";
                    // Chuyển hướng người dùng đến trang đăng nhập
                    header("location: ../index.php?page=login");
                    exit(); 
                } else {
                    echo "<script>alert('Đăng ký thất bại');</script>";
                }
            } else {
                echo "<script>alert('Mật khẩu không khớp');</script>";
            }
        }

        // Đóng kết nối
        $conn = null;
    } else {
        echo "<script>alert('Kết nối cơ sở dữ liệu thất bại');</script>";
    }
}
?>