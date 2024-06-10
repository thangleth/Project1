<?php
function get_user_list() {
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}
function get_user_one($iduser)
{
    $sql = "SELECT * FROM user WHERE iduser=" . $iduser;
    return pdo_query_one($sql);
}
function admin_login($email,$password){
    return pdo_query_one("SELECT * FROM user WHERE email='$email' AND password = '$password' AND role = 1");
}
function user_login($email,$password){
    return pdo_query_one("SELECT * FROM user WHERE email='$email' AND password = '$password'");
}
function user_register($name, $email, $password) {
    $sql = "INSERT INTO user (`name`, `email`, `password`) VALUES (:name, :email, :password)";
    pdo_execute($sql, ['name' => $name, 'email' => $email, 'password' => $password]);
}
function user_register_id($name, $email, $password, $address, $phone) {
    $sql = "INSERT INTO user (`name`, `email`, `password`, `address`, `phone`) VALUES (:name, :email, :password, :address, :phone)";
    return pdo_execute_id($sql, ['name' => $name, 'email' => $email, 'password' => $password, 'address' => $address, 'phone' => $phone]);
}

function checkEmail($email) {
    $user = pdo_query_one("SELECT * FROM user WHERE email='$email'");
    if($user) return true;
    else return false;
}
function user_updateInfor($iduser,$name, $address, $phone, $email) {
    $sql = "UPDATE user SET name = :name, address = :address, phone = :phone, email = :email WHERE iduser = :iduser";
    pdo_execute($sql, [':name' => $name,':address' => $address,':phone' => $phone,':email' => $email,':iduser' => $iduser]);
}
function user_changePassword($iduser,$repassword){
    $sql = "UPDATE user SET password = :repassword WHERE iduser = :iduser";
    pdo_execute($sql, [':repassword' => $repassword,':iduser' => $iduser]);
}
function user_changeAvatar($iduser,$img_user) {
    $sql = "UPDATE user SET img_user = :img_user WHERE iduser = :iduser";
    pdo_execute($sql, [':img_user' => $img_user,':iduser' => $iduser]);
}

function get_user_name($iduser)
{
    $sql = "SELECT * FROM user WHERE iduser=" . $iduser;
    $sp = pdo_query_one($sql);
    extract($sp);
    return $user_name;
}
function delete_user($iduser)
{
    $sql = "DELETE FROM user WHERE iduser=" . $iduser;
    return exec_sql($sql);
}
function add_user($name, $password, $sdt, $img, $address, $role)
{
    $sql = "INSERT INTO user (user_name, password, sdt, hinh, diachi, vaitro) VALUES ('$name','$password','$sdt','$img','$address','$role')";
    return exec_sql($sql);
}
function update_user($iduser, $name,$email, $password, $phone, $img, $address, $role)
{
    $sql = "UPDATE user SET name='$name',email='$email',password='$password',phone='$phone', img_user='$img',diachi='$address',vaitro='$role' WHERE iduser=$iduser";
    return update($sql);
}
?>