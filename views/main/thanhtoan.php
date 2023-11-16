<div class="page-content bg-white">
    <!-- Banner  -->
    <div class="dz-bnr-inr style-1 text-center bg-parallax"
        style="background-image:url('assets/images/banner/bnr3.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Thanh toán</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Cart Section -->
    <section class="content-inner">
        <div class="container">
            <form class="shop-form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="widget">
                            <h4 class="widget-title">Địa chỉ thanh toán & giao hàng</h4>
                            <div class="row">
                                <div class="form-group col-md-12 m-b20">
                                    <input name="dzFirstName" required type="text" class="form-control"
                                        placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group m-b20">
                                <input name="dzOther[CompanyType]" required type="text" class="form-control"
                                    placeholder="Company Name">
                            </div>
                            <div class="form-group m-b20">
                                <input name="dzOther[Address]" required type="text" class="form-control"
                                    placeholder="Address">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 m-b20">
                                    <input name="dzOther[Other]" required type="text" class="form-control"
                                        placeholder="Apartment, suite, unit etc.">
                                </div>
                                <div class="form-group col-md-12 m-b20">
                                    <input name="dzOther[Town/City]" required type="text" class="form-control"
                                        placeholder="Town / City">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 m-b20">
                                    <input name="dzOther[State/County]" required type="text" class="form-control"
                                        placeholder="State / County">
                                </div>
                                <div class="form-group col-md-12 m-b20">
                                    <input name="Postcode/Zip" required type="text" class="form-control"
                                        placeholder="Postcode / Zip">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 m-b20">
                                    <input name="dzEmail" required type="email" class="form-control"
                                        placeholder="Email">
                                </div>
                                <div class="form-group col-md-12 m-b20">
                                    <input name="dzPhoneNumber" required type="text" class="form-control dz-number"
                                        placeholder="Phone">
                                </div>
                            </div>
                            <button class="btn btn-gray btnhover mb-3" type="button" data-bs-toggle="collapse"
                                data-bs-target="#create-an-account">Lưu địa chỉ
                                <!-- <i class="fa fa-angle-down m-l10"></i> -->
                            </button>
                            <!-- <div id="create-an-account" class="collapse">
                                <p>Create an account by entering the information below. If you are a returning customer
                                    please login at the top of the page.</p>
                                <div class="form-group">
                                    <input name="Password" type="password" class="form-control" placeholder="Password">
                                </div>
                            </div> -->
                        </div>
                    </div>

                </div>
            </form>
            <div class="dz-divider bg-gray-dark icon-center my-5">
                <i class="fa fa-circle bg-white text-primary"></i>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="widget">
                        <h4 class="widget-title">Đơn hàng của bạn</h4>
                        <table class="table-bordered check-tbl">
                            <thead class="text-center">
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th>Tên món ăn</th>
                                    <th>Tổng cộng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($_SESSION["cart"] as $key => $value) {
                                    extract($value);
                                    ?>
                                    <tr>
                                        <td class="product-item-img"><img src="uploads/monan/<?= $anh_monan ?>"
                                                alt="Ảnh món ăn"></td>
                                        <td class="product-item-name">
                                            <?= $ten_monan ?>
                                        </td>
                                        <td class="product-price">
                                            <?= number_format($gia_monan, 0, ",", ".") ?> VNĐ
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="index.php?act=dathang" class="shop-form widget" method="post">
                        <h4 class="widget-title">Tổng số đơn hàng</h4>
                        <table class="table-bordered check-tbl mb-4">
                            <tbody>
                                <tr>
                                    <td>Tổng phụ đơn hàng</td>
                                    <td class="product-price">
                                        <?php
                                        $i = 0;
                                        $tongtien = 0;

                                        foreach ($_SESSION['cart'] as $key => $value) {
                                            $thanhtien = $value['soluongmua'] * $value['gia_monan'];
                                            $tongtien = $tongtien + $thanhtien;
                                            $i++;
                                        }
                                        echo number_format($tongtien, 0, ",", ".");
                                        ?> VNĐ
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vận chuyển</td>
                                    <td>Miễn phí vận chuyển</td>
                                </tr>
                                <!-- <tr>
                                    <td>Coupon</td>
                                    <td class="product-price">Free</td>
                                </tr> -->
                                <tr>
                                    <td>Tổng cộng</td>
                                    <td class="product-price-total">
                                        <?php
                                        $i = 0;
                                        $tongtien = 0;

                                        foreach ($_SESSION['cart'] as $key => $value) {
                                            $thanhtien = $value['soluongmua'] * $value['gia_monan'];
                                            $tongtien = $tongtien + $thanhtien;
                                            $i++;
                                        }
                                        echo number_format($tongtien, 0, ",", ".");
                                        ?> VNĐ
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h4 class="widget-title">Phương thức thanh toán</h4>
                        <!-- <div class="form-group m-b20">
                            <input type="text" class="form-control" placeholder="Name on Card">
                        </div> -->
                        <div class="form-group m-b20">
                            <select class="form-select default-select" name="phuongthucthanhtoan">
                                <option value="Credit Card Type">Phương thức thanh toán</option>
                                <option value="nhanhangtrasau">Nhận hàng trả sau</option>
                                <option value="vnp">VNPay</option>
                                <option value="momo">Momo</option>
                                <option value="vcb">Vietcombank</option>
                            </select>
                        </div>
                        <!-- <div class="form-group m-b20">
                            <input name="dzOther[CreditCardNumber]" type="text" class="form-control"
                                placeholder="Credit Card Number">
                        </div>
                        <div class="form-group m-b20">
                            <input name="dzOther[CardVerificationNumber]" type="text" class="form-control"
                                placeholder="Card Verification Number">
                        </div> -->
                        <div class="form-group">
                            <input class="btn btn-gray btn-hover-2" type="submit" name="redirect" value="Đặt hàng ngay"
                                id="redirect">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- cart Section -->

</div>