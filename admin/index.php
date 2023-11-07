<?php
session_start();
include("../model/pdo.php");
include("../model/danhmuc.php");


include("./header.php");

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];

    switch ($act) {
        // Quản lý danh mục
        case 'themdanhmuc':
            if (isset($_POST['themmoi'])) {
                $tendanhmuc = $_POST['tendanhmuc'];
                themdanhmuc($tendanhmuc);
                $thongbao = "Thêm thành công";
            }

            include('./danhmuc/them.php');
            break;

        default:

            break;
    }
} else {
    include("main.php");
}






include("./footer.php");
?>