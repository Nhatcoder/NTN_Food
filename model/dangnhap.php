<?php
function check_tk_one($sodienthoai, $pass)
{
    $sql = "SELECT * FROM tbl_taikhoan WHERE sodienthoai = ? AND matkhau = ?";
    $list_tk = pdo_query_one($sql, $sodienthoai, $pass);
    return $list_tk;
}
?>