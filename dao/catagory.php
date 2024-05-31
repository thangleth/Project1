<?php
function get_catalog_list() {
    $sql = "SELECT * FROM danhmuc";
    return select_all($sql);
}
function get_category_name($iddm){
    $sql = "SELECT * FROM danhmuc WHERE iddm=".$iddm;
    $sp = select_one($sql);
    extract($sp);
    return $ten;
}
function delete_dm($iddm){
    $sql = "DELETE FROM danhmuc WHERE iddm=".$iddm;
    exec_sql($sql);
}
function add_dm($name, $display,$img) {
    // Đảm bảo bạn cung cấp tên các cột trong bảng 'danhmuc'
    $sql = "INSERT INTO danhmuc (tendm, hienthi, imgdm) VALUES ('$name', '$display', '$img')";
    exec_sql($sql);
}
?>