<?php
function list_sanpham(){
    $sql = "SELECT * FROM sanpham";
	$listsanpham = pdo_query($sql);
    return $listsanpham;
}

function them_sanpham($ten_sp,$filename,$gia,$mota,$id_dm,$ud,$giatri_ud){
    $sql = "INSERT INTO sanpham VALUES(null,'$ten_sp','$filename','$gia','$mota','0','0','$id_dm','$ud','$giatri_ud')";
    pdo_execute($sql);
}

function one_sanpham($id_sp){
    $sql = "SELECT * FROM sanpham WHERE id_sp=".$id_sp;
    $one_sp = pdo_query_one($sql);
    return $one_sp;
}

function xoa_sanpham($id_sp){
    $sql = "DELETE FROM sanpham WHERE id_sp=".$id_sp;
    pdo_execute($sql);
}

function sua_sanpham($id_sp,$tensp,$filename,$gia,$mota,$id_dm,$ud,$giatri_ud){
    $sql = "UPDATE sanpham SET ten_sp='$tensp', anh='$filename', gia='$gia', mota='$mota', id_dm='$id_dm', ud='$ud', giatri_ud='$giatri_ud' WHERE id_sp=".$id_sp;
    pdo_execute($sql);
}

?>