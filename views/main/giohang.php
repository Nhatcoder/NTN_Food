<?php
if (isset($_SESSION["cart"])) {
    ?>
    <div class="page-content bg-white">
        <!-- Banner  -->
        <div class="dz-bnr-inr style-1 text-center bg-parallax"
            style="background-image:url('views/assets/images/banner/bnr4.jpg'); background-size:cover; background-position:center;">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Giỏ hàng</h1>
                    <!-- Breadcrumb Row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb Row End -->
                </div>
            </div>
        </div>
        <!-- Banner End -->

        i
        <!-- Cart Section -->
        <section class="content-inner-1">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="title m-b15 m-lg-30">Có thể bạn cũng thích</h5>
                            <a href="javascript:void(0);" class="btn btn-primary panel-btn">Tìm kiếm</a>
                        </div>

                        <?php
                        // print_r($list_monan_same_cart);
                        foreach ($list_monan_same_cart as $key => $value) {
                            ?>
                            <div class="dz-shop-card style-1">
                                <div class="dz-media">
                                    <img src="uploads/monan/<?= $value["anh_monan"] ?>" alt="/">
                                </div>
                                <div class="dz-content">
                                    <div class="dz-head">
                                        <h6 class="dz-name mb-0">
                                            <svg class="m-r10" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="16" height="16" stroke="#0F8A65" />
                                                <circle cx="8.5" cy="8.5" r="5.5" fill="#0F8A65" />
                                            </svg>
                                            <a href="index.php?act=chitietsanpham&id_monan=<?= $value["id_monan"] ?>">
                                                <?= $value["ten_monan"] ?>
                                            </a>
                                        </h6>
                                        <!-- <div class="rate">
                                        <i class="fa-solid fa-star"></i> 4.5
                                    </div> -->
                                    </div>
                                    <div class="dz-body">
                                        <!-- <ul class="dz-meta">
                                        <li>By <span class="text-primary font-weight-500">Burger Farm</span></li>
                                        <li><i class="flaticon-scooter"></i> 30 min</li>
                                    </ul> -->
                                        <p class="mb-0"><span class="text-primary font-weight-500">
                                                <?= number_format($value["gia_monan"], 0, ",", ".") ?>VNĐ
                                            </span> Cho một món</p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="col-lg-4">
                        <aside class="side-bar sticky-top">
                            <div class="shop-filter style-1">
                                <div class="d-flex justify-content-between">
                                    <div class="widget-title">
                                        <h5 class="title m-b30">Giỏ hàng <span class="text-primary">(
                                                <?php
                                                if (isset($_SESSION["cart"])) {
                                                    echo count($_SESSION["cart"]);
                                                } else {
                                                    echo "0";
                                                }
                                                ?>)
                                            </span></h5>
                                    </div>
                                    <a href="javascript:void(0);" class="panel-close-btn"><i
                                            class="fa-solid fa-xmark"></i></a>
                                </div>

                                <?php
                                if (isset($_SESSION["cart"])) {
                                    foreach ($_SESSION["cart"] as $item) {
                                        extract($item);
                                        ?>
                                        <div class="cart-item style-1">
                                            <div class="dz-media">
                                                <img src="uploads/monan/<?= $anh_monan ?>" alt="hình ảnh thôi không có gì cả">
                                            </div>
                                            <div class="dz-content">
                                                <div class="dz-head">
                                                    <h6 class="title mb-0">
                                                        <?= $ten_monan ?>
                                                    </h6>
                                                    <a href="index.php?act=xoamonan&id_monan=<?= $id_monan ?>"><i
                                                            class="fa-solid fa-xmark text-danger"></i></a>
                                                </div>
                                                <div class="dz-body">
                                                    <div class="btn-quantity style-1">
                                                        <input id="demo_vertical2" type="text" value="<?= $soluongmua ?>"
                                                            name="demo_vertical2">
                                                        <span class="input-group-btn-vertical"><button
                                                                class="btn btn-default bootstrap-touchspin-up" type="button"><i
                                                                    class="ti-plus"></i></button><button
                                                                class="btn btn-default bootstrap-touchspin-down" type="button"><i
                                                                    class="ti-minus"></i></button>
                                                        </span>
                                                    </div>
                                                    <h5 class="price text-primary mb-0">
                                                        <?= number_format($gia_monan, 0, ",", ".") ?>VNĐ
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                                ?>
                                <div class="order-detail">
                                    <h6>Chi tiết hóa đơn</h6>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Tổng mục</td>
                                                <td class="price text-primary">
                                                    <?php
                                                    $i = 0;
                                                    $tongtien = 0;

                                                    foreach ($_SESSION['cart'] as $key => $value) {
                                                        $thanhtien = $value['soluongmua'] * $value['gia_monan'];
                                                        $tongtien = $tongtien + $thanhtien;
                                                        $i++;
                                                    }
                                                    echo number_format($tongtien, 0, ",", ".");
                                                    ?>VNĐ
                                                </td>
                                            </tr>
                                            <tr class="charges">
                                                <td>Phí vận chuyển</td>
                                                <td class="price text-primary">Free</td>
                                            </tr>
                                            <tr class="tax">
                                                <td>Thuế Chính phủ và các khoản phí khác</td>
                                                <td class="price text-primary">Free</td>
                                            </tr>
                                            <tr class="total">
                                                <td>
                                                    <h6>Thành tiền</h6>
                                                </td>
                                                <td class="price text-primary">
                                                    <?= number_format($tongtien, 0, ",", ".") . "VNĐ" ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                    if (isset($_SESSION["user"])) {
                                        ?>
                                        <a href="index.php?act=thanhtoan"
                                            class="btn btn-primary d-block text-center btn-md w-100 btn-hover-1"><span>Thanh
                                                toán ngay
                                                <i class="fa-solid fa-arrow-right"></i></span>
                                        </a>
                                    <?php } else { ?>
                                        <a data-bs-toggle="offcanvas"
                                            href="#offcanvasLogin" role="button" aria-controls="offcanvasLogin" class="btn btn-primary d-block text-center btn-md w-100
                                            btn-hover-1"><span>Thanh
                                                toán ngay
                                                <i class="fa-solid fa-arrow-right"></i></span>
                                        </a>
                                    <?php } ?>

                                </div>
                            </div>
                        </aside>
                    </div>
                </div>


            </div>
        </section>
        <!-- cart Section -->

    </div>

<?php } else {
    ?>
    <div class="page-content bg-white">
        <div class="content-inner overflow-hidden pt-4 error-page" id="app-banner"
            style="background-image:url('views/assets/images/background/bg1.jpg'); background-repeat:no-repeat;    background-size: cover;">
            <div class="container">
                <div class="inner-content text-center">
                    <h1 class="error-head">Giỏ hàng trống</h1>
                    <h3 class="error-para">Bạn cần thêm một vài món</h3>
                    <p>Chúng tôi rất vui khi được phục vụ khách hàng, phục vụ khách hàng là niềm tự hào</p>
                    <a href="index.php" class="btn btn-md btn-primary btn-hover-1"><span>Trở về Trang Chủ</span></a>
                </div>
            </div>
        </div>
    </div>
    <?php
} ?>