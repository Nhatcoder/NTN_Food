<?php
session_start();
include("./model/pdo.php");
include("./model/dangnhap.php");
include("./model/list_monan_home.php");


if (isset($_GET["act"]) && $_GET["act"] != "") {
    include("./views/header/header_act.php");

} else {
    include("./views/header/header.php");
}

$list_monan_special = list_monan_special();
$list_menu_today = list_menu_today();
$list_menu_home = list_menu_home();

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

                insert_tk($hoten, $sodienthoai, $email, $pass, $vaitro = 0);
                $userInfo = array(
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