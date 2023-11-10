<?php
session_start();

// Đặt lại tất cả các giá trị session thành giá trị rỗng hoặc null
$_SESSION = array();

// Nếu bạn muốn hủy cả cookie session, hãy xóa cookie session hiện tại
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
}

// Hủy phiên
session_destroy();

// Chuyển hướng người dùng đến trang đăng nhập hoặc trang chính
header("Location: index.php"); // Thay "login.php" bằng đường dẫn đến trang đăng nhập của bạn
exit();
?>
