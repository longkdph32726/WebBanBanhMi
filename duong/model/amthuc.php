<?php
function list_danhmuc(){
    $sql = "SELECT * FROM danhmuc";
	$listdm = pdo_query($sql);
    return $listdm;

}


function list_sp($id){
    if($id==1){
        $sql = "SELECT * FROM sanpham ORDER BY luotxem DESC LIMIT 0,10";
    }if($id==0){
        $sql = "SELECT * FROM sanpham";

    }else{
        $sql = "SELECT * FROM sanpham WHERE id_dm=".$id;
    }
    $listsp = pdo_query($sql);
    return $listsp;
}

function ctsp($id){
    $sql = "SELECT * FROM sanpham WHERE id_sp =".$id;
    $ctsp = pdo_query_one($sql);
    return $ctsp;
}


function list_spdm($iddm,$idsp){
    $sql = "SELECT * FROM sanpham WHERE id_dm= '$iddm' AND id_sp<>".$idsp;
    $listspdm = pdo_query($sql);
    return $listspdm;
}

function tang_luotxem($luotxem,$idsp){
    $sql = "UPDATE sanpham SET luotxem='$luotxem' WHERE id_sp='$idsp'";
    pdo_execute($sql);
}

function list_uudai(){
    $sql = "SELECT * FROM sanpham WHERE ud='1'";
    $listuudai = pdo_query($sql);
    return $listuudai;
}
?>