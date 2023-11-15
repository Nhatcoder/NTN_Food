<?php
session_start();
include("./model/pdo.php");
include("./model/dangnhap.php");
include("./model/addcart.php");
include("./model/list_monan_home.php");

include("./model/giohang.php");
include("./views/header/header.php");




// session_destroy();
// die();

// print_r($_SESSION["user"]);

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
                        "id_nguoidung"=>$id_nd,
                        "vaitro" => $vaitro
                    );

                    $_SESSION["user"] = $userInfo;
                    echo '<script>alert("Thành công")</script>';
                    echo '<script>window.location.href = "index.php";</script>';

                } else {
                    echo 1234;
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
        case "themgiohang":
            
            $id_monan = $_GET['id'];    
            
          
               
                themgiohang($id_monan,$id_nguoidung );
                
               
            
            include('./index.php');
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
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ngaymua = date("Y-m-d H:i:s");

            if (isset($_SESSION["user"])) {
                extract($_SESSION["user"]);
                $id = $id_nguoidung;
                $ma_donhang = rand(0, 9999);

                insert_cart($id, $ma_donhang, $ngaymua);

                foreach ($_SESSION["cart"] as $key => $value) {
                    extract($value);
                    insert_cart_detail($ma_donhang, $id_monan, $soluongmua);
                }


                echo "<script>alert('Đã thêm thành công');</script>";

            }

            unset($_SESSION["cart"]);


            include("./views/main/cuahang.php");
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