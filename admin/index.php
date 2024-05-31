<?php
    include '../dao/global.php';
    include '../dao/connect.php';
    include '../dao/product.php';
    include '../dao/catagory.php';
    include '../dao/user.php';
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
            // Thêm
            case 'addsp':
                if(isset($_POST['btnaddsp'])){
                    $iddm= $_POST['iddm'];
                    $name= $_POST['name'];
                    $price= $_POST['price'];
                    $price2= $_POST['price2'];
                    $img=$_FILES['image']['name'];
                    if($img!=''){
                        $imgsp='../'.PATH_IMG.$img;
                        move_uploaded_file($_FILES["img"]["tmp_name"], $imgsp);
                    }
                }
                add_sp($iddm,$name,$price,$price2,$img);
                $danhmuc = get_catalog_list();
                $sanpham = get_product_list();
                include "view/product.php";
                break;
            case 'adddm':
                if(isset($_POST['btnadddm'])){
                    $name= $_POST['name'];
                    $display= $_POST['display'];
                    $img=$_FILES['image']['name'];
                    if($img!=''){
                        $imgdm='../'.PATH_IMG.$img;
                        move_uploaded_file($_FILES["img"]["tmp_name"], $imgdm);
                    }
                }
                add_dm($name,$display,$img);
                $danhmuc = get_catalog_list();
                $sanpham = get_product_list();
                include "view/catalog.php";
                break;
            
            // Xóa

            // Sửa
            case 'updatedmform':
                $danhmuc = get_catalog_list();
                include "view/updatedmform.php";
                break;
            case 'updatesp':
                if(isset($_GET['btnupdatesp'])){
                    $iddm= $_POST['iddm'];
                    $name= $_POST['name'];
                    $price= $_POST['price'];
                    $price2= $_POST['price2'];
                    $img=$_FILES['image']['name'];
                    if($img!=''){
                        $imgsp='../'.PATH_IMG.$img;
                        move_uploaded_file($_FILES["img"]["tmp_name"], $imgsp);
                    }
                }
                update_sp($iddm,$name,$price,$price2,$img);
                $danhmuc = get_catalog_list();
                $sanpham = get_product_list();
                include "view/product.php";
                break;
            case 'updatespform':
                if(isset($_GET['idsp'])&&($_GET['idsp'])>0){
                    $idsp=$_GET['idsp'];
                }
                $detail=get_product_detail($idsp);
                $danhmuc = get_catalog_list();
                include "view/updatespform.php";
                break;
            default:
                include 'view/home.php';
                break;
        }
        
    }
?>