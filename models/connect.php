<?php
function connectdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "33store";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = connectdb();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = connectdb();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

function pdo_execute($sql, $params = []) {
    try {
        $conn = connectdb();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        throw $e;
    }
}


// sử dụng cho insert và delete sql
function exec_sql($sql){
$conn = connectdb();
$conn->exec($sql);
$conn = null;
}
function update($sql){
$conn = connectdb();
$stmt = $conn->prepare($sql);
$stmt->execute();
$conn = null;
}


?>