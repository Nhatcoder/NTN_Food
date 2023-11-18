<?php 
function loaddonhangAll()
{
    $sql = "SELECT a.loai_thanhtoan,a.ma_donhang, c.hoten,c.diachi,c.sodienthoai, a.id_trangthai,a.ngaymua,d.tentrangthai  FROM tbl_giohang a  INNER join tbl_taikhoan c ON a.id_nguoidung = c.id_nguoidung INNER JOIN tbl_trangthai d on a.id_trangthai = d.id_trangthai WHERE a.id_trangthai IN (0,1, 2, 3);";
    $listdh = pdo_query($sql);
    return $listdh;
}
function loaddonhangtk()
{
    $sql = "SELECT a.loai_thanhtoan,a.ma_donhang, c.hoten,c.diachi,c.sodienthoai, a.id_trangthai,a.ngaymua,d.tentrangthai  FROM tbl_giohang a  INNER join tbl_taikhoan c ON a.id_nguoidung = c.id_nguoidung INNER JOIN tbl_trangthai d on a.id_trangthai = d.id_trangthai WHERE a.id_trangthai IN (4);";
    $listdhtk = pdo_query($sql);
    return $listdhtk;
}
function loaddonhanghuy()
{
    $sql = "SELECT a.loai_thanhtoan,a.ma_donhang, c.hoten,c.diachi,c.sodienthoai, a.id_trangthai,a.ngaymua,d.tentrangthai  FROM tbl_giohang a  INNER join tbl_taikhoan c ON a.id_nguoidung = c.id_nguoidung INNER JOIN tbl_trangthai d on a.id_trangthai = d.id_trangthai WHERE a.id_trangthai IN (5);";
    $listdhhuy = pdo_query($sql);
    return $listdhhuy;
}

function capnhattrangthai($id, $id_trangthai)
{
    $sql = "UPDATE tbl_giohang SET id_trangthai = ? WHERE ma_donhang = ?";
    pdo_execute($sql, $id_trangthai, $id);
}
function list_trangthai_One($id)
{
    $sql = "SELECT * FROM tbl_giohang WHERE ma_donhang = ?";
    $trangThai = pdo_query_one($sql, $id);
    return $trangThai;
}
function loadtrangthaiAll()
{
    $sql = "SELECT * FROM tbl_trangthai ";
    $listth = pdo_query($sql);
    return $listth;
}
function list_chitiet_One($id)
{
    $sql = "SELECT b.loai_thanhtoan,b.ngaymua, c.hoten,c.sodienthoai,c.diachi,b.ma_donhang,d.ten_monan,d.gia_monan,a.soluongmua,a.soluongmua*d.gia_monan AS tong_tien,e.tentrangthai FROM tbl_giohang_chitiet a INNER JOIN tbl_giohang b ON a.ma_donhang = b.ma_donhang INNER JOIN tbl_taikhoan c on b.id_nguoidung = c.id_nguoidung INNER JOIN tbl_monan d ON a.id_monan = d.id_monan INNER JOIN tbl_trangthai e on b.id_trangthai = e.id_trangthai WHERE b.ma_donhang = ?";
    $chitiet = pdo_query_one($sql, $id);
    return $chitiet;
}
?>