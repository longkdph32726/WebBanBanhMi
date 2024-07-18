<?php
function list_danhmuc(){
    $sql = "SELECT * FROM danhmuc";
	$listdm = pdo_query($sql);
    return $listdm;
}

function them_danhmuc($tendm,$filename){
    $sql = "INSERT INTO danhmuc VALUES(null,'$tendm','$filename')";
    pdo_execute($sql);
}

function one_danhmuc($id_dm){
    $sql = "SELECT * FROM danhmuc WHERE id_dm=".$id_dm;
    $one_dm = pdo_query_one($sql);
    return $one_dm;
}

function xoa_danhmuc($id_dm){
    $sql = "DELETE FROM danhmuc WHERE id_dm=".$id_dm;
    pdo_execute($sql);
}

function sua_danhmuc($id_dm, $tendm, $filename){
    $sql = "UPDATE danhmuc SET ten_dm='$tendm', anh_dm='$filename' WHERE id_dm=".$id_dm;
    pdo_execute($sql);
}

?>