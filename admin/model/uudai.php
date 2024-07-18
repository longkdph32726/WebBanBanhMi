<?php
function list_uudai(){
    $sql = "SELECT * FROM uudai";
	$listud = pdo_query($sql);
    return $listud;
}

function them_uudai($ten_ud,$giatri){
    $sql = "INSERT INTO uudai VALUES(null,'$ten_ud','$giatri')";
    pdo_execute($sql);
}

function one_uudai($id_ud){
    $sql = "SELECT * FROM uudai WHERE id_ud=".$id_ud;
    $one_ud = pdo_query_one($sql);
    return $one_ud;
}

function xoa_uudai($id_ud){
    $sql = "DELETE FROM uudai WHERE id_ud=".$id_ud;
    pdo_execute($sql);
}

function sua_uudai($id_ud, $tenud, $giatri){
    $sql = "UPDATE uudai SET ten_ud='".$tenud."', giatri= '".$giatri."' WHERE id_ud=".$id_ud;
    pdo_execute($sql);
}
?>