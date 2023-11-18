<?php
session_start();
if (!$_SESSION["dangnhap_admin"]) {
    header("location: ./login/login.php");
}

include("../model/pdo.php");
include("../model/danhmuc.php");
include("../model/moan.php");
include("../model/dmtintuc.php");
include("../model/trangthaidonhang.php");


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
                $noibat = $_POST['noibat'];

                $anh_monan = $_FILES['anh_monan']['name'];
                $anh_monan_tmp = $_FILES['anh_monan']['tmp_name'];
                $upload = "../uploads/monan/";

                $new_anhmonan = time() . "_" . basename($anh_monan);
                $target_file = $upload . $new_anhmonan;

                if (move_uploaded_file($anh_monan_tmp, $target_file)) {
                    echo "Thêm ảnh thành công";
                } else {
                    echo "Lỗi";
                }

                insert_monan($ten_monan, $gia_monan, $new_anhmonan, $id_danhmuc, $mota_monan, $noibat);
                $thongbao = "Thêm thành công";
            }

            $listdanhmuc = loaddanhmucAll();

            include('./monan/them.php');
            break;

        case 'xoamonan':
            if (isset($_GET['id_monan']) && $_GET['id_monan'] > 0) {
                $id_monan = $_GET['id_monan'];
                $list_monan_one = list_monan_One($id_monan);
                extract($list_monan_one);
                $linkanh = '../uploads/monan/' . $anh_monan;
                unlink($linkanh);
                delete_monan($id_monan);
            }

            $listmonan = list_monan_All();
            include('./monan/lietke.php');
            break;

        case 'lietkemonan':
            $listmonan = list_monan_All();
            include('./monan/lietke.php');
            break;

        case 'suamonan':
            if (isset($_GET['id_monan']) && $_GET['id_monan'] > 0) {
                $id_monan = $_GET['id_monan'];
                $list_monan_one = list_monan_One($id_monan);
            }
            $listdanhmuc = loaddanhmucAll();
            include('./monan/sua.php');
            break;


        case 'capnhatmonan':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id_sua = $_POST['id_sua'];
                $ten_monan = $_POST['ten_monan'];
                $gia_monan = $_POST['gia_monan'];
                $id_danhmuc = $_POST['id_danhmuc'];
                $mota_monan = $_POST['mota_monan'];
                $noibat = $_POST['noibat'];

                $anh_monan = $_FILES['anh_monan']['name'];
                $anh_monan_tmp = $_FILES['anh_monan']['tmp_name'];
                $upload = "../uploads/monan/";

                $list_monan_one = list_monan_One($id_sua);

                if ($anh_monan != "") {
                    $linkanh = '../uploads/monan/' . $list_monan_one['anh_monan'];
                    unlink($linkanh);

                    $new_anhmonan = time() . "_" . basename($anh_monan);

                    $target_file = $upload . $new_anhmonan;
                    if (move_uploaded_file($anh_monan_tmp, $target_file)) {
                        echo "Thêm ảnh thành công";
                    } else {
                        echo "Lỗi khi tải lên ảnh mới";
                    }
                }

                capnhat_monan($id_sua, $ten_monan, $gia_monan, $id_danhmuc, $mota_monan, $new_anhmonan, $noibat);
            }

            $listmonan = list_monan_All();

            include('./monan/lietke.php');
            break;


        //tintuc
        case 'themdmtintuc':
            if (isset($_POST['themmoi'])) {
                $ten_danhmuc_tintuc = $_POST['ten_danhmuc_tintuc'];
                $phuluc_danhmuc_tintuc = $_POST['phuluc_danhmuc_tintuc'];
                themdmtintuc($ten_danhmuc_tintuc, $phuluc_danhmuc_tintuc);
                $thongbao = "Thêm thành công";
            }
            include('./tintuc/danhmuc/them.php');
            break;

        case 'lietkedmtintuc':
            $listdmtintuc = loaddmtintucAll();
            include('./tintuc/danhmuc/lietke.php');
            break;

        case 'xoadmtintuc':
            $iddmtintuc = $_GET['id_danhmuc_tintuc'];
            xoadmtintuc($iddmtintuc);
            $listdmtintuc = loaddmtintucAll();
            include('./tintuc/danhmuc/lietke.php');
            break;

        case 'suadmtintuc':
            if (isset($_GET["id_danhmuc_tintuc"]) && $_GET["id_danhmuc_tintuc"] > 0) {
                $id_danhmuc_tintuc = $_GET['id_danhmuc_tintuc'];
                $listdmtintucone = loaddmtintucone($id_danhmuc_tintuc);
            }
            include('./tintuc/danhmuc/sua.php');
            break;

        case 'capnhatdmtintuc':
            if (isset($_POST["capnhat"])) {
                $id_danhmuc_tintuc = $_POST["id_danhmuc_tintuc"];
                $ten_danhmuc_tintuc = $_POST["ten_danhmuc_tintuc"];
                $phuluc_danhmuc_tintuc = $_POST["phuluc_danhmuc_tintuc"];
                capnhatdmtintuc($id_danhmuc_tintuc, $ten_danhmuc_tintuc, $phuluc_danhmuc_tintuc);
                $thongbao = "Thêm thành công";
            }
            $listdmtintuc = loaddmtintucAll();
            include('./tintuc/danhmuc/lietke.php');
            break;


            case 'quanlydonhang':
                $loaddonhang=loaddonhangAll();
              
                include('./trangthaidonhang/hienthi.php');
                break;
            case 'suatrangthai':
                $trangthai=loadtrangthaiAll();
                if (isset($_POST['capnhatdonhang']) && $_POST['capnhatdonhang'] > 0) {
                    $id = $_GET['iddh'];
                    $id_trangthai= $_POST['id_trangthai'];
                     capnhattrangthai($id, $id_trangthai);
                     echo '<script>window.location.href = "index.php?act=quanlydonhang";</script>';
                    
                }
                $loaddonhang=loaddonhangAll();
                
                
              
                include('./trangthaidonhang/suatrangthai.php');
                break;
            case 'giaothanhcong':
                $loaddonhangtk=loaddonhangtk();
              
                include('./trangthaidonhang/giaothanhcong.php');
                break;
            case 'dahuy':
                $loaddonhanghuy=loaddonhanghuy();
              
                include('./trangthaidonhang/huydon.php');
                break;
            case 'chitietdonhang':
               
                    $id = $_GET['iddh'];
                    
                    
                
                $chitiet=list_chitiet_One($id);
                include('./trangthaidonhang/chitietdonhang.php');
                break;











    }
} else {
    include("main.php");
}






include("./footer.php");
?>