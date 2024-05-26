<?php
    function get_product_new($limit) {
        $sql = "SELECT * FROM sanpham ORDER BY ngaytao DESC LIMIT $limit";
        $result = select_all($sql);
        return $result;
    }
    function get_product_feature($limit) {
        $sql = "SELECT * FROM sanpham WHERE noibat = 1 ORDER BY idsp DESC LIMIT $limit";
        $result = select_all($sql);
        return $result;
    }
      
    function get_product_list(){
        $sql = "SELECT * FROM sanpham";
        return select_all($sql);
    }

    function get_all_product($iddm,$pg) {
        $page_start=PRODUCT_ON_PAGE*($pg-1);
        
        $sql = "SELECT * FROM sanpham WHERE 1";
        if($iddm>0){
            $sql .=" AND iddm=".$iddm;
        }
        $sql .=" ORDER BY iddm DESC LIMIT ".$page_start.",".PRODUCT_ON_PAGE;
        $get_all_product = select_all($sql);
        return $get_all_product;
    }

    // Hàm phân trang
    function phantrang($iddm,$current_pg, $product_onpage) {
        if($iddm>0){
            $all_product = count(get_all_product($iddm,$current_pg));
        } else {
        $all_product = count(get_product_list()); // Tổng số sản phẩm
        }
        $pg = ceil($all_product / $product_onpage); // Số trang
        $html_phantrang = "";
        
        for ($i = 1; $i <= $pg; $i++) {
            $link = 'index.php?page=product&pg='.$i;
            if ($iddm >0) {
                $link.='&iddm='.$iddm;
            }
    
            if ($i == $current_pg) {
                $html_phantrang .= '<li class="page-item active"><a class="page-link" href="' . $link . '">' . $i . '</a></li>';
            } else {
                $html_phantrang .= '<li class="page-item"><a class="page-link" href="' . $link . '">' . $i . '</a></li>';
            }
        }
        
        return $html_phantrang;
    }
    
?>