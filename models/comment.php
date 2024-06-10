<?php    
function add_comment($iduser, $idsp, $noidung) {
    $sql = "INSERT INTO comment(`iduser`, `idsp`, `noidung`) VALUES (:iduser, :idsp, :noidung)";
    pdo_execute($sql, [
        'iduser' => $iduser,
        'idsp' => $idsp,
        'noidung' => $noidung
    ]);
}
function get_commentbyProduct($idsp){
    return pdo_query("SELECT * FROM comment JOIN user ON comment.iduser=user.iduser WHERE idsp=$idsp ORDER BY ngaytao DESC");
}
function get_comment_list() {
    $sql = "SELECT * FROM comment";
    return  pdo_query($sql);
}
function delete_comment($idbl)
{
    $sql = "DELETE FROM comment WHERE idbl=" . $idbl;
    return exec_sql($sql);
}
?>