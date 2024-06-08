<?php
    switch($_GET['view']){
        case 'detail':
            $sp = get_product_detail($_GET['id']);
            $iddm = $sp['iddm'];
            $idsp = $sp['idsp'];
            $sp_lienquan = get_product_related($iddm,$idsp);
            $list_comment = get_commentbyProduct($_GET['id']);
            
            include_once 'view/header.php';
            include 'view/detail.php';
            include_once 'view/footer.php';
            break;        
        case 'cart':
            if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = [];
            }
            foreach($_SESSION['cart'] as &$sp){
                $product_cart = get_product_detail($sp['idsp']);
                $sp['tensp'] = $product_cart['tensp'];
                $sp['imgsp'] = $product_cart['imgsp'];
                $sp['gia'] = $product_cart['gia'];
                unset($sp);
            };

            include_once 'view/header.php';
            include 'view/cart.php';
            include_once 'view/footer.php';
            break;
        case 'addCart':
            $idsp = $_GET['id'];
            $size = isset($_GET['size']) ? $_GET['size'] : null; // Get the size from the URL
        
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            $inCart = false;
            foreach ($_SESSION['cart'] as &$sp) {
                if (isset($sp['idsp']) && isset($sp['size'])) {
                    if ($sp['idsp'] == $idsp && $sp['size'] == $size) {
                        $sp['soluong']++;
                        $inCart = true;
                        break;
                    }
                }
            }
            if (!$inCart) {
                array_push($_SESSION['cart'], [
                    'idsp' => $idsp,
                    'size' => $size, // Store the selected size
                    'soluong' => 1
                ]);
            }
            header('Location: ?ctrl=product&view=cart');
            break;            
        case 'removeCart':
            $index = $_GET['index'];
            array_splice($_SESSION['cart'],$index,1);
            header('Location: ?ctrl=product&view=cart');
            break;
        case 'removeAllCart':
            unset($_SESSION['cart']);
            header('Location: ?ctrl=product&view=cart');
            break;
        case 'tang':
            $index = $_GET['index'];
            $_SESSION['cart'][$index]['soluong']++;
            header('Location: ?ctrl=product&view=cart');
            break;
        case 'giam':
            $index = $_GET['index'];
            if ($_SESSION['cart'][$index]['soluong'] > 1) {
                $_SESSION['cart'][$index]['soluong']--;
            } else {
                array_splice($_SESSION['cart'], $index, 1);
            }
            header('Location: ?ctrl=product&view=cart');
            break;
        case 'checkout':
            include_once 'view/header.php';
            include 'view/checkout.php';
            include_once 'view/footer.php';
            break;     
        default:
            include_once 'view/home.php';
            break;
    }
?>