<?php
function list_ban(){
    $sql="SELECT * FROM ban";
    $listban = pdo_query($sql);
    return $listban;
}

?>