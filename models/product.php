<?php
    function get_product($iddm=0){
        $sql="SELECT * FROM product WHERE 1";
        if($iddm>0){
        $sql.=" AND iddm=".$iddm;
        }
        $sql.=" ORDER BY id ASC";
        return pdo_query($sql);
    }
    function get_sale_product(){
        $sql="SELECT * FROM product WHERE promotion>0 ORDER BY promotion DESC";
        return pdo_query($sql);
    }
    function get_feature_product(){
        $sql="SELECT * FROM product WHERE new=1 ORDER BY id DESC";
        return pdo_query($sql);
    }
    function get_product_new($limit) {
        $sql = "SELECT * FROM product ORDER BY ngaytao DESC LIMIT $limit";
        return pdo_query($sql);
    }
    function get_product_feature($limit) {
        $sql = "SELECT * FROM product WHERE noibat = 1 ORDER BY idsp DESC LIMIT $limit";
        return pdo_query($sql);
    }
    function get_product_related($iddm,$idsp) {
        $sql = "SELECT * FROM product WHERE iddm=? AND idsp<>? LIMIT 4";
        return pdo_query($sql,$iddm,$idsp);
    }
    function get_product_list() {
        $sql = "SELECT * FROM product";
        return  pdo_query($sql);
    }
    function get_product_detail($idsp) {
        $sql = "SELECT * FROM product WHERE idsp=" . $idsp;
        return pdo_query_one($sql);
    }
    function get_product_img($idsp){
        $sql = "SELECT imgsp FROM product WHERE idsp=".$idsp;
        // $detail=select_one($sql);
        // extract($detail);
        return pdo_query_one($sql);
        }
    function get_all_product($iddm,$pg) {
        $page_start=PRODUCT_ON_PAGE*($pg-1);
        
        $sql = "SELECT * FROM product WHERE 1";
        if($iddm>0){
            $sql .=" AND iddm=".$iddm;
        }
        $sql .=" ORDER BY iddm ASC LIMIT ".$page_start.",".PRODUCT_ON_PAGE;
        return  pdo_query($sql);
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
            $link = '?ctrl=page&view=product&pg='.$i;
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
    function delete_sp($idsp){
        $sql = "DELETE FROM product WHERE idsp=".$idsp;
        exec_sql($sql);
    }
    function add_sp($iddm,$name,$price,$price2,$img){
        $sql = "INSERT INTO product (iddm,tensp, imgsp, gia,giagoc) VALUES ('$iddm', '$name', '$img','$price','$price2')";
        exec_sql($sql);
    }
    function update_sp($iddm,$idsp,$name,$img,$price) {
        $sql = "UPDATE product SET iddm='$iddm',tensp='$name', imgsp='$img',gia='$price' WHERE idsp=$idsp";
        echo($sql);
        return update($sql);
    }
    function check_khoa_ngoai($iddm){
        $sql = "SELECT * FROM product WHERE iddm=".$iddm;
        $prolist=pdo_query($sql);
        return count($prolist);
    }
    function total_cart(){
        $tong = 0;
        foreach($_SESSION['cart'] as $item){
            extract($item);
            $total = (Int)$gia*(Int)$soluong;
            $tong+=$total;
        }
        return $tong;
    }
    function cart_insert($idsp, $tensp, $imgsp, $gia, $soluong, $total,$orders_id){
    $sql = "INSERT INTO order_detail (idsp, tensp, imgsp, gia, soluong, total,orders_id) VALUES (?,?,?,?,?,?,?)";
    $params = [$idsp, $tensp, $imgsp, $gia, $soluong, $total, $orders_id];
    return pdo_execute($sql, $params);
    }
?>