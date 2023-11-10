<?php
include '../model/dangnhap.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new dangnhap();
    }

    public function processLogin($phone, $password) {
        $user = $this->model->checkLogin($phone, $password);
        if ($user) {
            $_SESSION['user'] = $user;
            return true;
        } else {
            return false;
        }
    }

    public function processRegistration($name, $phone, $password) {
        if ($this->model->checkPhoneNumberExists($phone)) {
            return "Số điện thoại này đã được đăng ký tài khoản.";
        } else {
            if ($this->model->registerUser($name, $phone, $password)) {
                return "Đăng ký thành công";
            } else {
                return "Đã có lỗi xảy ra khi đăng ký.";
            }
        }
    }
}
?>
