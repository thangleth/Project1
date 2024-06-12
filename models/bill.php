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
    function get_bill_one($id){
        $sql = "SELECT * FROM orders WHERE id=".$id;
        return pdo_query_one($sql);
    }
    function update_bill($id,$status) {
        $sql = "UPDATE orders SET status='$status' WHERE id=$id";
        return update($sql);
    }
    function get_bill_detail_one($id){
        $sql = "SELECT * FROM order_detail WHERE orders_id=".$id;
        return pdo_query_one($sql);
    }
?>