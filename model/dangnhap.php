<?php
function check_tk_one($sodienthoai, $pass)
{   
    
    
    $sql = "SELECT * FROM tbl_taikhoan WHERE sodienthoai = ? AND matkhau = ?";
    $list_tk = pdo_query_one($sql, $sodienthoai, $pass);
   
    return $list_tk;
}

function list_tk_one()
{
    $sql = "SELECT * FROM tbl_taikhoan";
    $list_tk = pdo_query_one($sql);
    return $list_tk;
}


function insert_tk($hoten, $sodienthoai, $email, $pass, $vaitro = 0)
{
    $vaitro = ($vaitro === null) ? 0 : $vaitro;
    $sql = "INSERT INTO tbl_taikhoan(hoten, sodienthoai, email, matkhau, vaitro) VALUES (?,?,?,?,?)";
    return pdo_execute_id($sql, $hoten, $sodienthoai, $email, $pass, $vaitro);
}






?>