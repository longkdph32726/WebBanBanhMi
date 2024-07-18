<?php
function loadall_thongkesp(){
    $sql = "select sanpham.id_sp, sanpham.ten_sp, count(donhang.id_sp) as countsp, sanpham.anh, sanpham.gia, sanpham.mota, sanpham.luotmua, sanpham.luotxem
            from sanpham
            join donhang on sanpham.id_sp=donhang.id_sp
            group by sanpham.id_sp, sanpham.ten_sp, sanpham.anh, sanpham.gia, sanpham.mota, sanpham.luotmua, sanpham.luotxem
            order by countsp desc
            limit 4";
    $listthongkesp = pdo_query($sql);
    return $listthongkesp;
}

function loadall_thongketk(){
    $sql = "
    SELECT taikhoan.id_tk, taikhoan.user, COUNT(donhang.id_dh) as sodonhang, taikhoan.sdt, taikhoan.email
    FROM taikhoan
    JOIN donhang ON taikhoan.id_tk = donhang.id_tk
    GROUP BY taikhoan.id_tk, taikhoan.user, taikhoan.sdt, taikhoan.email
    ORDER BY sodonhang DESC
    LIMIT 4;";
    $listthongketk = pdo_query($sql);
    return $listthongketk;
}
?>