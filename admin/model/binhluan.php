<?php 

    function list_binhluan($id_sp){
        $sql = "SELECT * FROM binhluan AS bl, taikhoan AS tk WHERE bl.id_tk=tk.id_tk AND id_sp=".$id_sp;
        $listbl = pdo_query($sql);
        return $listbl;
    }

    function xoa_binhluan($id_bl){
        $sql = "DELETE FROM binhluan WHERE id_bl=".$id_bl;
        pdo_execute($sql);
    }
?>