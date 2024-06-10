<?php
    function bill_add($code, $iduser, $name, $email, $phone, $address, $name_nhan, $phone_nhan, $address_nhan, $payment, $total) {
        $sql = "INSERT INTO orders (code, iduser, name, email, phone, address, name_nhan, phone_nhan, address_nhan, payment_method, total) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        pdo_execute_id($sql, [$code, $iduser, $name, $email, $phone, $address, $name_nhan, $phone_nhan, $address_nhan, $payment, $total]);
    }    
?>