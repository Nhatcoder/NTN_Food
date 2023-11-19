<?php
function list_monan_one_danhmuc($id)
{
    $sql = "SELECT * FROM tbl_monan WHERE id_danhmuc = ?";
    $listMonan = pdo_query_one($sql, $id);
    return $listMonan;
}

function list_monan_cuahang_all()
{
    $sql = "SELECT * FROM tbl_monan";
    $list_monan = pdo_query($sql);
    return $list_monan;
}


function list_monan_in_page($tukhoa, $begin)
{
    $sql = "SELECT * FROM tbl_danhmuc, tbl_monan WHERE tbl_monan.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_monan.ten_monan LIKE '%$tukhoa%' LIMIT $begin,9;";
    $list_monan = pdo_query($sql);
    return $list_monan;
}



?>