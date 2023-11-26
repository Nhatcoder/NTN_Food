<?php
ob_start();
session_start();
include("./model/pdo.php");
include("./model/connect_vnpay.php");

include("./model/dangnhap.php");
include("./model/binhluan.php");
include("./model/addcart.php");
include("./model/list_monan_home.php");
include("./model/bankking.php");
include("./model/dmtintuc.php");
include("./model/tintuc.php");
include("./model/list_monan_cuahang.php");
include("./model/mail.php");


// session_destroy();
// die();

// print_r($_SESSION["user"]);


$list_monan_special = list_monan_special();
$list_menu_today = list_menu_today();
$list_menu_home = list_menu_home();
$list_monan_all = list_monan_all();
if (isset($list_monan_all)) {
    foreach ($list_monan_all as $value) {
        extract($value);
    }
    $list_monan_same_cart = list_monan_same_cart($id_danhmuc);
}

if (isset($_SESSION["user"])) {
    $id_nguoidung = $_SESSION["user"];
    $list_tk = list_check_tk_id($id_nguoidung);
}


if (isset($_GET["act"]) && $_GET["act"] != "") {
    include("./views/header/header_act.php");
} else {
    include("./views/header/header.php");
}


if (isset($_GET["act"]) && $_GET["act"] != "") {
    $act = $_GET["act"];

    switch ($act) {
            // Tài khoản
        case "dangnhap":
            if (isset($_POST["submit"])) {
                $sodienthoai = $_POST["sodienthoai"];
                $pass = md5($_POST["pass"]);

                $result = check_tk_one($sodienthoai, $pass);
                if ($result) {
                    extract($result);
                    $_SESSION["email"] = $email;
                    $_SESSION["user"] = $id_nguoidung;
                    echo '<script>alert("Thành công")</script>';
                    echo '<script>window.location.href = "index.php";</script>';
                } else {
                    echo '<script>alert("Lỗi")</script>';
                }
            }
            break;
        case "dangki":
            if (isset($_POST["submit"])) {
                $hoten = $_POST["hoten"];
                $sodienthoai = $_POST["sodienthoai"];
                $email = $_POST["email"];
                $pass = md5($_POST["pass"]);
                $anh_taikhoan = "avt.jpg";
                $diachi = "Ở đâu ?";

                $id_nguoidung = insert_tk($hoten, $sodienthoai, $email, $pass, $vaitro = 0, $anh_taikhoan, $diachi);
                $_SESSION["user"] = $id_nguoidung;
                $_SESSION["email"] = $email;

                // Thêm luôn địa chỉ mặc định
                insert_diachi_order($hoten, $diachi, $email, $sodienthoai, $id_nguoidung);

                echo '<script>alert("Thành công")</script>';
                echo '<script>window.location.href = "index.php";</script>';
            }
            break;

        case "suataikhoan":
            if (isset($_GET["id_nguoidung"]) > 0) {
                $id_nguoidung = $_GET["id_nguoidung"];
                $user = list_check_tk_id($id_nguoidung);
            }
            include("./views/main/capnhat_user.php");
            break;

        case "capnhattaikhoan":
            if (isset($_POST["submit"])) {
                $id_nguoidung = $_POST["id_sua"];
                $hoten = $_POST["hoten"];
                $sodienthoai = $_POST["sodienthoai"];
                $email = $_POST["email"];
                $diachi = $_POST["diachi"];
                $matkhau = md5($_POST["pass"]);
                $vaitro = 0;

                $anh_taikhoan = $_FILES["anh_taikhoan"]["name"];
                $anh_taikhoan_tmp = $_FILES['anh_taikhoan']['tmp_name'];
                $upload = "uploads/avatar/";

                $user = list_check_tk_id($id_nguoidung);

                if ($anh_taikhoan != "") {
                    $linkanh = 'uploads/avatar/' . $user['anh_taikhoan'];
                    unlink($linkanh);

                    $new_anhtk = time() . "_" . basename($anh_taikhoan);

                    $target_file = $upload . $new_anhtk;
                    if (move_uploaded_file($anh_taikhoan_tmp, $target_file)) {
                        echo "Thêm ảnh thành công";
                    } else {
                        echo "Lỗi khi tải lên ảnh mới";
                    }
                }

                unset($_SESSION["user"]);
                $_SESSION["user"] = $id_nguoidung;
                update_taikhoan($hoten, $sodienthoai, $email, $matkhau, $vaitro, $new_anhtk, $diachi, $id_nguoidung);

                // Thêm luôn địa chỉ
                insert_diachi_order($hoten, $diachi, $email, $sodienthoai, $id_nguoidung);

                echo '<script>alert("Thành công")</script>';
                echo '<script>window.location.href = "index.php";</script>';
            }
            break;



        case "dangxuat":
            if (isset($_SESSION["user"])) {
                unset($_SESSION["user"]);
                echo '<script>window.location.href = "index.php";</script>';
            }
            break;
            // Menu
        case "cuahang":
            $tukhoa = "";
            if (isset($_POST['timkiem'])) {
                $tukhoa = $_POST['tukhoa'];
                // echo $tukhoa;
            }

            if (isset($_GET['trang'])) {
                $page = intval($_GET['trang']);
            } else {
                $page = 1;
            }

            if ($page == "" || $page == 1) {
                $begin = 0;
            } else {
                $begin = ($page * 9) - 9;
            }

            $list_all_dm = list_all_dm();
            $list_monan_cuahang_all = list_monan_cuahang_all();
            $list_monan_in_page = list_monan_in_page($tukhoa, $begin);

            include("./views/main/cuahang.php");
            break;


        case "monandanhmuc":
            if (isset($_GET["iddm"])) {
                $tukhoa = "";
                if (isset($_POST['timkiem'])) {
                    $tukhoa = $_POST['tukhoa'];
                }

                if (isset($_GET['trang'])) {
                    $page = intval($_GET['trang']);
                } else {
                    $page = 1;
                }

                if ($page == "" || $page == 1) {
                    $begin = 0;
                } else {
                    $begin = ($page * 9) - 9;
                }

                $iddm = intval($_GET["iddm"]);
                $list_monan_dm_in_page = list_monan_dm_in_page($tukhoa, $begin, $iddm);
            }


            $list_all_dm = list_all_dm();
            $list_monan_cuahang_all = list_monan_cuahang_all();
            include("./views/main/monan_danhmuc.php");
            break;

        case "chitietmonan":
            if (isset($_GET["id_monan"]) && $_GET["id_monan"] > 0) {
                $id = $_GET["id_monan"];
                $listmonan = list_monan_One($id);
                $listbinhluan =  loadbinhluanAll($id);

                if (isset($_SESSION["user"])) {
                    $id_nguoidung = $_SESSION["user"];
                    $list_tk = list_check_tk_id($id_nguoidung);
                }

                include("./views/main/chitiet_monan.php");
            }

            break;


            // Giỏ hàng
        case "giohang":
            // Thêm món vào giỏ hàng
            if (isset($_GET["id_monan"])) {
                $id = $_GET["id_monan"];
                $list_monan_cart = list_monan_cart($id);
                $soluongmua = 1;

                if (is_array($list_monan_cart)) {
                    foreach ($list_monan_cart as $food) {
                        $new_food = [
                            "id_monan" => $food['id_monan'],
                            "ten_monan" => $food['ten_monan'],
                            "gia_monan" => $food['gia_monan'],
                            "anh_monan" => $food['anh_monan'],
                            "soluongmua" => $soluongmua,
                        ];
                    }
                }

                // Kiểm tra session tồn tại hay không nếu chưa thì tăng lên
                if (isset($_SESSION['cart'])) {
                    $i = 0;
                    while ($i < count($_SESSION['cart'])) {
                        if ($_SESSION['cart'][$i]['id_monan'] == $id) {
                            $_SESSION['cart'][$i]['soluongmua'] += $soluongmua;
                            break;
                        }
                        $i++;
                    }
                    if ($i == count($_SESSION['cart'])) {
                        array_push($_SESSION['cart'], $new_food);
                    }
                } else {
                    $_SESSION['cart'] = array($new_food);
                }
                // echo "<script>alert('Đã thêm thành công');</script>";
            }
            include("./views/main/giohang.php");
            break;

        case "themgiohang":
            // Thêm món vào giỏ hàng
            if (isset($_GET["id_monan"]) || $_POST["themgio"]) {
                $id = $_GET["id_monan"];
                $list_monan_cart = list_monan_cart($id);

                $soluongmua = 1;

                if (is_array($list_monan_cart)) {
                    foreach ($list_monan_cart as $food) {
                        $new_food = [
                            "id_monan" => $food['id_monan'],
                            "ten_monan" => $food['ten_monan'],
                            "gia_monan" => $food['gia_monan'],
                            "anh_monan" => $food['anh_monan'],
                            "soluongmua" => $_POST["soluongmua"] ?? $soluongmua,
                        ];
                    }
                }

                // Kiểm tra session tồn tại hay không nếu chưa thì tăng lên
                if (isset($_SESSION['cart'])) {
                    $i = 0;
                    while ($i < count($_SESSION['cart'])) {
                        if ($_SESSION['cart'][$i]['id_monan'] == $id) {
                            $_SESSION['cart'][$i]['soluongmua'] += $soluongmua;
                            break;
                        }
                        $i++;
                    }
                    if ($i == count($_SESSION['cart'])) {
                        array_push($_SESSION['cart'], $new_food);
                    }
                } else {
                    $_SESSION['cart'] = array($new_food);
                }
                echo "<script>alert('Đã thêm thành công');</script>";
                echo '<script>window.location.href = "index.php";</script>';
            }
            break;

        case "xoamonan":
            if (isset($_SESSION["cart"]) && isset($_GET["id_monan"])) {
                $id_monan = $_GET["id_monan"];
                $updatedCart = [];

                foreach ($_SESSION["cart"] as $item) {
                    if ($item["id_monan"] != $id_monan) {
                        $updatedCart[] = $item;
                    }
                }

                // Cập nhật phiên giỏ hàng với danh sách đã lọc
                $_SESSION["cart"] = $updatedCart;

                // Kiểm tra xem giỏ hàng còn sản phẩm không
                if (count($_SESSION["cart"]) == 0) {
                    include("./views/main/giohang_null.php");
                } else {
                    include("./views/main/giohang.php");
                }
            }
            break;

        case "thanhtoan":
            if (isset($_SESSION["user"])) {
                $id_nguoidung = $_SESSION["user"];
                $list_diachi = list_diachi_id($id_nguoidung);
            }

            if (isset($_POST["thanhtoan"])) {
                foreach ($_POST['soluongmua'] as $key => $soluong) {
                    $_SESSION['cart'][$key]['soluongmua'] = $soluong;
                }
            }

            include("./views/main/thanhtoan.php");
            break;

        case "capnhatdiachi":
            if (isset($_GET["id_nguoidung"]) > 0 && isset($_POST["capnhat"])) {
                $id_nguoidung = $_GET["id_nguoidung"];

                $id_diachi = $_POST["id_diachi"];

                $hoten = $_POST["hoten"];
                $diachi = $_POST["diachi"];
                $email = $_POST["email"];
                $sodienthoai = $_POST["sodienthoai"];

                update_diachi_order($hoten, $diachi, $email, $sodienthoai, $id_nguoidung, $id_diachi);

                echo "<script>alert('Đã cập thành công');</script>";
                echo '<script>window.location.href = "index.php?act=thanhtoan";</script>';
            }
            break;

        case "dathang":
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $select_pay = $_POST['phuongthucthanhtoan'];

                // thanh toán bằng tiền mặt
                if ($select_pay == "tienmat") {
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $ngaymua = date("Y-m-d H:i:s");
                    $ma_donhang = rand(0, 9999);
                    $_SESSION["madonhang"] = $ma_donhang;

                    if (isset($_SESSION["user"])) {
                        $id = $_SESSION["user"];
                        $loai_thanhtoan = "Tiền mặt";

                        insert_bill($id, $ma_donhang, $ngaymua, $id_trangthai = 1, $loai_thanhtoan);
                        foreach ($_SESSION["cart"] as $key => $value) {
                            extract($value);
                            insert_bill_detail($ma_donhang, $id_monan, $soluongmua);
                        }
                    }

                    //Gửi mail
                    submitmail();

                    unset($_SESSION["cart"]);
                    unset($_SESSION["madonhang"]);
                    echo "<script>alert('Đặt hàng thành công');</script>";
                    include("./views/main/camon.php");

                    // Thanh tóan bằng vnpay
                } else if ($select_pay == "vnp") {
                    $ma_donhang = rand(0, 9999);
                    $_SESSION["madonhang"] = $ma_donhang;
                    $vnp_TxnRef = $ma_donhang; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY

                    $i = 0;
                    $tongtien = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        extract($value);
                        $thanhtien = $value['soluongmua'] * $value['gia_monan'];
                        $tongtien = $tongtien + $thanhtien;
                        $i++;
                    }

                    $vnp_OrderInfo = "Thanh tóan đơn hàng đặt tại NTN Food";
                    $vnp_OrderType = "Billpayment";
                    $vnp_Amount = $tongtien * 100; //Giá tiền
                    $vnp_Locale = "VN";
                    $vnp_BankCode = "NCB";
                    $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                    $vnp_ExpireDate = $expire;
                    $inputData = array(
                        "vnp_Version" => "2.1.0",
                        "vnp_TmnCode" => $vnp_TmnCode,
                        "vnp_Amount" => $vnp_Amount,
                        "vnp_Command" => "pay",
                        "vnp_CreateDate" => date('YmdHis'),
                        "vnp_CurrCode" => "VND",
                        "vnp_IpAddr" => $vnp_IpAddr,
                        "vnp_Locale" => $vnp_Locale,
                        "vnp_OrderInfo" => $vnp_OrderInfo,
                        "vnp_OrderType" => $vnp_OrderType,
                        "vnp_ReturnUrl" => $vnp_Returnurl,
                        "vnp_TxnRef" => $vnp_TxnRef,
                        "vnp_ExpireDate" => $vnp_ExpireDate
                    );

                    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                        $inputData['vnp_BankCode'] = $vnp_BankCode;
                    }

                    // var_dump($inputData);
                    // die();

                    ksort($inputData);
                    $query = "";
                    $i = 0;
                    $hashdata = "";
                    foreach ($inputData as $key => $value) {
                        if ($i == 1) {
                            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                        } else {
                            $hashdata .= urlencode($key) . "=" . urlencode($value);
                            $i = 1;
                        }
                        $query .= urlencode($key) . "=" . urlencode($value) . '&';
                    }

                    $vnp_Url = $vnp_Url . "?" . $query;
                    if (isset($vnp_HashSecret)) {
                        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                    }
                    $returnData = array(
                        'code' => '00',
                        'message' => 'success',
                        'data' => $vnp_Url
                    );

                    if (isset($_POST['redirect'])) {
                        echo '<script>window.location.href = "' . $vnp_Url . '";</script>';
                        die();
                    } else {
                        echo json_encode($returnData);
                    }
                }
            }

            break;

            // 
        case "camon":
            if (isset($_GET["vnp_Amount"]) && $_GET['vnp_ResponseCode'] == '00') {
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ngaymua = date("Y-m-d H:i:s");

                if (isset($_SESSION["user"])) {
                    $id = $_SESSION["user"];
                    $ma_donhang = $_SESSION["madonhang"];
                    $loai_thanhtoan = "Vnpay";

                    insert_bill($id, $ma_donhang, $ngaymua, $id_trangthai = 1, $loai_thanhtoan);
                    foreach ($_SESSION["cart"] as $key => $value) {
                        extract($value);
                        insert_bill_detail($ma_donhang, $id_monan, $soluongmua);
                    }
                }

                $vnp_BankCode = $_GET["vnp_BankCode"];
                $vnp_BankTranNo = $_GET["vnp_BankTranNo"];
                $vnp_CardType = $_GET["vnp_CardType"];
                $vnp_OrderInfo = $_GET["vnp_OrderInfo"];
                $vnp_PayDate = $_GET["vnp_PayDate"];
                $vnp_TmnCode = $_GET["vnp_TmnCode"];
                $vnp_TransactionNo = $_GET["vnp_TransactionNo"];
                $ma_donhang = $_SESSION["madonhang"];

                $i = 0;
                $tongtien = 0;
                foreach ($_SESSION["cart"] as $key => $value) {
                    extract($value);
                    $thanhtien = $value['soluongmua'] * $value['gia_monan'];
                    $tongtien = $tongtien + $thanhtien;
                    $i++;
                }

                insert_vnpay($tongtien, $ma_donhang, $vnp_BankCode, $vnp_BankTranNo, $vnp_CardType, $vnp_OrderInfo, $vnp_PayDate, $vnp_TmnCode, $vnp_TransactionNo);


                //Gửi mail
                submitmail();

                unset($_SESSION["cart"]);
                unset($_SESSION["madonhang"]);
                include("./views/main/camon.php");
            } else {
                echo "<script>alert('Đã hủy thanh toán');</script>";
                echo '<script>window.location.href = "index.php?act=thanhtoan";</script>';
            }
            break;


        case "tintuc":
            if (isset($_GET['trang'])) {
                $page = intval($_GET['trang']);
            } else {
                $page = 1;
            }

            if ($page == "" || $page == 1) {
                $begin = 0;
            } else {
                $begin = ($page * 6) - 6;
            }

            $tintuc = list_page_post($begin);

            $dmtintuc = loaddmtintucAll();
            $list_all_tintuc = list_all_tintuc_home();
            $top3 = list_tintuc_top();
            include("./views/tintuc/lietke.php");
            break;


        case "danhmuctintuc":
            if (isset($_GET["id"])) {
                if (isset($_GET['trang'])) {
                    $page = intval($_GET['trang']);
                } else {
                    $page = 1;
                }

                if ($page == "" || $page == 1) {
                    $begin = 0;
                } else {
                    $begin = ($page * 6) - 6;
                }

                $id = intval($_GET['id']);
                $tintuc_danhmuc = list_page_post_id($begin, $id);
                $list_tintuc_danhmuc = list_tintuc_id($id); //Này cho đếm trang


                // echo "<pre>";
                // print_r($tintuc_danhmuc);
            }

            $dmtintuc = loaddmtintucAll();
            $top3 = list_tintuc_top();
            include("./views/tintuc/tintuc_danhmuc.php");
            break;



        case "tintucchitiet":
            $id = $_GET["idttct"];
            $tintucchitiet = list_tintuc_One($id);
            include("./views/tintuc/chitiet.php");
            break;


        case "lienhe":
            include("./views/main/lienhe.php");
            break;

        case "vechungtoi":
            include("./views/trang/vechungtoi.php");
            break;

        case "cauhoithuonggap":
            include("./views/trang/cauhoithuonggap.php");
            break;

        case "team":
            include("./views/trang/team.php");
            break;

        case "teamchitiet":
            include("./views/trang/teamchitiet.php");
            break;

        case "danhgia":
            include("./views/trang/danhgia.php");
            break;

        case "dichvu":
            include("./views/trang/dichvu.php");
            break;

        case "dichvuchitiet":
            include("./views/trang/dichvuchitiet.php");
            break;

        case "trang loi":
            include("./views/trang/trangloi.php");
            break;

        case "sapramat":
            include("./views/trang/sapramat.php");
            break;

        case "dangbaotri":
            include("./views/trang/dangbaotri.php");
            break;
    }
} else {
    include("./views/main/main.php");
}



if (isset($_GET["act"]) && $_GET["act"] != "") {
    include("./views/footer/footer_act.php");
} else {
    include("./views/footer/footer.php");
}

ob_end_flush();
