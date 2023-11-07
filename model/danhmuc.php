<?php
function themdanhmuc($tendanhmuc)
{
    $sql = "INSERT INTO tbl_danhmuc(tendanhmuc) VALUES ('$tendanhmuc')";
    pdo_execute($sql);
}



?>