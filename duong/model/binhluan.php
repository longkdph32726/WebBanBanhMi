<?php

function list_binhluan($idsp){
    $sql ="SELECT * FROM binhluan as a, taikhoan as b WHERE a.id_tk=b.id_tk AND id_sp=".$idsp;
    $list_bl = pdo_query($sql);
    return $list_bl;
}

function insert_binhluan($id_sp,$id_tk,$noidung,$date){
    $sql = "INSERT INTO binhluan VALUES(null,'$id_sp','$id_tk','$noidung','$date')";
    pdo_execute($sql);
}


?>