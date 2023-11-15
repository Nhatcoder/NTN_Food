<!-- Header -->
<header class="site-header mo-left header header-transparent transparent-white style-1">
    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">

                <!-- Website Logo -->
                <div class="logo-header mostion">
                    <a href="index.php" class="anim-logo"><img src="views/assets/images/logo3.png" alt="/"></a>
                </div>

                <!-- Nav Toggle Button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- EXTRA NAV -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <ul>
                            <li>
                                <a class="btn btn-white btn-square btn-shadow" data-bs-toggle="offcanvas"
                                    href="#offcanvasLogin" role="button" aria-controls="offcanvasLogin">
                                    <i class="flaticon-user"></i>
                                </a>
                            </li>
                            <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            ?>
                            <li>
<<<<<<< HEAD
                            <a href="./index.php?act=giohang&&sodienthoai=<?php echo $id_nd ?>"
                            class="btn btn-white btn-square btn-shadow cart-btn"><i class="flaticon-shopping-bag-1"></i>
                                    <span class="badge">6</span></a>
                               
                                
=======
                                <a href="index.php?act=themgiohang" class="btn btn-white btn-square btn-shadow cart-btn">
                                    <i class="flaticon-shopping-bag-1"></i>
                                </a>
>>>>>>> c45660f1844c3cafaf5601a1fc6fea22d00374fa
                            </li>
                            <?php } else { ?>


                                <?php } ?>
                        </ul>
                    </div>
                </div>
                <!-- EXTRA NAV -->

                <!-- Header Nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header">
                        <a href="index.html" class="anim-logo"><img src="views/assets/images/logo.png" alt="/"></a>
                    </div>
                    <ul class="nav navbar-nav navbar">
                        <li class="sub-menu-downs"><a href="index.php">Trang chủ</a>
                        </li>
                        <li class="has-mega-menu">
                            <a href="javascript:void(0);">Trang</a>
                            <ul class="mega-menu">
                                <li><a href="javascript:;">Trang</a>
                                    <ul>
                                        <li><a href="about-us.html">Về chúng tôi</a></li>
                                        <li><a href="faq.html">Câu hỏi thường gặp</a></li>
                                        <li><a href="team.html">Đội</a></li>
                                        <li><a href="team-detail.html">Chi tiết Đội</a></li>
                                        <li><a href="testimonial.html">Lời chứng thực</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;">Trang</a>
                                    <ul>
                                        <li><a href="services.html">Dịch vụ</a></li>
                                        <li><a href="service-detail.html">Chi tiết dịch vụ</a></li>
                                        <li><a href="error-404.html">Lỗi 404 </a></li>
                                        <li><a href="coming-soon.html">Sắp ra mắt</a></li>
                                        <li><a href="under-maintenance.html">Đang bảo trì</a></li>
                                    </ul>
                                </li>
                                <li><a href="index.php?act=thucdon">Thực đơn của chúng tôi</a>
                                    <ul>
                                        <li><a href="our-menu-1.html">Thực đơn nhà hàng</a></li>

                                    </ul>
                                </li>
                                <li class="header-adv p-0"><img src="views/assets/images/adv-media.jpg" alt="/">
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu-downs"><a href="index.php?act=cuahang">Cửa hàng</a>
                        </li>
                        <li class="has-mega-menus">
                            <a href="index.php?act=tintuc">Tin tức</a>
                        </li>
                        <li><a href="contact-us.html">Liên hệ chúng tôi</a></li>
                    </ul>
                    <div class="dz-social-icon">
                        <ul>
                            <li><a target="_blank" class="fab fa-facebook-f" href="https://www.facebook.com/"></a></li>
                            <li><a target="_blank" class="fab fa-twitter" href="https://twitter.com/"></a></li>
                            <li><a target="_blank" class="fab fa-linkedin-in" href="https://www.linkedin.com/"></a></li>
                            <li><a target="_blank" class="fab fa-instagram" href="https://www.instagram.com/"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Main Header End -->
</header>
<!-- Header -->