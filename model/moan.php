<?php
function insert_monan($ten_monan, $gia_monan, $anh_monan, $id_danhmuc, $mota_monan)
{
    $sql = "INSERT INTO tbl_monan(ten_monan, gia_monan, anh_monan, id_danhmuc, mota_monan) VALUES (?,?,?,?,?)";
    pdo_execute($sql, $ten_monan, $gia_monan, $anh_monan, $id_danhmuc, $mota_monan);
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










?>