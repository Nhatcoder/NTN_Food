<?php
// Thanh toán đơn hàng
function insert_cart($id, $ma_donhang, $ngaymua)
{
    $sql = "INSERT INTO tbl_giohang(id_nguoidung, ma_donhang, ngaymua) VALUES (?,?,?)";
    return pdo_execute($sql, $id, $ma_donhang, $ngaymua);
}
function insert_cart_detail($id, $ma_donhang, $ngaymua)
{
    $sql = "INSERT INTO tbl_giohang_chitiet(ma_donhang, id_monan, soluongmua) VALUES (?,?,?)";
    return pdo_execute($sql, $id, $ma_donhang, $ngaymua);
}


?>