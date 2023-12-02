<?php
include "trangthaidonhang/title.php"
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
                <h4>Trạng thái đơn hàng</h4>

                <table>
                    <tbody>
                        <tr>
                            <th>STT</th>
                            <th>Mã đơn hàng</th>
                            <th>Họ tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Ngày mua hàng</th>
                            <th>phương thức thanh toán</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                        <?php
                        $rowCount = 0;
                        foreach ($loaddonhangtk_page as $key => $value) {
                            extract($value);
                            $rowCount++;

                        ?>
                            <?php
                            $startIndex = ($page - 1) * 6;
                            $continuousIndex = $startIndex + $key + 1;
                            ?>
                            <tr>
                                <td>
                                    <?= $key + 1 ?>
                                </td>
                                <td>
                                    <?= $ma_donhang ?>
                                </td>
                                <td>
                                    <?= $hoten ?>
                                </td>
                                <td>
                                    <?= $diachi ?>
                                </td>
                                <td>
                                    <?= $sodienthoai ?>
                                </td>
                                <td>
                                    <?= $ngaymua ?>
                                </td>
                                <td>
                                    <?= $loai_thanhtoan ?>
                                </td>
                                <?php
                                if ($id_trangthai == 4) {
                                ?>
                                    <td style="color: #66da98;">
                                        <?= $tentrangthai ?>
                                    </td>
                                <?php
                                }
                                ?>

                                <td>

                                    <a href="index.php?act=chitietdonhang&iddh=<?= $ma_donhang ?>">
                                        <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Chi tiết"><i class="fa-solid fa-list"></i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php if ($rowCount == 0) {
                    echo "<h3>Danh sách trống</h3>";
                } ?>
                <!-- Phân trang -->
                <?php
                $count = count($loaddonhangtk);
                $trang = ceil($count / 10);

                if ($count >= 10) {
                    if (isset($_GET['trang'])) {
                        $page = intval($_GET['trang']);
                    } else {
                        $page = 1;
                    }

                    $numToShow = 2; // Só hiển thị trang có

                    $start = max(1, $page - $numToShow);
                    $end = min($trang, $page + $numToShow);

                ?>
                    <nav class="text-center" aria-label="...">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="index.php?act=giaothanhcong&trang=<?= max(1, $page - 1) ?>" class="page-link">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>

                            <?php
                            if ($start > 1) {
                            ?>
                                <li class="page-item"><a class="page-link" href="index.php?act=giaothanhcong&trang=1">1</a></li>
                                <?php
                                if ($start > 2) {
                                ?>
                                    <li class="page-item disabled"><span class="page-link">...</span></li>
                                <?php
                                }
                            }

                            //Hiển thị bắt đầu và start
                            for ($i = $start; $i <= $end; $i++) {
                                $activeClass = ($i == $page) ? 'active' : '';
                                ?>
                                <li class="page-item <?= $activeClass ?>"><a class="page-link" href="index.php?act=giaothanhcong&trang=<?= $i ?>"><?= $i ?></a></li>
                                <?php
                            }

                            if ($end < $trang) {
                                if ($end < $trang - 1) {
                                ?>
                                    <li class="page-item disabled"><span class="page-link">...</span></li>
                                <?php
                                }
                                ?>
                                <li class="page-item"><a class="page-link" href="index.php?act=giaothanhcong&trang=<?= $trang ?>"><?= $trang ?></a></li>
                            <?php
                            }
                            ?>

                            <li class="page-item">
                                <a href="index.php?act=giaothanhcong&trang=<?= min($trang, $page + 1) ?>" class="page-link">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                <?php } ?>
            </div>

        </div>
    </div>
</div>