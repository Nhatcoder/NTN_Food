<!--Footer-->
<footer class="site-footer  style-1 bg-dark" id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="dz-form-card bg-primary">
                        <div class="section-head">
                            <h4 class="title m-0">Liên hệ</h4>
                            <p class="m-t10">Hãy liên hệ với chúng tôi để được tư vấn và nhận những dịch vụ tốt nhất từ
                                chúng tôi.
                            </p>
                        </div>
                        <form class="form_lienhe" method="POST" >
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="input-line">
                                        <input name="ho_ten" type="text" class="form-control ho_ten" placeholder="Nhập họ và tên">
                                    </div>
                                    <p class="text-danger err_ho_ten_lienhe"></p>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="input-line">
                                        <input name="email" type="text" class="form-control email_lienhe" placeholder="Nhập email của bạn">
                                    </div>
                                    <p class="text-danger err_email_lienhe"></p>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="input-line">
                                        <input name="sodienthoai" type="number" class="form-control sdt_lienhe" placeholder="Nhập số điện thoại">
                                    </div>
                                    <p class="text-danger err_sdt_lienhe"></p>
                                </div>
                                <div class="col-sm-12 ">
                                    <div class="input-line">
                                        <textarea name="noidung" class="form-control noidung_lienhe" placeholder="Nội dung"></textarea>
                                    </div>
                                    <p class="text-danger err_noidung_lienhe"></p>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" name="submit" value="submit" id="btn_lienhe" class="btn btn-md btn-white btn-hover-1"><span>Gửi lời nhắn</span></button>
                                </div>
                            </div>
                        </form>


                        <script>
                            var btn_lienhe = document.querySelector("#btn_lienhe");
                            var ho_ten_lienhe = document.querySelector(".ho_ten");
                            var email_lienhe = document.querySelector(".email_lienhe");
                            var sdt_lienhe = document.querySelector(".sdt_lienhe");
                            var noidung_lienhe = document.querySelector(".noidung_lienhe");

                            var err_ho_ten_lienhe = document.querySelector(".err_ho_ten_lienhe");
                            var err_email_lienhe = document.querySelector(".err_email_lienhe");
                            var err_sdt_lienhe = document.querySelector(".err_sdt_lienhe");
                            var err_noidung_lienhe = document.querySelector(".err_noidung_lienhe");


                            btn_lienhe.addEventListener("click", function(e) {
                                e.preventDefault();
                                err_ho_ten_lienhe.innerHTML = "";
                                err_email_lienhe.innerHTML = "";
                                err_sdt_lienhe.innerHTML = "";
                                err_noidung_lienhe.innerHTML = "";

                                if (ho_ten_lienhe.value.trim() === "") {
                                    err_ho_ten_lienhe.innerHTML = "Bạn chưa nhập trường này!";
                                }

                                if (sdt_lienhe.value.trim() === "") {
                                    err_sdt_lienhe.innerHTML = "Bạn chưa nhập trường này!";
                                } else {
                                    var vietnamPhoneRegex = /^(0[2-9][0-9]{8}|1[2-9][0-9]{8})$/;

                                    if (!vietnamPhoneRegex.test(sdt_lienhe.value)) {
                                        err_sdt_lienhe.innerHTML = "Số điện thoại không hợp lệ";
                                    }
                                }

                                if (email_lienhe.value.trim() === "") {
                                    err_email_lienhe.innerHTML = "Bạn chưa nhập trường này!";
                                } else {
                                    var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                                    if (!emailFormat.test(email_lienhe.value)) {
                                        err_email_lienhe.innerHTML = "Email không hợp lệ";
                                    }
                                }

                                if (noidung_lienhe.value.trim() === "") {
                                    err_noidung_lienhe.innerHTML = "Bạn chưa nhập trường này!";
                                }


                                if (!err_ho_ten_lienhe.innerHTML && !err_sdt_lienhe.innerHTML && !err_email_lienhe.innerHTML && !err_noidung_lienhe.innerHTML) {
                                    alert("Chúng tôi sẽ sớm liên hệ với bạn và giải đáp mọi thắc mắc. Xin cảm ơn !");
                                    var data = new FormData();
                                    data.append("ho_ten", ho_ten_lienhe.value);
                                    data.append("email", email_lienhe.value);
                                    data.append("sodienthoai", sdt_lienhe.value);
                                    data.append("noidung", noidung_lienhe.value);

                                    // Thực hiện yêu cầu POST bằng Fetch API
                                    fetch("index.php?act=lienhe", {
                                            method: "POST",
                                            body: data
                                        })
                                        .then(response => {
                                            document.querySelector(".form_lienhe").reset();
                                            // window.location.href = "index.php";
                                        })
                                        .catch(error => console.error("Lỗi:", error));
                                }
                            });
                        </script>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="widget widget_getintuch">
                        <h5 class="footer-title">Liên Hệ</h5>
                        <ul>
                            <li>
                                <i class="flaticon-placeholder"></i>
                                <p>Tòa nhà NTN,khu đô thị Đình Thôn, phường Mỹ Đình, quận Nam Từ Liêm, Hà Nội</p>
                            </li>
                            <li>
                                <i class="flaticon-telephone"></i>
                                <p>0362978755<br>
                                    0987654321</p>
                            </li>
                            <li>
                                <i class="flaticon-email-1"></i>
                                <p>NTNfood@gmail.com<br>
                                    trumcodedao@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">LIÊN KẾT CỦA CHÚNG TÔI</h5>
                        <ul>
                            <li><a href="index.php"><span>Trang chủ</span></a></li>
                            <li><a href="index.php?act=lienhe"><span>Liên hệ với chúng tôi</span></a></li>
                            <li><a href="index.php?act=dichvu"><span>Dịch vụ</span></a></li>
                            <li><a href="#"><span>Nhóm</span></a></li>
                            <li><a href="index.php?act=tintuc"><span>Tin tức</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">TRUNG TÂM TRỢ GIÚP</h5>
                        <ul>
                            <li><a href="index.php?act=cauhoithuonggap"><span>FAQ</span></a></li>
                            <li><a href="index.php?act=cuahang"><span>Cửa hàng</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Part -->
    <div class="container">
        <div class="footer-bottom">
            <div class="row">
                <div class="col-xl-6 col-md-6 text-md-start">
                    <p>Sản phẩm của công ty NTN Food</p>
                </div>

            </div>
        </div>
    </div>
    <img class="bg1 dz-move" src="views/assets/images/background/pic5.png" alt="/">
    <img class="bg2 dz-move" src="views/assets/images/background/pic6.png" alt="/">
