<?php
// function insert_vnpay($ma_donhang, $vnp_Amount, $vnp_BankCode, $vnp_BankTranNo, $vnp_CardType, $vnp_OrderInfo, $vnp_PayDate, $vnp_TmnCode, $vnp_TransactionNo)
// {
//     $sql = "INSERT INTO tbl_vnpay (ma_donhang, tongtien, ma_ngan_hang, so_taikhoan, loaithe, noidung_donhang, ngaythanhtoan, tmncode, magiaodich) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
//     $params = [$ma_donhang, $vnp_Amount, $vnp_BankCode, $vnp_BankTranNo, $vnp_CardType, $vnp_OrderInfo, $vnp_PayDate, $vnp_TmnCode, $vnp_TransactionNo];

//     return pdo_execute($sql, $params);
// }

function insert_vnpay($tongtien, $ma_donhang, $vnp_BankCode, $vnp_BankTranNo, $vnp_CardType, $vnp_OrderInfo, $vnp_PayDate, $vnp_TmnCode, $vnp_TransactionNo)
{
    $sql = "INSERT INTO tbl_vnpay (vnp_amount, ma_donhang, vnp_bankcode, vnp_banktrano, vnp_cardtype, vnp_oderinfo, vnp_paydate, vnp_tmncode, vnp_transactionno) VALUES ('$tongtien','$ma_donhang','$vnp_BankCode','$vnp_BankTranNo','$vnp_CardType','$vnp_OrderInfo','$vnp_PayDate','$vnp_TmnCode','$vnp_TransactionNo')";
    return pdo_execute($sql);
}



?>