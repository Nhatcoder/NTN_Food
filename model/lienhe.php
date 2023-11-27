<?php
function lienhe($ho_ten,$email,$sodienthoai,$noidung,$trangthai)
{
    $sql = "INSERT INTO `tbl_lienhe`( `ho_ten`, `email`, `sodienthoai`, `noidung`, `trangthai`)
     VALUES ('$ho_ten','$email','$sodienthoai','$noidung','$trangthai')";
    pdo_execute($sql);
}

?>