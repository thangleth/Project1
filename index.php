<?php
    include  "models/global.php";
    include "models/connect.php";
    include "models/product.php";
    include "models/category.php";
    include "models/user.php";

    switch ($_GET['ctrl']) {
        case 'page':
            include 'controller/c_page.php';
            break;
        case 'product':
            include 'controller/c_product.php';
            break;
        default:
            header('Location: ?ctrl=page&view=home');
            break;
    }
?>