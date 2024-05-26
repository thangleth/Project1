<?php
    define('PRODUCT_ON_PAGE', 6);

    include "model/connect.php";
    include "model/product.php";
    include "model/catagory.php";

    include "view/header.php";
    if(!isset($_GET['page'])){
        $product_feature = get_product_feature(4);
        $product_new= get_product_new(8);
        include "view/home.php";
    }else{
        switch($_GET['page']){
            case 'product':
                if(isset($_GET['pg']) && ($_GET['pg']>0)){
                    $current_pg=$_GET['pg'];
                } else{
                    $current_pg=1;
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $iddm_current=$_GET['iddm'];
                } else{
                    $iddm_current=0;
                }
                $product_list = get_all_product($iddm_current,$current_pg);
                $catalog_list = get_catalog_list();
                include "view/product.php";
                break;
            case 'product_detail':
                // $catalog_list = get_catalog_list();
                // $product_detail = get_product_detail();
                // $product_related = get_product_related();
                // include "view/product_detail.php";
                break;    
    
            default:
                include 'view/home.php';
                break;
        }
        
    }
    include "view/footer.php";
?>