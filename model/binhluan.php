<?php
function thembinhluan($noidung, $id_nguoidung, $id_monan, $ngaybinhluan)
{
    $sql = "INSERT INTO `tbl_binhluan`( `noidung`, `id_nguoidung`, `id_monan`, `ngaybinhluan`) VALUES (?,?,?,?)";
    pdo_execute($sql, $noidung, $id_nguoidung, $id_monan, $ngaybinhluan);
}
function loadbinhluanAll($id)
{
    $sql = "SELECT `hoten`,anh_taikhoan, `noidung`,  `ngaybinhluan` FROM `tbl_binhluan` a INNER JOIN
    tbl_taikhoan b ON a.id_nguoidung=b.id_nguoidung WHERE id_monan = ?";
    $listbinhluan = pdo_query($sql, $id);
    return $listbinhluan;
}
function delete_binhluan($id)
{
    $sql = "DELETE FROM tbl_binhluan WHERE id_binhluan = ?";
    pdo_execute($sql, $id);
}
function capnhatbinhluan($id, $noidung)
{
    $sql = "UPDATE tbl_binhluan SET noidung = ? WHERE id_binhluan = ?";
    pdo_execute($sql, $noidung, $id);
}
