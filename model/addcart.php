<?php
// Thanh toán đơn hàng
function insert_cart($id, $ma_donhang, $ngaymua, $id_trangthai = 1, $loai_thanhtoan)
{
    $sql = "INSERT INTO tbl_giohang(id_nguoidung, ma_donhang, ngaymua, id_trangthai, loai_thanhtoan) VALUES (?,?,?,?,?)";
    return pdo_execute($sql, $id, $ma_donhang, $ngaymua, $id_trangthai, $loai_thanhtoan);
}
function insert_cart_detail($id, $ma_donhang, $ngaymua)
{
    $sql = "INSERT INTO tbl_giohang_chitiet(ma_donhang, id_monan, soluongmua) VALUES (?,?,?)";
    return pdo_execute($sql, $id, $ma_donhang, $ngaymua);
}

function insert_diachi_order($hoten, $diachi, $email, $sodienthoai, $id_nguoidung)
{
    $sql = "INSERT INTO tbl_diachinhanhang(hoten, diachi, email, sodienthoai, id_nguoidung) VALUES (?,?,?,?,?)";
    return pdo_execute($sql, $hoten, $diachi, $email, $sodienthoai, $id_nguoidung);
}

function update_diachi_order($hoten, $diachi, $email, $sodienthoai, $id_nguoidung)
{
    $sql = "UPDATE tbl_diachinhanhang SET hoten=?, diachi=?, email=?, sodienthoai=? WHERE id_nguoidung=?";
    return pdo_execute($sql, $hoten, $diachi, $email, $sodienthoai, $id_nguoidung);
}



?>