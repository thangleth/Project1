<?php
    session_start();
    include  "models/global.php";
    include "models/connect.php";
    include "models/product.php";
    include "models/category.php";
    include "models/user.php";
    include "models/comment.php";

    switch ($_GET['ctrl']) {
        case 'page':
            include 'controller/c_page.php';
            break;
        case 'product':
            include 'controller/c_product.php';
            break;
        case 'user':
            include 'controller/c_user.php';
            break;
        case 'comment':
            include 'controller/c_comment.php';
            break;
        default:
            header('Location: ?ctrl=page&view=home');
            break;
    }
?>