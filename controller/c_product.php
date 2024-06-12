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
            var_dump($_SESSION['cart']);
            include_once 'view/header.php';
            include 'view/checkout.php';
            include_once 'view/footer.php';
            break;
        case 'confirm_order':
            if(isset($_POST['orders'])){ 
                $iduser = $_SESSION['user']['iduser'];
                $code = "33Shop".$iduser.rand(1000,9999);
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $name_nhan = $_POST['name_nhan'];
                $phone_nhan = $_POST['phone_nhan'];
                $address_nhan = $_POST['address_nhan'];
                $payment=$_POST['payment'];
                $total=total_cart();
                $order_id = bill_insert_id($code, $iduser, $name, $email, $phone, $address, $name_nhan, $phone_nhan, $address_nhan, $payment, $total);
                foreach($_SESSION['cart'] as $item){
                    extract($item);
                    cart_insert($idsp, $tensp, $imgsp, $gia, $soluong, $total,$order_id);
                }
                unset($_SESSION['cart']);
            }
            include_once 'view/header.php';
            include 'view/bill.php';
            include_once 'view/footer.php';
            break;
        default:
            include_once 'view/home.php';
            break;
    }
?>