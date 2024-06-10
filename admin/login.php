<?php
session_start();
include '../models/connect.php';
include '../models/user.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $admin = admin_login($_POST['email'],$_POST['password']);
    if($admin){
        $_SESSION['admin'] = $admin;
        header('Location:index.php?page=product');
    } else{
        echo "<script type='text/javascript'>alert('Email hoặc mật khẩu không đúng');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="view/layout/assets/css/login.css">
</head>

<body>
    <div class="login-wrap">
        <h2>Login</h2>
        <form action="" method="post">
            <div class="form">
                <input type="text" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password" />
                <button type="submit"> Đăng nhập </button>
                <a href="#">
                    <p> Don't have an account? Register </p>
                </a>
            </div>
        </form>
    </div>
</body>

</html>