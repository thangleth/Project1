<?php
    function get_product_feature($limit) {
        $sql = "SELECT * FROM sanpham WHERE noibat = 1 ORDER BY idsp DESC LIMIT $limit";
        $result = select_all($sql);
        return $result;
    }
?>