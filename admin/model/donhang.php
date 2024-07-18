<?php
function list_donhang($id_tk){
    $sql = "SELECT * FROM donhang AS dh, sanpham AS sp WHERE dh.id_sp=sp.id_sp AND id_tk=".$id_tk;
    $listdh = pdo_query($sql);
    return $listdh;
}

function one_donhang($id_dh){
    $sql = "SELECT * FROM donhang WHERE id_dh=".$id_dh;
    $one_dh = pdo_query_one($sql);
    return $one_dh;
}

function xoa_donhang($id_dh){
    $sql = "DELETE FROM donhang WHERE id_dh=".$id_dh;
    pdo_execute($sql);
}

function sua_donhang($id_dh, $trangthai){
    $sql = "UPDATE donhang SET trangthai='$trangthai' WHERE id_dh=".$id_dh;
    pdo_execute($sql);
}


?>