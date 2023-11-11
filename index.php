<?php
session_start();
include("./model/pdo.php");
include("./model/dangnhap.php");
include("./views/header/header.php");

// print_r($_SESSION["user"]);
if (isset($_GET["act"]) && $_GET["act"] != "") {
    $act = $_GET["act"];

    switch ($act) {
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

    }



}


include("./views/main/main.php");
include("./views/footer/footer.php");

?>