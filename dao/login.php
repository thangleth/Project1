<?php
include './connect.php';

session_start(); 

if (isset($_POST["submit"])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $conn = connectdb();

    if ($conn) {
        $stmt = $conn->prepare("SELECT * FROM user WHERE user_name = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            echo "Mật khẩu đã nhập: ";
            var_dump($password);
            echo "<br>";
            echo "Mật khẩu được băm từ cơ sở dữ liệu: ";
            var_dump($user['password']);
            echo "<br>";

            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                header("Location: ../index.php");
                exit();
            } else {
                echo "<script>alert('Mật khẩu không đúng');</script>";
            }
        } else {
            echo "<script>alert('Tên đăng nhập không tồn tại');</script>";
        }

        $conn = null;
    } else {
        echo "<script>alert('Kết nối cơ sở dữ liệu thất bại');</script>";
    }
}
?>