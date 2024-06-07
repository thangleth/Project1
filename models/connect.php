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

function select_all($sql){
    $conn = connectdb();
    if ($conn) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $result;
    } else {
        return [];
    }
}

function select_one($sql){
    $conn = connectdb();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $list = $stmt->fetch();
    $conn = null;
    return $list;
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
?>