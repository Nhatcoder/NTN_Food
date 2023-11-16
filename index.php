<?php
session_start();
include("./model/pdo.php");
include("./model/connect_vnpay.php");

include("./model/dangnhap.php");
include("./model/addcart.php");
include("./model/list_monan_home.php");
include("./model/bankking.php");

// session_destroy();
// die();

// print_r($_SESSION["cart"]);

if (isset($_GET["act"]) && $_GET["act"] != "") {
    include("./views/header/header_act.php");

} else {
    include("./views/header/header.php");
}

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
                    $userInfo = array(
                        "id_nguoidung" => $id_nguoidung,
                        "hoten" => $hoten,
                        "sodienthoai" => $sodienthoai,
                        "email" => $email,
                        "vaitro" => $vaitro
                    );

                    $_SESSION["user"] = $userInfo;
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

                $id_nguoidung = insert_tk($hoten, $sodienthoai, $email, $pass, $vaitro = 0);
                $userInfo = array(
                    "id_nguoidung" => $id_nguoidung,
                    "hoten" => $hoten,
                    "sodienthoai" => $sodienthoai,
                    "email" => $email,
                );

                $_SESSION["user"] = $userInfo;
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
            include("./views/main/cuahang.php");
            break;

        // Giỏ hàng
        case "themgiohang":
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
                echo "<script>alert('Đã thêm thành công');</script>";

            }
            include("./views/main/giohang.php");
            break;


        case "xoamonan":
            if (isset($_SESSION["cart"]) && isset($_GET["id_monan"])) {
                $id_monan = $_GET["id_monan"];
            }
            $updatedCart = [];

            foreach ($_SESSION["cart"] as $item) {
                if ($item["id_monan"] != $id_monan) {
                    $updatedCart[] = $item;
                }
            }

            // Cập nhật phiên giỏ hàng với danh sách đã lọc
            $_SESSION["cart"] = $updatedCart;
            include("./views/main/giohang.php");
            break;


        case "thanhtoan":
            include("./views/main/thanhtoan.php");
            break;


        case "dathang":
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ngaymua = date("Y-m-d H:i:s");

            if (isset($_SESSION["user"])) {
                extract($_SESSION["user"]);
                $id = $id_nguoidung;
                $ma_donhang = rand(0, 9999);
                $_SESSION["madonhang"] = $ma_donhang;

                insert_cart($id, $ma_donhang, $ngaymua);
                foreach ($_SESSION["cart"] as $key => $value) {
                    extract($value);
                    insert_cart_detail($ma_donhang, $id_monan, $soluongmua);
                }


                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $select_pay = $_POST['phuongthucthanhtoan'];

                    // Thanh tóan bằng vnpay
                    if ($select_pay == "vnp") {
                        $vnp_TxnRef = $ma_donhang; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY

                        $i = 0;
                        $tongtien = 0;
                        foreach ($_SESSION["cart"] as $key => $value) {
                            extract($value);
                            $thanhtien = $value['soluongmua'] * $value['gia_monan'];
                            $tongtien = $tongtien + $thanhtien;
                            $i++;
                        }

                        $vnp_OrderInfo = "Thanh tóa đơn hàng đặt tại NTN Food";
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
                            'code' => '00'
                            ,
                            'message' => 'success'
                            ,
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
                // echo "<script>alert('Đã thêm thành công');</script>";
            }

            // unset($_SESSION["cart"]);


            // include("./views/main/cuahang.php");
            break;


        // 
        case "camon":
            if (isset($_GET["vnp_Amount"])) {
                $vnp_Amount = $_GET["vnp_Amount"];
                $vnp_BankCode = $_GET["vnp_BankCode"];
                $vnp_BankTranNo = $_GET["vnp_BankTranNo"];
                $vnp_CardType = $_GET["vnp_CardType"];
                $vnp_OrderInfo = $_GET["vnp_OrderInfo"];
                $vnp_PayDate = $_GET["vnp_PayDate"];
                $vnp_TmnCode = $_GET["vnp_TmnCode"];
                $vnp_TransactionNo = $_GET["vnp_TransactionNo"];
                $ma_donhang = $_SESSION["madonhang"];

                insert_vnpay($vnp_Amount, $ma_donhang, $vnp_BankCode, $vnp_BankTranNo, $vnp_CardType, $vnp_OrderInfo, $vnp_PayDate, $vnp_TmnCode, $vnp_TransactionNo);
            }



            include("./views/main/camon.php");
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

?>