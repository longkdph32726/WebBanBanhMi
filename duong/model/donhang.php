<?php
function trangthaidonhang($trangthai,$id_tk){
    $sql = "SELECT * FROM sanpham as a, donhang as b WHERE a.id_sp=b.id_sp AND b.trangthai='$trangthai' AND b.id_tk=".$id_tk;
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}

function dathang($id_tk,$id_sp,$hovaten,$sdt,$diachi){
    $sql = "INSERT INTO donhang VALUES(null,'$id_tk','$id_sp','$hovaten','$sdt','$diachi','0')";
    pdo_execute($sql);
}

function danhanhang($id_dh){
    $sql = "UPDATE donhang SET trangthai='3' WHERE id_dh='$id_dh'";
    pdo_execute($sql);
}
function dadanhgia($id_dh){
    $sql = "UPDATE donhang SET trangthai='4' WHERE id_dh='$id_dh'";
    pdo_execute($sql);
}
?>