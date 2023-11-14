<?php
function insert_monan($ten_monan, $gia_monan, $new_anhmonan, $id_danhmuc, $mota_monan, $noibat)
{
    $sql = "INSERT INTO tbl_monan(ten_monan, gia_monan, anh_monan, id_danhmuc, mota_monan, noibat) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $ten_monan, $gia_monan, $new_anhmonan, $id_danhmuc, $mota_monan, $noibat);
}

function delete_monan($id)
{
    $sql = "DELETE FROM tbl_monan WHERE id_monan = ?";
    pdo_execute($sql, $id);
}

function list_monan_All()
{
    $sql = "SELECT * FROM tbl_monan, tbl_danhmuc WHERE tbl_monan.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_monan DESC";
    $list_monan = pdo_query($sql);
    return $list_monan;
}

function list_monan_One($id)
{
    $sql = "SELECT * FROM tbl_monan WHERE id_monan = ?";
    $listMonan = pdo_query_one($sql, $id);
    return $listMonan;
}

function capnhat_monan($id_sua, $ten_monan, $gia_monan, $id_danhmuc, $mota_monan, $new_anhmonan, $noibat)
{
    if ($new_anhmonan != "") {
        $sql = "UPDATE tbl_monan SET ten_monan= ?,gia_monan= ?,anh_monan= ?,id_danhmuc= ?,mota_monan= ?, noibat = ? WHERE id_monan = ?";
        pdo_execute($sql, $ten_monan, $gia_monan, $new_anhmonan, $id_danhmuc, $mota_monan, $noibat, $id_sua);
    } else {
        $sql = "UPDATE tbl_monan SET ten_monan= ?,gia_monan= ?,id_danhmuc= ?,mota_monan= ? , noibat= ? WHERE id_monan = ?";
        pdo_execute($sql, $ten_monan, $gia_monan, $id_danhmuc, $mota_monan, $noibat, $id_sua);
    }
}











?>