</footer>

<!-- Footer -->
<div class="scroltop-progress scroltop-primary">
    <svg width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- JAVASCRIPT FILES ========================================= -->
<script src="views/assets/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="views/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="views/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELEECT -->
<script src="views/assets/vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="views/assets/vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="views/assets/vendor/wow/wow.js"></script><!-- WOW JS -->
<script src="views/assets/vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="views/assets/vendor/swiper/swiper-bundle.min.js"></script><!-- OWL-CAROUSEL -->
<script src="views/assets/vendor/popper/popper.js"></script><!-- Popper -->
<script src="views/assets/vendor/tempus-dominus/js/tempus-dominus.min.js"></script><!-- Tempus Dominus -->
<script src="views/assets/vendor/tilt/tilt.jquery.min.js"></script><!-- TILT -->
<script src="views/assets/js/dz.carousel.min.js"></script><!-- OWL-CAROUSEL -->
<script src="views/assets/js/dz.ajax.js"></script><!-- AJAX -->
<script src="views/assets/js/custom.min.js"></script><!-- CUSTOM JS -->
<script src="views/assets/js/dznav-init.js"></script><!-- DZNAV INIT -->
<script src="views/assets/vendor/rangeslider/rangeslider.js"></script>
<!-- <script src="views/assets/vendor/switcher/switcher.js"></script> -->
<script src="views/assets/app.js"></script>


</body>

</html>