<?php
function get_catalog_list() {
    $sql = "SELECT * FROM danhmuc";
    return select_all($sql);
}
?>