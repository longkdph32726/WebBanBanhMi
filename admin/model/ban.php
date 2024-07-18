<?php 
function list_ban(){
    $sql = "SELECT * FROM ban";
	$listban = pdo_query($sql);
    return $listban;
}

function them_ban($loaiban,$trangthai){
    $sql = "INSERT INTO ban(loaiban,trangthai) VALUES('$loaiban','$trangthai')";
    pdo_execute($sql);
}

function ban_trong($id){
    $sql = "UPDATE ban SET trangthai='0' WHERE id_ban=".$id;
    pdo_execute($sql);
}

function ban_conguoi($id){
    $sql = "UPDATE ban SET trangthai='1' WHERE id_ban=".$id;
    pdo_execute($sql);
}

function xoa_ban($id_ban){
    $sql = "DELETE FROM ban WHERE id_ban=".$id_ban;
    pdo_execute($sql);
}

?>