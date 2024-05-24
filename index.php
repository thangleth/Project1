<?php
    define('PRODUCT_ON_PAGE', 9);

    include "model/connect.php";
    include "model/product.php";

    include "view/header.php";
    if(!isset($_GET['page'])){
        $product_feature = get_product_feature(4);
        include "view/home.php";
    }else{
        switch($_GET['page']){
            case 'product':
                // $catalog_list = get_catalog_list();
                if(isset($_GET['pg']) && ($_GET['pg']>0)){
                    $active_pg=$_GET['pg'];
                } else{
                    $active_pg=1;
                }
                $product_list = get_product_page($active_pg);
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