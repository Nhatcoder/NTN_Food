<?php
    function checkid($sodienthoai)
    {      
       
       $sql = "SELECT * FROM tbl_taikhoan WHERE sodienthoai = :sodienthoai";
$params = array(':sodienthoai' => $sodienthoai);
$check_id = pdo_query_one($sql, $params);
        
        
    
    }
    function themgiohang($id_monan,$id_nguoi_dung)
    {      
       
        
        $sql = "INSERT INTO tbl_giohang(id_monan,id_nguoidung) VALUES ('$id_monan','$id_nguoi_dung')";
        pdo_execute($sql);
    }
    function layid($id)
{
    $sql = "SELECT * FROM tbl_taikhoan WHERE id_danhmuc_tintuc = ? Order by id_danhmuc_tintuc desc";
    $listdmtintuc = pdo_query_one($sql, $id);
    return $listdmtintuc;
}
    
    
    
 

?>