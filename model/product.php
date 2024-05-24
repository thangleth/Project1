<?php
    function get_product_feature($limit) {
        $sql = "SELECT * FROM sanpham WHERE noibat = 1 ORDER BY idsp DESC LIMIT $limit";
        $result = select_all($sql);
        return $result;
    }

    function get_product_list() {
        $sql = "SELECT * FROM sanpham";
        return select_all($sql);
    }

    function get_product_page($pg) {
        $page_start=PRODUCT_ON_PAGE*($pg-1);
        $sql = "SELECT * FROM sanpham LIMIT $page_start,".PRODUCT_ON_PAGE;
        $product_list = select_all($sql);
        return $product_list;
    }

    // Hàm phân trang
    function pagination($active_pg,$product_onpage){
        $count_product = count(get_product_list()); // Tổng sản phẩm
        $pg = ceil($count_product/$product_onpage); // Số trang
        $html_pagination = "";
        for ($i = 1; $i <= $pg ; $i++) {
            $link = 'index.php?page=product&pg='.$i;
            if($i==$active_pg){
                $html_pagination.='<li class="page-item active"><a class="page-link" href="'.$link.'">'.$i.'</a></li>';
            } else {
                $html_pagination.='<li class="page-item"><a class="page-link" href="'.$link.'">'.$i.'</a></li>';
        }
        }
        return $html_pagination;
}
?>