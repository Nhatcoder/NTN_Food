<?php
function list_monan_special()
{
    $sql = "SELECT * FROM tbl_monan, tbl_danhmuc WHERE tbl_monan.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_monan.noibat > 5 ORDER BY id_monan DESC";
    $list_monan = pdo_query($sql);
    return $list_monan;
}

function list_menu_today()
{
    $sql = "SELECT * FROM tbl_monan, tbl_danhmuc WHERE tbl_monan.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_monan.noibat = 1 ORDER BY id_monan DESC limit 4";
    $list_monan = pdo_query($sql);
    return $list_monan;
}
function list_menu_home()
{
    $sql = "SELECT * FROM tbl_monan, tbl_danhmuc WHERE tbl_monan.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_monan.noibat = 1 ORDER BY id_monan DESC";
    $list_monan = pdo_query($sql);
    return $list_monan;
}

?>