<?php
    switch($_GET['view']){
        case 'login':
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $user = user_login($_POST['email'],$_POST['password']);
                if($user){
                    $_SESSION['user'] = $user;
                    header('Location:?ctrl=page&view=home');
                } else{
                    echo "<script type='text/javascript'>alert('Email hoặc mật khẩu không đúng');</script>";
                }
            }            
            include_once 'view/header.php';
            include 'view/login.php';
            include_once 'view/footer.php';
            break;
        case 'register':
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(checkEmail($_POST['email'])){
                    echo "<script type='text/javascript'>alert('Email đã được sử dụng');</script>";
                }else{
                    if($_POST['password'] != $_POST['repassword']){
                        echo "<script type='text/javascript'>alert('Mật khẩu không khớp');</script>";
                    }else{
                        user_register($_POST['name'],$_POST['email'],$_POST['password']);
                        header('Location:?ctrl=user&view=login');   
                    }   
                }             
            }            
            include_once 'view/header.php';
            include 'view/register.php';
            include_once 'view/footer.php';
            header('Location:?ctrl=user&view=login');
            break;
        case 'logout':
            unset($_SESSION['user']);
            header('Location: ?ctrl=page&view=home');    
            break;
        case 'profile':
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];
                $repassword = $_POST['repassword'];
                user_updateInfor($_SESSION['user']['iduser'],$name, $address, $phone, $email);
                $_SESSION['user']['name'] = $name;
                $_SESSION['user']['address'] = $address;
                $_SESSION['user']['phone'] = $phone;
                $_SESSION['user']['email'] = $email;
                echo "<script type='text/javascript'>alert('Cập nhật thông tin thành công');</script>";
                
                if(strlen($password>0)){
                    if($password!=$repassword){
                        echo "<script type='text/javascript'>alert('Mật khẩu không khớp');</script>";
                    } else {
                        user_changePassword($_SESSION['user']['iduser'],$password);
                    }
                }
                echo ($_SESSION['user']);
                if($_FILES['avatar']['error']==0){
                    move_uploaded_file($_FILES['avatar']['tmp_name'],"upload/avatar/".$_FILES['avatar']['name']);
                    user_changeAvatar($_SESSION['user']['iduser'],$_FILES['avatar']['name']);
                    $_SESSION['user']['img_user'] = $_FILES['avatar']['name'];
                }

                header('Location: ?ctrl=user&view=profile');
            }

            include_once 'view/header.php';
            include 'view/user_profile.php';
            include_once 'view/footer.php';
            break;           
        default:
            include_once 'view/home.php';
            break;
    }
?>