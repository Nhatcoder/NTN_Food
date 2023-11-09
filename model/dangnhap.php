<?php
class dangnhap {
    private $conn;

    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "duan1";

        $this->conn = new mysqli($servername, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function checkLogin($phone, $password) {
        $sql = "SELECT * FROM tbl_taikhoan WHERE sodienthoai='$phone' AND matkhau='$password'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return false;
        }
    }

    public function checkPhoneNumberExists($phone) {
        $sql = "SELECT * FROM tbl_taikhoan WHERE sodienthoai='$phone'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function registerUser($name, $phone, $password) {
        $sql = "INSERT INTO tbl_taikhoan (hoten, sodienthoai, matkhau, vaitro) VALUES ('$name', '$phone', '$password', 0)";
        return $this->conn->query($sql);
    }
}
?>
