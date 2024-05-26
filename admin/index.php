<?php
    include '../model/connect.php';
    include '../model/product.php';
    include '../model/catagory.php';
    include '../model/user.php';
    include 'view/header.php';
    if(!isset($_GET['page'])){
        include "view/home.php";
    }else{
        switch($_GET['page']){
            case 'product':
                $danhmuc = get_catalog_list();
                $sanpham = get_product_list();
                include "view/product.php";
                break;
            case 'catalog':
                $danhmuc = get_catalog_list();
                include "view/catalog.php";
                break;
            case 'user':
                $nguoidung = get_user_list();
                include "view/user.php";
                break;    
    
            default:
                include 'view/home.php';
                break;
        }
        
    }
?>