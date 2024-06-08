<?php
    switch($_GET['view']){
        case 'add':
            if($_SERVER['REQUEST_METHOD']=='POST'){
                add_comment($_SESSION['user']['iduser'],$_POST['idsp'],$_POST['comment']);
                header('Location: ?ctrl=product&view=detail&id='.$_POST['idsp']);
            }
            break;          
        default:
            include_once 'view/home.php';
            break;
    }
?>