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

function list_check_tk_id($id_nguoidung)
{
    $sql = "SELECT * FROM tbl_taikhoan where id_nguoidung = ?";
    $list_tk = pdo_query_one($sql, $id_nguoidung);
    return $list_tk;
}
function list_diachi_id($id_nguoidung)
{
    $sql = "SELECT * FROM tbl_diachinhanhang where id_nguoidung = ?";
    $list_tk = pdo_query_one($sql, $id_nguoidung);
    return $list_tk;
}

function insert_tk($hoten, $sodienthoai, $email, $pass, $vaitro = 0, $anh_taikhoan, $diachi)
{
    $vaitro = ($vaitro === null) ? 0 : $vaitro;
    $sql = "INSERT INTO tbl_taikhoan(hoten, sodienthoai, email, matkhau, vaitro, anh_taikhoan, diachi) VALUES (?,?,?,?,?,?,?)";
    return pdo_execute_id($sql, $hoten, $sodienthoai, $email, $pass, $vaitro, $anh_taikhoan, $diachi);
}

// function update_taikhoan($hoten, $sodienthoai, $email, $matkhau, $vaitro = 0, $new_anhtk, $diachi, $id_nguoidung)
// {
//     $sql = "UPDATE tbl_taikhoan SET hoten= ?,sodienthoai= ?,email= ?,matkhau= ?,vaitro= ?,anh_taikhoan= ?,diachi= ? WHERE id_nguoidung = ?";
//     return pdo_execute($sql, $hoten, $sodienthoai, $email, $matkhau, $vaitro, $new_anhtk, $diachi, $id_nguoidung);
// }

function update_taikhoan($hoten, $sodienthoai, $email, $matkhau, $vaitro = 0, $new_anhtk, $diachi, $id_nguoidung)
{
    if ($new_anhtk != "") {
        $sql = "UPDATE tbl_taikhoan SET hoten= ?,sodienthoai= ?,email= ?,matkhau= ?,vaitro= ?,anh_taikhoan= ?,diachi= ? WHERE id_nguoidung = ?";
        return pdo_execute($sql, $hoten, $sodienthoai, $email, $matkhau, $vaitro, $new_anhtk, $diachi, $id_nguoidung);
    } else {
        $sql = "UPDATE tbl_taikhoan SET hoten= ?,sodienthoai= ?,email= ?,matkhau= ?,vaitro= ?, diachi= ? WHERE id_nguoidung = ?";
        return pdo_execute($sql, $hoten, $sodienthoai, $email, $matkhau, $vaitro, $diachi, $id_nguoidung);
    }
}



?>