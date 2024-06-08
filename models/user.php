<?php
function get_user_list() {
    $sql = "SELECT * FROM nguoidung";
    return select_all($sql);
}
function user_login($email,$password){
    return pdo_query_one("SELECT * FROM user WHERE email='$email' AND password = '$password'");
}
function user_register($name, $email, $password) {
    $sql = "INSERT INTO user (`name`, `email`, `password`) VALUES (:name, :email, :password)";
    pdo_execute($sql, ['name' => $name, 'email' => $email, 'password' => $password]);
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
?>