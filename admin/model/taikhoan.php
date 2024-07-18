<?php
function list_taikhoan(){
    $sql = "SELECT * FROM taikhoan";
    $listtk = pdo_query($sql);
    return $listtk;
}

function them_taikhoan($user,$pass,$filename,$sdt,$email,$role){
    $sql = "INSERT INTO taikhoan VALUES(null,'$user','$pass','$filename','$sdt','$email','$role')";
    pdo_execute($sql);
}

function one_taikhoan($id_tk){
    $sql = "SELECT * FROM taikhoan WHERE id_tk=".$id_tk;
    $onetaikhoan = pdo_query_one($sql);
    return $onetaikhoan;
}

function xoa_taikhoan($id_tk){
    $sql = "DELETE FROM taikhoan WHERE id_tk=".$id_tk;
    pdo_execute($sql);
}

function sua_taikhoan($id_tk,$user,$pass,$filename,$sdt,$email){
    
    $sql = "UPDATE taikhoan SET user='$user',pass='$pass',sdt='$sdt',anh='$filename',email='$email' WHERE id_tk=".$id_tk;
    pdo_execute($sql);
}
?>