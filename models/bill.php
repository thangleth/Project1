<?php
    function bill_insert_id($code, $iduser, $name, $email, $phone, $address, $name_nhan, $phone_nhan, $address_nhan, $payment, $total) {
        $sql = 'INSERT INTO orders (code, iduser, name, email, phone, address, name_nhan, phone_nhan, address_nhan, payment_method,total) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = [$code, $iduser, $name, $email, $phone, $address, $name_nhan, $phone_nhan, $address_nhan, $payment, $total];
        return pdo_execute_id($sql, $params);
    }
    function get_bill() {
        $sql ="SELECT * FROM orders";
        return pdo_query($sql);
    }  
?>