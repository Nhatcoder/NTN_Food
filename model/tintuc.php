<?php
function insert_tintuc($ten_tintuc, $mota_tintuc, $new_anhtintuc, $id_danhmuc_tintuc)
{
    $sql = "INSERT INTO tbl_tintuc(ten_tintuc, mota_tintuc, anh_tintuc, id_danhmuc_tintuc) VALUES (?,?,?,?)";
    pdo_execute($sql, $ten_tintuc, $mota_tintuc, $new_anhtintuc, $id_danhmuc_tintuc);
}


function list_tintuc_All()
{
    $sql = "SELECT * FROM tbl_tintuc, tbl_danhmuc_tintuc WHERE tbl_tintuc.id_danhmuc_tintuc = tbl_danhmuc_tintuc.id_danhmuc_tintuc 
    ORDER BY id_tintuc DESC";
    $list_tintuc = pdo_query($sql);
    return $list_tintuc;
}
function list_tintuc_top()
{
    $sql = "SELECT * FROM `tbl_tintuc`ORDER BY id_tintuc DESC
    LIMIT 3;";
    $list_tintuc_top = pdo_query($sql);
    return $list_tintuc_top;
}
function list_tintuc_cc($id)
{
    $sql = "SELECT * FROM tbl_tintuc WHERE id_danhmuc_tintuc =  ?";
    $tintuccc = pdo_query($sql,$id);
    return $tintuccc;
}


function delete_tintuc($id)
{
    $sql = "DELETE FROM tbl_tintuc WHERE id_tintuc = ?";
    pdo_execute($sql, $id);
}

function list_tintuc_One($id)
{
    $sql = "SELECT * FROM tbl_tintuc WHERE id_tintuc = ?";
    $listTintuc = pdo_query_one($sql, $id);
    return $listTintuc;
}

function capnhat_tintuc($id_sua, $ten_tintuc,$mota_tintuc, $id_danhmuc_tintuc,  $new_anhtintuc)
{
    if ($new_anhtintuc != "") {
        $sql = "UPDATE tbl_tintuc SET ten_tintuc= ?, mota_tintuc= ?, anh_tintuc= ?, id_danhmuc_tintuc= ? WHERE id_tintuc = ?";
        pdo_execute($sql, $ten_tintuc, $mota_tintuc, $new_anhtintuc, $id_danhmuc_tintuc, $id_sua);
    } else {
        $sql = "UPDATE tbl_tintuc SET ten_tintuc= ?,mota_tintuc= ?,id_danhmuc_tintuc= ? WHERE id_tintuc = ?";
        pdo_execute($sql, $ten_tintuc, $mota_tintuc, $id_danhmuc_tintuc, $id_sua);
    }
}








?>