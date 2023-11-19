<?php
include "trangthaidonhang/title.php"
    ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
                <h4>Chi tiết đơn hàng</h4>

                <table>
                    <tbody>
                        <tr>

                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Mã đơn hàng</th>
                            <th>Tên món ăn</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th>Phương thức thanh toán</th>
                            <th>Ngày mua</th>
                            <th>Trạng thái</th>


                        </tr>
                        <?php

                        foreach ($chitiet as $key => $chitiet) {
                            ?>
                            <tr>

                                <td>
                                    <?php echo $chitiet['hoten']; ?>
                                </td>
                                <td>
                                    <?php echo $chitiet['sodienthoai']; ?>
                                </td>
                                <td>
                                    <?php echo $chitiet['diachi']; ?>
                                </td>
                                <td>
                                    <?php echo $chitiet['ma_donhang']; ?>
                                </td>
                                <td>
                                    <?php echo $chitiet['ten_monan']; ?>
                                </td>
                                <td>
                                    <?php echo $chitiet['gia_monan']; ?>
                                </td>
                                <td>
                                    <?php echo $chitiet['soluongmua']; ?>
                                </td>
                                <td>
                                    <?php echo $chitiet['tong_tien']; ?>
                                </td>
                                <td>
                                    <?php echo $chitiet['loai_thanhtoan']; ?>
                                </td>
                                <td>
                                    <?php echo $chitiet['ngaymua']; ?>
                                </td>
                                <td>
                                    <?php echo $chitiet['tentrangthai']; ?>
                                </td>

                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>