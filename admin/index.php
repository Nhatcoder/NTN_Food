<?php
session_start();
include("../model/pdo.php");
include("../model/danhmuc.php");
include("../model/moan.php");


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

        case 'lietkedanhmuc':
            $listdanhmuc = loaddanhmucAll();
            include('./danhmuc/lietke.php');
            break;
        case 'xoadm':
            $iddm = $_GET['iddm'];
            xoadanhmuc($iddm);
            $listdanhmuc = loaddanhmucAll();
            include('./danhmuc/lietke.php');
            break;

        case 'suadm':
            if (isset($_GET["iddm"]) && $_GET["iddm"] > 0) {
                $iddm = $_GET['iddm'];
                $listdanhmucone = loaddanhmucone($iddm);
            }
            include('./danhmuc/sua.php');
            break;

        case 'capnhatdm':
            if (isset($_POST["capnhat"])) {
                $id = $_POST["id"];
                $tendanhmuc = $_POST["tendanhmuc"];
                capnhatdanhmuc($id, $tendanhmuc);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loaddanhmucAll();
            include('./danhmuc/lietke.php');
            break;

        // Món ăn
        case 'themmonan':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $ten_monan = $_POST['ten_monan'];
                $gia_monan = $_POST['gia_monan'];
                $id_danhmuc = $_POST['id_danhmuc'];
                $mota_monan = $_POST['mota_monan'];

                $anh_monan = $_FILES['anh_monan']['name'];
                $anh_monan_tmp = $_FILES['anh_monan']['tmp_name'];
                $upload = "../uploads/";

                $target_file = $upload . basename($anh_monan);
                if (move_uploaded_file($anh_monan_tmp, $target_file)) {
                    echo "Thêm ảnh thành công";
                } else {
                    echo "Lỗi";
                }


                insert_monan($ten_monan, $gia_monan, $anh_monan, $id_danhmuc, $mota_monan);
                $thongbao = "Thêm thành công";
            }

            $listdanhmuc = loaddanhmucAll();

            include('./monan/them.php');
            break;

        case 'xoamonan':
            if (isset($_GET['id_monan']) && $_GET['id_monan'] > 0) {
                $id_monan = $_GET['id_monan'];
                // $list_monan_one =  list_monan_One($id_monan);
                // extract($list_monan_one);
                // print_r($list_monan_one);
                // unlink('../uploads/').$anh_monan;
                delete_monan($id_monan);

            }

            $listmonan = list_monan_All();
            include('./monan/lietke.php');
            break;

        case 'lietkemonan':
            $listmonan = list_monan_All();
            include('./monan/lietke.php');
            break;











    }
} else {
    include("main.php");
}






include("./footer.php");
?>