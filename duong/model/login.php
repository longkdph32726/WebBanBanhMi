<?php
function dangkytaikhoan($user,$pass,$sdt,$email){
    $sql = "INSERT INTO taikhoan(user,pass,sdt,email) VALUES('$user','$pass','$sdt','$email')";
    pdo_execute($sql);
}

function checkuser($user,$pass){
    $sql = "SELECT * FROM taikhoan WHERE user = '$user' AND pass = '$pass'";
    $checkuser = pdo_query_one($sql);
    return $checkuser;
}

function infor_user($id_tk){
    $sql = "SELECT * FROM taikhoan WHERE id_tk=".$id_tk;
    $infor_user = pdo_query_one($sql);
    return $infor_user;
}

function edit_user($id_tk,$user,$pass,$filename,$sdt,$email){
    $sql = "UPDATE taikhoan SET user='$user', pass='$pass', anh='$filename', sdt='$sdt', email='$email' WHERE id_tk='$id_tk'";
    pdo_execute($sql);
}

function checkforgot($user,$email){
    $sql = "SELECT * FROM taikhoan WHERE user='$user' AND email='$email'";
    $checkforgot = pdo_query_one($sql);
    return $checkforgot;
}
?>