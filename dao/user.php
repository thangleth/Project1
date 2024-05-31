<?php
function get_user_list() {
    $sql = "SELECT * FROM nguoidung";
    return select_all($sql);
}
?>