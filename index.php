<?php
session_start();
include("./model/pdo.php");
include("./model/dangnhap.php");
include("./views/header/header.php");
if (isset($_GET["act"]) && $_GET["act"] != "") {
    $act = $_GET["act"];

    switch ($act) {
        case "dangnhap":
            if (isset($_POST["submit"])) {
                $sodienthoai = $_POST["sodienthoai"];
                $pass = md5($_POST["pass"]);

                $result = check_tk_one($sodienthoai, $pass);
                extract($result);

                // foreach ($result as $key => $value) {
                //     extract($value);
                // }
                if ($result) {
                    $userInfo = array(
                        "hoten" => $hoten,
                        "sodienthoai" => $sodienthoai,
                        "email" => $email,
                    );

                    $_SESSION["user"] = $userInfo;
                    header("Location: index.php");
                    echo '<script>alert("Thành công")</script>';
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

                $result = insert_tk($hoten, $sodienthoai, $email, $pass, 0);
                if ($result) {
                    // Nếu thêm thành công, tạo mảng thông tin tài khoản và lưu vào session
                    $userInfo = array(
                        "hoten" => $hoten,
                        "sodienthoai" => $sodienthoai,
                        "email" => $email,
                    );

                    $_SESSION["user"] = $userInfo;
                    echo '<script>alert("Thành công")</script>';
                } else {
                    echo '<script>alert("Lỗi")</script>';
                }
            }
            break;

        case "dangxuat":
            if (isset($_SESSION["user"])) {
                unset($_SESSION["user"]);

            }
            break;

    }



}


include("./views/main/main.php");
include("./views/footer/footer.php");

?>