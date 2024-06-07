<?php
    switch($_GET['view']){
        case 'home':
            $product_feature = get_product_feature(4);
            $product_new= get_product_new(8);
            $home_catalog = home_catalog_list();
            include_once 'view/header.php';
            include_once 'view/home.php';
            include_once 'view/footer.php';
            break;
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
            $home_catalog = home_catalog_list();
            include_once 'view/header.php';
            include_once 'view/product.php';
            include_once 'view/footer.php';
            break;
        default:
            include_once 'view/home.php';
            break;
    }
?>