<?php
function list_giohang($id_tk){
    $sql = "SELECT * FROM giohang WHERE id_tk=".$id_tk;
    $listgh = pdo_query($sql);
    return $listgh;
}

function list_sp_gh($id_tk){
    $sql = "SELECT * FROM giohang as a,sanpham as b WHERE a.id_sp=b.id_sp AND id_tk=".$id_tk;
    $listspgh = pdo_query($sql);
    return $listspgh;
}

function them_giohang($id_sp,$id_tk){
    $sql = "INSERT INTO giohang VALUES(null,$id_sp,$id_tk)";
    pdo_execute($sql);
}

function xoa_giohang($id){
    $sql = "DELETE FROM giohang WHERE id_gh='$id'";
    pdo_execute($sql);
}
?>