<?php
session_start();
include '../controller/dangnhap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new Controller();

    if (isset($_POST['dangnhap'])) {
        $phone = $_POST['dzPhoneNumber'];
        $password = $_POST['password'];
        if ($controller->processLogin($phone, $password)) {
            // Đăng nhập thành công, không chuyển hướng ngay lập tức
			
        } else {
            echo "Đăng nhập không thành công";
        }
    }

    if (isset($_POST['dangky'])) {
        $name = $_POST['dzName'];
        $phone = $_POST['dzPhoneNumber'];
        $password = $_POST['password'];
        $message = $controller->processRegistration($name, $phone, $password);
        echo $message;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from swigo.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 03:06:20 GMT -->
<head>
	
	<!-- Title -->
	<title>Restaurant Website Templates | Swigo - Empowering Your Food Business | DexignZone</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="keywords" content="restaurant, restaurant website templates, restaurant template, food, restro, hotel, bootstrap 5, bootstrap, html, frontend, swigo, responsive template, shop, cart, menu, taste, blog, service, cook, customers, website, hungry, shop cart, fast food, table booking, website templates for restaurants, food website templates">
	<meta name="description" content="Boost your food business with Swigo's restaurant website templates. Our professionally designed templates cater specifically to the needs of restaurants, offering visually stunning and functional designs. Choose from a variety of food website templates that are perfect for showcasing your menu, promoting your services, and attracting hungry customers. Partner with DexignZone to create an impressive online presence for your restaurant. Start driving more traffic and growing your business today.">
	<meta property="og:title" content="Swigo - Empowering Your Restaurant Website Templates | DexignZone">
	<meta property="og:description" content="Boost your food business with Swigo's restaurant website templates. Our professionally designed templates cater specifically to the needs of restaurants, offering visually stunning and functional designs. Choose from a variety of food website templates that are perfect for showcasing your menu, promoting your services, and attracting hungry customers. Partner with DexignZone to create an impressive online presence for your restaurant. Start driving more traffic and growing your business today.">
	<meta property="og:image" content="social-home.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    
	<!-- Stylesheet -->
	<link href="assets/vendor/animate/animate.css" rel="stylesheet">
    <link href="assets/vendor/magnific-popup/magnific-popup.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="assets/vendor/tempus-dominus/css/tempus-dominus.min.css" rel="stylesheet">
	
	<!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/vendor/rangeslider/rangeslider.css">
    <!-- <link rel="stylesheet" href="assets/vendor/switcher/switcher.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&amp;family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&amp;family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	
</head>
<body id="bg">
<div id="loading-area" class="loading-page-3">
	<img src="assets/images/loading.gif" alt="">
</div>
<div class="page-wraper">
	
	<!-- Header -->
	<header class="site-header mo-left header header-transparent transparent-white style-1">
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix ">
				<div class="container clearfix">
					
					<!-- Website Logo -->
					<div class="logo-header mostion">
						<a href="index.html" class="anim-logo"><img src="assets/images/logo.png" alt="/"></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- EXTRA NAV -->
					<div class="extra-nav">
						<div class="extra-cell">
							<ul>
								<li>
									<a class="btn btn-white btn-square btn-shadow" data-bs-toggle="offcanvas" href="#offcanvasLogin" role="button" aria-controls="offcanvasLogin">
										<i class="flaticon-user"></i>
									</a>
								</li>
								<li>
									<button type="button" class="btn btn-white btn-square btn-shadow cart-btn">
										<i class="flaticon-shopping-bag-1"></i>
										<span class="badge">6</span>
									</button>
									<ul class="dropdown-menu cart-list">
										<li class="cart-item">
											<div class="media"> 
												<div class="media-left"> 
													<a href="product-detail.html"> 
														<img alt="/" class="media-object" src="assets/images/shop/pic2.jpg"> 
													</a> 
												</div> 
												<div class="media-body"> 
													<h6 class="dz-title"><a href="product-detail.html" class="media-heading">Double Burger</a></h6>
													<span class="dz-price">$28.00</span>
													<span class="item-close">&times;</span>
												</div> 
											</div>
										</li>
										<li class="cart-item">
											<div class="media"> 
												<div class="media-left"> 
													<a href="product-detail.html"> 
														<img alt="/" class="media-object" src="assets/images/shop/pic3.jpg"> 
													</a> 
												</div> 
												<div class="media-body"> 
													<h6 class="dz-title"><a href="product-detail.html" class="media-heading">Cheese Burger</a></h6>
													<span class="dz-price">$20.00</span>
													<span class="item-close">&times;</span>
												</div> 
											</div>
										</li>
										<li class="cart-item">
											<div class="media"> 
												<div class="media-left"> 
													<a href="product-detail.html"> 
														<img alt="/" class="media-object" src="assets/images/shop/pic4.jpg"> 
													</a> 
												</div> 
												<div class="media-body"> 
													<h6 class="dz-title"><a href="product-detail.html" class="media-heading">Burger</a></h6>
													<span class="dz-price">$15.00</span>
													<span class="item-close">&times;</span>
												</div> 
											</div>
										</li>
										<li class="cart-item text-center d-flex justify-content-between">
											<h6 class="text-primary mb-0">Total:</h6>
											<h6 class="text-primary mb-0">$63</h6>
										</li>
										<li class="text-center d-flex">
											<a href="shop-cart.html" class="btn btn-primary me-2 w-100 d-block btn-hover-1"><span>View Cart</span></a>
											<a href="our-menu-1.html" class="btn btn-outline-primary w-100 d-block btn-hover-1"><span>Menu</span></a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- EXTRA NAV -->
					
					<!-- Header Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<div class="logo-header">
							<a href="index.html" class="anim-logo"><img src="assets/images/logo.png" alt="/"></a>
						</div>
						<ul class="nav navbar-nav navbar">
							<li class="sub-menu-down"><a href="javascript:void(0);">Home</a>
								<ul class="sub-menu">
									<li><a href="index.html">Home 01</a></li>
									
								</ul>
							</li>
							<li class="has-mega-menu">
								<a href="javascript:void(0);">Pages</a>
								<ul class="mega-menu">
									<li><a href="javascript:;">Pages</a>
										<ul>
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="faq.html">FAQ</a></li>
											<li><a href="team.html">Team</a></li>
											<li><a href="team-detail.html">Team Detail</a></li>
											<li><a href="testimonial.html">Testimonial</a></li>
										</ul>
									</li>
									<li><a href="javascript:;">Pages</a>
										<ul>
											<li><a href="services.html">Services</a></li>
											<li><a href="service-detail.html">Service Detail</a></li>
											<li><a href="error-404.html">Error 404</a></li>
											<li><a href="coming-soon.html">Coming Soon</a></li>
											<li><a href="under-maintenance.html">Under Maintenance</a></li>
										</ul>
									</li>
									<li><a href="javascript:;">Our Menus</a>
										<ul>
											<li><a href="our-menu-1.html">Menu Style 1</a></li>
											<li><a href="our-menu-2.html">Menu Style 2</a></li>
											<li><a href="our-menu-3.html">Menu Style 3</a></li>
											<li><a href="our-menu-4.html">Menu Style 4</a></li>
											<li><a href="our-menu-5.html">Menu Style 5</a></li>
										</ul>
									</li>
									<li class="header-adv p-0"><img src="assets/images/adv-media.jpg" alt="/"></li>
								</ul>
							</li>
							<li class="sub-menu-down"><a href="javascript:void(0);">Shop</a>
								<ul class="sub-menu">
									<li><a href="shop-style-1.html">Shop Style 1</a></li>
									<li><a href="shop-style-2.html">Shop Style 2</a></li>
									<li><a href="shop-cart.html">Shop Cart</a></li>
									<li><a href="shop-wishlist.html">Shop Wishlist</a></li>
									<li><a href="shop-checkout.html">Shop Checkout</a></li>
									<li><a href="product-detail.html">Product Detail</a></li>
								</ul>
							</li>
							<li class="has-mega-menu">
								<a href="javascript:void(0);">Blogs</a>
								<ul class="mega-menu">
									<li> <a href="javascript:;">Blog Grid</a>
										<ul>
											<li><a href="blog-grid-2.html">Blog Grid 2</a></li>
											<li><a href="blog-grid-3.html">Blog Grid 3</a></li>
											<li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
											<li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Blog List</a>
										<ul>
											<li><a href="blog-list.html">Blog List</a></li>
											<li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
											<li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
											<li><a href="blog-both-sidebar.html">Blog Both Sidebar</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Blog Single</a>
										<ul>
											<li><a href="blog-standard.html">Blog Detail</a></li>
											<li><a href="blog-open-gutenberg.html">Blog Open Gutenberg</a></li>
											<li><a href="blog-detail-left-sidebar.html">Blog Details Left Sidebar</a></li>
											<li><a href="blog-detail-right-sidebar.html">Blog Details Right Sidebar</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Blog Masonry</a>
										<ul>
											<li><a href="blog-grid-3-masonary.html">Blog Grid 3 Masonry</a></li>
											<li><a href="blog-grid-4-masonary.html">Blog Grid 4 Masonry</a></li>
											<li><a href="blog-wide-list-sidebar.html">Blog Wide List Sidebar</a></li>
											<li><a href="blog-wide-grid-sidebar.html">Blog Wide Grid Sidebar</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="contact-us.html">Contact Us</a></li>
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



	
	<!-- dangnhap -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasLogin">
		<div class="offcanvas-body">
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			<?php if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
				extract($_SESSION['user']);
				?>
				<?php 
				if($vaitro==0 || $vaitro==1){ ?>
							<?php if($vaitro==0 ){ ?>
						<li class=""><a href="admin/index.php">Thông tin tài khoản</a></li>
						<li class=""><a href="logout.php">Đăng xuất</a></li>
						<?php } ?>


							<?php if($vaitro==1 ){ ?>
						<li class=""><a href="admin/index.php">Đăng nhập Admin</a></li>
						<li class=""><a href="logout.php">Đăng xuất</a></li>
						<?php } ?>
        	<?php } ?>
        	<?php } else { ?>
			<div class="offcanvas-form">
				<div class="login-head">
					<h4 class="title">Welcome Back</h4>
					<p>We’d love have you join our 100% remote network of creatord & freelance.</p>
					
					
				</div>
				<div class="form-group m-b15">
					<form action="" method="post">
					<label class="form-label">Số điện thoại*</label>
					<div class="input-group">
						<input name="dzPhoneNumber" required type="number" class="form-control" placeholder="Nhập số điện thoại">
					</div>
				</div>
				<div class="form-group m-b30">
					<label class="form-label">Mật khẩu*</label>
					<div class="input-group search-input">
						<input name="password" type="password" class="form-control dz-password" placeholder="Enter a Password">
						<div class="show-pass">
							<svg class="eye-close" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#8ea5c8"><path d="M11 17.188a8.71 8.71 0 0 1-1.576-.147.69.69 0 0 1-.579-.678.7.7 0 0 1 .817-.676 7.33 7.33 0 0 0 1.339.127c4.073 0 7.61-3.566 8.722-4.812a18.51 18.51 0 0 0-2.434-2.274.69.69 0 0 1 .335-1.226.69.69 0 0 1 .268.019c.087.024.169.064.24.12a18.79 18.79 0 0 1 3.036 2.939.69.69 0 0 1 0 .848c-.185.234-4.581 5.763-10.167 5.763zm7.361-13.549a.69.69 0 0 0-.972 0l-2.186 2.186a10.68 10.68 0 0 0-2.606-.864c-.527-.099-1.061-.149-1.597-.149-5.585 0-9.982 5.528-10.166 5.763a.69.69 0 0 0 0 .848c.897 1.09 1.915 2.075 3.033 2.936.529.415 1.083.796 1.66 1.142l-1.888 1.887c-.066.063-.118.139-.154.223a.69.69 0 0 0 .145.757.67.67 0 0 0 .226.15c.085.034.175.052.266.051a.69.69 0 0 0 .265-.056c.084-.036.16-.088.223-.154l13.75-13.75a.69.69 0 0 0 0-.972zm-13.65 9.636A18.51 18.51 0 0 1 2.278 11C3.39 9.754 6.927 6.187 11 6.187a7.31 7.31 0 0 1 1.348.127 8.92 8.92 0 0 1 1.814.55L12.895 8.13c-.661-.437-1.453-.632-2.241-.552a3.44 3.44 0 0 0-2.085.989c-.56.56-.91 1.297-.989 2.085a3.44 3.44 0 0 0 .552 2.241l-1.601 1.604a14.43 14.43 0 0 1-1.82-1.222zm4.432-1.392c-.134-.275-.204-.577-.206-.883a2.07 2.07 0 0 1 .6-1.456 2.12 2.12 0 0 1 2.338-.392l-2.731 2.731z"></path></svg>
							<svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#8ea5c8"><path d="M19.873 9.611c-.179-.244-4.436-5.985-9.873-5.985S.305 9.367.127 9.611a.66.66 0 0 0 0 .778c.178.244 4.436 5.985 9.873 5.985s9.694-5.74 9.873-5.984a.66.66 0 0 0 0-.778zM10 15.055c-4.005 0-7.474-3.81-8.501-5.055C2.525 8.753 5.986 4.945 10 4.945c4.005 0 7.473 3.809 8.501 5.055-1.025 1.247-4.487 5.054-8.501 5.054zm0-9.011A3.96 3.96 0 0 0 6.044 10 3.96 3.96 0 0 0 10 13.956 3.96 3.96 0 0 0 13.956 10 3.96 3.96 0 0 0 10 6.044zm0 6.593A2.64 2.64 0 0 1 7.363 10 2.64 2.64 0 0 1 10 7.363 2.64 2.64 0 0 1 12.637 10 2.64 2.64 0 0 1 10 12.637z"></path></svg>
						</div>
					</div>
				</div>
				<button name="dangnhap" id="dangnhap" value="submit" type="submit" class="btn btn-primary w-100 d-block btn-hover-2"><span>Đăng nhập</span></button>
				</form>
				<p class="text-center m-t30">Not registered?  
					<a class="register text-primary font-weight-500" data-bs-toggle="offcanvas" href="#offcanvasRegister" role="button" aria-controls="offcanvasRegister">Register here</a>
				</p>
				
			</div>
			<?php }   ?>
		</div>
		
	</div>
	
       


	<!-- dangky -->
	
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRegister">
		<div class="offcanvas-body">
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			<div class="offcanvas-form">
				<div class="login-head">
					<h4 class="title">Join Our Network</h4>
					<p>We’d love have you join our 100% remote network of creatord & freelance.</p>
					
				</div>
				<div class="form-group m-b15">
					<form action="" method="post">
					<label class="form-label">Name*</label>
					<div class="input-group">
						<input name="dzName" required type="text" class="form-control" placeholder="Enter Your Name">
					</div>
				</div>
				<div class="form-group m-b15">
					<label class="form-label">Số điện thoại*</label>
					<div class="input-group">
						<input name="dzPhoneNumber" required type="number" class="form-control" placeholder="Nhập số điện thoại">
					</div>
				</div>
				<div class="form-group m-b30">
					<label class="form-label">Mật khẩu*</label>
					<div class="input-group search-input">
						<input name="password" type="password" class="form-control dz-password" placeholder="Create a Password">
						<div class="show-pass">
							<svg class="eye-close" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#8ea5c8"><path d="M11 17.188a8.71 8.71 0 0 1-1.576-.147.69.69 0 0 1-.579-.678.7.7 0 0 1 .817-.676 7.33 7.33 0 0 0 1.339.127c4.073 0 7.61-3.566 8.722-4.812a18.51 18.51 0 0 0-2.434-2.274.69.69 0 0 1 .335-1.226.69.69 0 0 1 .268.019c.087.024.169.064.24.12a18.79 18.79 0 0 1 3.036 2.939.69.69 0 0 1 0 .848c-.185.234-4.581 5.763-10.167 5.763zm7.361-13.549a.69.69 0 0 0-.972 0l-2.186 2.186a10.68 10.68 0 0 0-2.606-.864c-.527-.099-1.061-.149-1.597-.149-5.585 0-9.982 5.528-10.166 5.763a.69.69 0 0 0 0 .848c.897 1.09 1.915 2.075 3.033 2.936.529.415 1.083.796 1.66 1.142l-1.888 1.887c-.066.063-.118.139-.154.223a.69.69 0 0 0 .145.757.67.67 0 0 0 .226.15c.085.034.175.052.266.051a.69.69 0 0 0 .265-.056c.084-.036.16-.088.223-.154l13.75-13.75a.69.69 0 0 0 0-.972zm-13.65 9.636A18.51 18.51 0 0 1 2.278 11C3.39 9.754 6.927 6.187 11 6.187a7.31 7.31 0 0 1 1.348.127 8.92 8.92 0 0 1 1.814.55L12.895 8.13c-.661-.437-1.453-.632-2.241-.552a3.44 3.44 0 0 0-2.085.989c-.56.56-.91 1.297-.989 2.085a3.44 3.44 0 0 0 .552 2.241l-1.601 1.604a14.43 14.43 0 0 1-1.82-1.222zm4.432-1.392c-.134-.275-.204-.577-.206-.883a2.07 2.07 0 0 1 .6-1.456 2.12 2.12 0 0 1 2.338-.392l-2.731 2.731z"></path></svg>
							<svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#8ea5c8"><path d="M19.873 9.611c-.179-.244-4.436-5.985-9.873-5.985S.305 9.367.127 9.611a.66.66 0 0 0 0 .778c.178.244 4.436 5.985 9.873 5.985s9.694-5.74 9.873-5.984a.66.66 0 0 0 0-.778zM10 15.055c-4.005 0-7.474-3.81-8.501-5.055C2.525 8.753 5.986 4.945 10 4.945c4.005 0 7.473 3.809 8.501 5.055-1.025 1.247-4.487 5.054-8.501 5.054zm0-9.011A3.96 3.96 0 0 0 6.044 10 3.96 3.96 0 0 0 10 13.956 3.96 3.96 0 0 0 13.956 10 3.96 3.96 0 0 0 10 6.044zm0 6.593A2.64 2.64 0 0 1 7.363 10 2.64 2.64 0 0 1 10 7.363 2.64 2.64 0 0 1 12.637 10 2.64 2.64 0 0 1 10 12.637z"></path></svg>
						</div>
					</div>
				</div>
				<button name="dangky" id="dangky" value="submit" type="submit" class="btn btn-primary w-100 d-block btn-hover-2">
					<span>Đăng ký</span>
				</button>
				</form>
				<p class="text-center m-t30">Already have an account?
					<a class="text-primary font-weight-500" data-bs-toggle="offcanvas" href="#offcanvasLogin" role="button" aria-controls="offcanvasLogin" >Login</a>
				</p>
			</div>
		</div>
	</div>
	<!-- Offcanvas Form End -->
	
	<div class="page-content bg-white">
		<!-- Banner -->
		<div class="main-bnr-one">
			<div class="slider-pagination">
				<div class="main-button-prev"><i class="icon-arrow-up"></i></div>
				<div class="main-slider-pagination"></div>
				<div class="main-button-next"><i class="icon-arrow-down"></i></div>
			</div>
			<div class="main-slider-1 swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="banner-inner">
							<div class="container">
								<div class="row align-items-center">
									<div class="col-xl-7 col-lg-7 col-md-7">
										<div class="banner-content">
											<span class="sub-title wow fadeInUp" data-wow-delay="0.2s">High Quality Test Station </span>
											<h1 class="title  wow fadeInUp" data-wow-delay="0.4s">Choosing The<br> Best <span class="text-primary">Quality Food</span></h1>
											<p class="wow fadeInUp" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<div class="banner-btn d-flex align-items-center wow fadeInUp" data-wow-delay="0.8s">
												<a href="contact-us.html" class="btn btn-primary btn-md shadow-primary m-r30 btn-hover-1"><span>Book a Table</span></a>
												<a href="about-us.html" class="btn btn-outline-primary btn-md shadow-primary btn-hover-1"><span>View More</span></a>
											</div>
										</div>
									</div>
									<div class="col-xl-5 col-lg-5 col-md-5">
										<div class="banner-media wow fadeInRight" data-wow-delay="1s">
											<img src="assets/images/main-slider/slider1/pic1.png" alt="/">
										</div>
									</div>
								</div>
							</div>
							<img src="assets/images/main-slider/slider1/img3.png" class="img1" alt="/">
							<img src="assets/images/main-slider/slider1/img1.png" class="img2" alt="/">
							<img src="assets/images/main-slider/slider1/img2.png" class="img3" alt="/">
						</div>
					</div>
					<div class="swiper-slide">
						<div class="banner-inner">
							<div class="container">
								<div class="row align-items-center">
									<div class="col-xl-7 col-lg-7 col-md-7">
										<div class="banner-content">
											<span class="sub-title wow fadeInUp" data-wow-delay="0.2s">The Best Food Stations</span>
											<h1 class="title wow fadeInUp" data-wow-delay="0.4s">Where Food <br> Meets<span class="text-primary"> Best Passion</span></h1>
											<p class="wow fadeInUp" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<div class="banner-btn d-flex align-items-center wow fadeInUp" data-wow-delay="0.8s">
												<a href="contact-us.html" class="btn btn-primary btn-md shadow-primary m-r30 btn-hover-1"><span>Book a Table</span></a>
												<a href="about-us.html" class="btn btn-outline-primary btn-md shadow-primary btn-hover-1"><span>View More</span></a>
											</div>
										</div>
									</div>
									<div class="col-xl-5 col-lg-5 col-md-5">
										<div class="banner-media wow fadeInRight" data-wow-delay="1s">
											<img src="assets/images/main-slider/slider1/pic1.png" alt="/">
										</div>
									</div>
								</div>
							</div>
							<img src="assets/images/main-slider/slider1/img3.png" class="img1" alt="/">
							<img src="assets/images/main-slider/slider1/img1.png" class="img2" alt="/">
							<img src="assets/images/main-slider/slider1/img2.png" class="img3" alt="/">
						</div>
					</div>
					<div class="swiper-slide">
						<div class="banner-inner">
							<div class="container">
								<div class="row align-items-center">
									<div class="col-xl-7 col-lg-7 col-md-7">
										<div class="banner-content">
											<span class="sub-title wow fadeInUp" data-wow-delay="0.2s">Exploring the Delicious World</span>
											<h1 class="title wow fadeInUp" data-wow-delay="0.4s">Delicious Eats <br> And  <span class="text-primary">Tasty Drinks</span></h1>
											<p class="wow fadeInUp" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<div class="banner-btn d-flex align-items-center wow fadeInUp" data-wow-delay="0.8s">
												<a href="contact-us.html" class="btn btn-primary btn-md shadow-primary m-r30 btn-hover-1"><span>Book a Table</span></a>
												<a href="about-us.html" class="btn btn-outline-primary btn-md shadow-primary btn-hover-1"><span>View More</span></a>
											</div>
										</div>
									</div>
									<div class="col-xl-5 col-lg-5 col-md-5">
										<div class="banner-media wow fadeInRight" data-wow-delay="1s">
											<img src="assets/images/main-slider/slider1/pic1.png" alt="/">
										</div>
									</div>
								</div>
							</div>
							<img src="assets/images/main-slider/slider1/img3.png" class="img1" alt="/">
							<img src="assets/images/main-slider/slider1/img1.png" class="img2" alt="/">
							<img src="assets/images/main-slider/slider1/img2.png" class="img3" alt="/">
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="main-thumb1-area swiper-btn-lr wow fadeInUp" data-wow-delay="0.6s">
					<div class="swiper main-thumb1">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="food-card">
									<div class="dz-media">
										<img src="assets/images/main-slider/slider1/thumb/pic1.jpg" alt="/">									
									</div>
									<div class="dz-content">
										<h5 class="title">BreakFast</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="food-card">
									<div class="dz-media">
										<img src="assets/images/main-slider/slider1/thumb/pic2.jpg" alt="/">									
									</div>
									<div class="dz-content">
										<h5 class="title">Lunch</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="food-card">
									<div class="dz-media">
										<img src="assets/images/main-slider/slider1/thumb/pic3.jpg" alt="/">									
									</div>
									<div class="dz-content">
										<h5 class="title">Dinner</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="thumb-button-prev btn-prev-1"><i class="fa-solid fa-angle-left"></i></div>
					<div class="thumb-button-next btn-next-1"><i class="fa-solid fa-angle-right"></i></div>
				</div>
			</div>
		</div>	
		<!-- Banner -->
		
		<!-- Image Box 2 -->
		<section class="content-inner bg-white section-wrapper-2 overflow-hidden">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title wow flipInX" data-wow-delay="0.2s">Special Menu</h2>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.1s">
						<div class="dz-img-box style-2 box-hover">
							<div class="dz-media">
								<img src="assets/images/gallery/small/pic1.jpg" alt="/">
							</div>
							<div class="dz-content">
								<h4 class="dz-title"><a href="product-detail.html">Pizza</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
								<h5 class="dz-price text-primary">$55.00</h5>
								<a href="shop-cart.html" class="btn btn-primary btn-hover-2">Add To Cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
						<div class="dz-img-box style-2 box-hover active">
							<div class="dz-media">
								<img src="assets/images/gallery/small/pic2.jpg" alt="/">
							</div>
							<div class="dz-content">
								<h4 class="dz-title"><a href="product-detail.html">Rice</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
								<h5 class="dz-price text-primary">$50.00</h5>
								<a href="shop-cart.html" class="btn btn-primary btn-hover-2">Add To Cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.3s">
						<div class="dz-img-box style-2 box-hover">
							<div class="dz-media">
								<img src="assets/images/gallery/small/pic3.jpg" alt="/">
							</div>
							<div class="dz-content">
								<h4 class="dz-title"><a href="product-detail.html">Green Salad</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
								<h5 class="dz-price text-primary">$45.00</h5>
								<a href="shop-cart.html" class="btn btn-primary btn-hover-2">Add To Cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.4s">
						<div class="dz-img-box style-2 box-hover">
							<div class="dz-media">
								<img src="assets/images/gallery/small/pic4.jpg" alt="/">
							</div>
							<div class="dz-content">
								<h4 class="dz-title"><a href="product-detail.html">Pasta</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
								<h5 class="dz-price text-primary">$35.0</h5>
								<a href="shop-cart.html" class="btn btn-primary btn-hover-2">Add To Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<img class="bg1 dz-move-down" src="assets/images/background/pic2.png" alt="/">
			<img class="bg2 dz-parallax" data-parallax-speed="0.05" src="assets/images/background/pic3.png" alt="/">
		</section>
		<!-- Image Box-2 -->
		
		<!-- Image Box-3  -->
		<section class="content-inner-1 section-wrapper-3 overflow-hidden">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title wow flipInX" data-wow-delay="0.2s">Today's Menu</h2>
				</div>
				<div class="row inner-section-wrapper">
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
						<div class="dz-img-box style-3 box-hover">
							<div class="dz-media">
								<img src="assets/images/gallery/grid2/pic2.jpg" alt="/">
							</div>
							<span class="dz-tag">TOP SELLER</span>
							<div class="dz-content">
								<h5 class="dz-title"><a href="our-menu-1.html">Pasta</a></h5>
								<p>Lorem ipsum dolor sit amet, dipiscing elit, sed</p>
							</div>
							<div class="dz-hover-content">
								<div class="dz-info">
									<h5 class="dz-title mb-0"><a href="our-menu-1.html">Pasta</a></h5>
									<span class="dz-price">$35.00</span>
								</div>
								<a href="shop-cart.html" class="btn btn-cart btn-white text-primary btn-square"><i class="flaticon-shopping-cart"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.4s">
						<div class="dz-img-box style-3 box-hover">
							<div class="dz-media">
								<img src="assets/images/gallery/grid2/pic5.jpg" alt="/">
							</div>
							<span class="dz-tag">TOP SELLER</span>
							<div class="dz-content">
								<h5 class="dz-title"><a href="our-menu-1.html">Oreo Shake</a></h5>
								<p>Lorem ipsum dolor sit amet, dipiscing elit, sed</p>
							</div>
							<div class="dz-hover-content">
								<div class="dz-info">
									<h5 class="dz-title mb-0"><a href="our-menu-1.html">Shake</a></h5>
									<span class="dz-price">$55.00</span>
								</div>
								<a href="shop-cart.html" class="btn btn-cart btn-white text-primary btn-square"><i class="flaticon-shopping-cart"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.6s">
						<div class="dz-img-box style-3 box-hover">
							<div class="dz-media">
								<img src="assets/images/gallery/grid2/pic4.jpg" alt="/">
							</div>
							<span class="dz-tag">TOP SELLER</span>
							<div class="dz-content">
								<h5 class="dz-title"><a href="our-menu-1.html">Dal Fry</a></h5>
								<p>Lorem ipsum dolor sit amet, dipiscing elit, sed</p>
							</div>
							<div class="dz-hover-content">
								<div class="dz-info">
									<h5 class="dz-title mb-0"><a href="our-menu-1.html">Dal</a></h5>
									<span class="dz-price">$25.00</span>
								</div>
								<a href="shop-cart.html" class="btn btn-cart btn-white text-primary btn-square"><i class="flaticon-shopping-cart"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.8s">
						<div class="dz-img-box style-3 box-hover">
							<div class="dz-media">
								<img src="assets/images/gallery/grid2/pic6.jpg" alt="/">
							</div>
							<span class="dz-tag">TOP SELLER</span>
							<div class="dz-content">
								<h5 class="dz-title"><a href="our-menu-1.html">Pizza</a></h5>
								<p>Lorem ipsum dolor sit amet, dipiscing elit, sed</p>
							</div>
							<div class="dz-hover-content">
								<div class="dz-info">
									<h5 class="dz-title mb-0"><a href="our-menu-1.html">Pizza</a></h5>
									<span class="dz-price">$90.00</span>
								</div>
								<a href="shop-cart.html" class="btn btn-cart btn-white text-primary btn-square"><i class="flaticon-shopping-cart"></i></a>
							</div>
						</div>
					</div>
					<div class="col-12 text-center m-t10">
						<a href="our-menu-2.html" class="btn btn-md btn-primary btn-hover-1"><span>See All Dishes</span></a>
					</div>
				</div>
				<div class="section-head text-center">
					<h2 class="title wow flipInX" data-wow-delay="0.2s">Quality Services</h2>
				</div>
				<!-- Icon Wrapper 1 -->
				<div class="icon-wrapper1">
					<div class="row wow fadeInUp" data-wow-delay="0.2s">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="icon-bx-wraper style-1 box-hover center" style="background-image: url(assets/images/gallery/grid/pic1.jpg)">
								<div class="inner-content">
									<div class="icon-bx m-b25"> 
										<span class="icon-cell icon-md">
											<i class="flaticon-restaurant"></i>
										</span> 
									</div>
									<div class="icon-content">
										<h5 class="dz-title">Restaurant</h5>
										<p>Lorem ipsum dolor sit amet, dipiscing elit, sed</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="icon-bx-wraper style-1 box-hover center" style="background-image: url(assets/images/gallery/grid/pic2.jpg)">
								<div class="inner-content">
									<div class="icon-bx m-b25"> 
										<span class="icon-cell icon-md">
											<i class="flaticon-martini"></i>
										</span> 
									</div>
									<div class="icon-content">
										<h5 class="dz-title">Bar</h5>
										<p>Lorem ipsum dolor sit amet, dipiscing elit, sed</p>
									</div>
								</div>
							</div>
					 
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="icon-bx-wraper style-1 box-hover center" style="background-image: url(assets/images/gallery/grid/pic3.jpg)">
								<div class="inner-content">
									<div class="icon-bx m-b25"> 
											<span class="icon-cell icon-md">
												<i class="flaticon-coffee-cup"></i>
											</span> 
										</div>
									<div class="icon-content">
										<h5 class="dz-title">Cafe</h5>
										<p>Lorem ipsum dolor sit amet, dipiscing elit, sed</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="icon-bx-wraper style-1 box-hover center" style="background-image: url(assets/images/gallery/grid/pic4.jpg)">
								<div class="inner-content">
									<div class="m-b25"> 
										<span class="icon-cell icon-md">
											<i class="flaticon-cake"></i>
										</span> 
									</div>
									<div class="icon-content">
										<h5 class="dz-title">Dessert</h5>
										<p>Lorem ipsum dolor sit amet, dipiscing elit, sed</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Icon Wrapper 1 -->
			</div>
			<img class="bg1 dz-parallax" data-parallax-speed="0.05" src="assets/images/background/pic3.png" alt="/">
			<img class="bg2 dz-parallax" data-parallax-speed="0.05" src="assets/images/background/pic4.png" alt="/">
		</section>
		<!-- Image Box-3 -->
		
		<!-- Image Box-1  -->
		<section class="content-inner-1 bg-white overflow-hidden pt-sm-0">
			<div class="container">
				<div class="section-head text-center">
				<h2 class="title wow flipInX" data-wow-delay="0.2s">From Our Menu</h2>
				</div>
				<div class="swiper-btn-lr">
					<div class="swiper portfolio-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="dz-img-box style-1 wow fadeInUp" data-wow-delay="0.4s">
									<div class="dz-media">
										<img src="assets/images/gallery/grid2/pic1.jpg" alt="/">
									</div>
									<span class="dz-tag">TOP SELLER</span>
									<div class="dz-content">
										<div class="dz-info">
											<h5 class="dz-title mb-0"><a href="our-menu-1.html">Burger</a></h5>
											<span class="dz-price">$20.00</span>
										</div>
										<a href="shop-cart.html" class="btn btn-cart btn-white text-primary btn-square"><i class="flaticon-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-img-box style-1 wow fadeInUp" data-wow-delay="0.6s">
									<div class="dz-media">
										<img src="assets/images/gallery/grid2/pic2.jpg" alt="/">
									</div>
										<span class="dz-tag">TOP SELLER</span>
									<div class="dz-content">
										<div class="dz-info">
											<h5 class="dz-title mb-0"><a href="our-menu-1.html">Pasta</a></h5>
											<span class="dz-price">$10.00</span>
										</div>
										<a href="shop-cart.html" class="btn btn-cart btn-white text-primary btn-square"><i class="flaticon-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-img-box style-1 wow fadeInUp" data-wow-delay="0.8s">
									<div class="dz-media">
										<img src="assets/images/gallery/grid2/pic3.jpg" alt="/">
									</div>
										<span class="dz-tag">TOP SELLER</span>
									<div class="dz-content">
										<div class="dz-info">
											<h5 class="dz-title mb-0"><a href="our-menu-1.html">Tandoor</a></h5>
											<span class="dz-price">$15.00</span>
										</div>
										<a href="shop-cart.html" class="btn btn-cart btn-white text-primary btn-square"><i class="flaticon-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-img-box style-1 wow fadeInUp" data-wow-delay="0.10s">
									<div class="dz-media">
										<img src="assets/images/gallery/grid2/pic4.jpg" alt="/">
									</div>
										<span class="dz-tag">TOP SELLER</span>
									<div class="dz-content">
										<div class="dz-info">
											<h5 class="dz-title mb-0"><a href="our-menu-1.html">Dal Fry</a></h5>
											<span class="dz-price">$65.00</span>
										</div>
										<a href="shop-cart.html" class="btn btn-cart btn-white text-primary btn-square"><i class="flaticon-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-img-box style-1 wow fadeInUp" data-wow-delay="0.4s">
									<div class="dz-media">
										<img src="assets/images/gallery/grid2/pic1.jpg" alt="/">
									</div>
									<span class="dz-tag">TOP SELLER</span>
									<div class="dz-content">
										<div class="dz-info">
											<h5 class="dz-title mb-0"><a href="our-menu-1.html">Burger</a></h5>
											<span class="dz-price">$20.00</span>
										</div>
										<a href="shop-cart.html" class="btn btn-cart btn-white text-primary btn-square"><i class="flaticon-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-img-box style-1 wow fadeInUp" data-wow-delay="0.6s">
									<div class="dz-media">
										<img src="assets/images/gallery/grid2/pic2.jpg" alt="/">
									</div>
										<span class="dz-tag">TOP SELLER</span>
									<div class="dz-content">
										<div class="dz-info">
											<h5 class="dz-title mb-0"><a href="our-menu-1.html">Pasta</a></h5>
											<span class="dz-price">$10.00</span>
										</div>
										<a href="shop-cart.html" class="btn btn-cart btn-white text-primary btn-square"><i class="flaticon-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-img-box style-1 wow fadeInUp" data-wow-delay="0.8s">
									<div class="dz-media">
										<img src="assets/images/gallery/grid2/pic3.jpg" alt="/">
									</div>
										<span class="dz-tag">TOP SELLER</span>
									<div class="dz-content">
										<div class="dz-info">
											<h5 class="dz-title mb-0"><a href="our-menu-1.html">Tandoor</a></h5>
											<span class="dz-price">$15.00</span>
										</div>
										<a href="shop-cart.html" class="btn btn-cart btn-white text-primary btn-square"><i class="flaticon-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-img-box style-1 wow fadeInUp" data-wow-delay="0.10s">
									<div class="dz-media">
										<img src="assets/images/gallery/grid2/pic4.jpg" alt="/">
									</div>
										<span class="dz-tag">TOP SELLER</span>
									<div class="dz-content">
										<div class="dz-info">
											<h5 class="dz-title mb-0"><a href="our-menu-1.html">Dal Fry</a></h5>
											<span class="dz-price">$65.00</span>
										</div>
										<a href="shop-cart.html" class="btn btn-cart btn-white text-primary btn-square"><i class="flaticon-shopping-cart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pagination mt-xl-0 m-t40">
						<div class="img-button-prev btn-prev-long"><i class="fa-solid fa-arrow-left"></i></div>
						<div class="img-button-next btn-next-long"><i class="fa-solid fa-arrow-right"></i></div>
					</div>
				</div>
			</div>
		</section>
		<!-- Image Box-1 -->	
		
		<!-- Search Section-->
		<section class="content-inner-1 section-wrapper-1 bg-parallax" style="background-image:url('assets/images/background/pic1.png'); background-attachment: fixed;">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title text-white wow flipInX" data-wow-delay="0.2s">Reservation</h2>
				</div>	
				<form action="#">
					<div class="row">
						<div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
							<div class="input-group input-line">
								<div class="input-group-prepand">
									<i class="flaticon-user"></i>
								</div>
								<input name="dzName" required type="text" class="form-control" placeholder="Your Name">
							</div>
						</div>
						<div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
							<div class="input-group input-line">
								<div class="input-group-prepand">
									<i class="flaticon-phone-call"></i>
								</div>
								<input name="dzPhoneNumber" required type="number" class="form-control dz-number" placeholder="Phone Number">
							</div>
						</div>
						<div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
							<div class="input-group input-line">
								<div class="input-group-prepand">
									<i class="flaticon-email-1"></i>
								</div>
								<input name="dzPhoneNumber" required type="number" class="form-control" placeholder="Số điện thoại">
							</div>
						</div>
						<div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.4s">
							<div class="input-group input-line">
								<div class="input-group-prepand">
									<i class="flaticon-two-people"></i>
								</div>
								<select class="form-select default-select">
									<option>Number Of People</option>
									<option>Member 1</option>
									<option>Member 2</option>
									<option>Member 3</option>
									<option>Member 4</option>
									<option>Member 5</option>
								</select>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.4s">
							<div class="input-group input-line">
								<div class="input-group-prepand">
									<i class="flaticon-calendar-date"></i>
								</div>
								<input required type="text" class="form-control" id="datePickerOnly" placeholder="Date">
							</div>
						</div>
						<div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.4s">
							<div class="input-group input-line">
								<div class="input-group-prepand">
									<i class="flaticon-clock"></i>
								</div>
								<input required type="text" class="form-control" id="timePickerOnly" placeholder="Time">
							</div>
						</div>
						<div class="col-lg-12 col-md-12 text-center">
							<button type="submit" name="submit" value="submit" class="btn btn-lg btn-white btn-hover-1"><span>Book a Table</span></button>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- Search Section-->
		
		<!-- Testimonials -->
		<section class="content-inner-1 section-wrapper-2 right overflow-hidden">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title wow flipInX" data-wow-delay="0.2s">Customer's Comment</h2>
				</div>
				<div class="row gx-0 wow fadeInUp" data-wow-delay="0.4s">
					<div class="col-lg-7 col-md-12">
						<div class="swiper testimonial-one-thumb">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="assets/images/testimonial/small/pic1.jpg" alt="/">
								</div>
								<div class="swiper-slide">
									<img src="assets/images/testimonial/small/pic2.jpg" alt="/">
								</div>
								<div class="swiper-slide">
									<img src="assets/images/testimonial/small/pic3.jpg" alt="/">
								</div>
								<div class="swiper-slide">
									<img src="assets/images/testimonial/small/pic4.jpg" alt="/">
								</div>
								<div class="swiper-slide">
									<img src="assets/images/testimonial/small/pic5.jpg" alt="/">
								</div>
								<div class="swiper-slide">
									<img src="assets/images/testimonial/small/pic6.jpg" alt="/">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-12">
						<div  class="swiper testimonial-one-swiper h-100">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="testimonial-1">
										<div class="testimonial-text">
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</div>
										<div class="testimonial-info">
											<h5 class="testimonial-name">John Doe</h5>
											<span class="testimonial-position">Food Expert</span>
										</div>
										<i class="flaticon-right-quote quote"></i>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-1">
										<div class="testimonial-text">
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</div>
										<div class="testimonial-info">
											<h5 class="testimonial-name">Jolly Roy</h5>
											<span class="testimonial-position">Food Tester</span>
										</div>
										<i class="flaticon-right-quote quote"></i>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-1">
										<div class="testimonial-text">
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</div>
										<div class="testimonial-info">
											<h5 class="testimonial-name">Thomas Hed</h5>
											<span class="testimonial-position">Food Expert</span>
										</div>
										<i class="flaticon-right-quote quote"></i>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-1">
										<div class="testimonial-text">
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</div>
										<div class="testimonial-info">
											<h5 class="testimonial-name">Kally Mint</h5>
											<span class="testimonial-position">Food Expert</span>
										</div>
										<i class="flaticon-right-quote quote"></i>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-1">
										<div class="testimonial-text">
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</div>
										<div class="testimonial-info">
											<h5 class="testimonial-name">Ronny joy</h5>
											<span class="testimonial-position">Assistant</span>
										</div>
										<i class="flaticon-right-quote quote"></i>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-1">
										<div class="testimonial-text">
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</div>
										<div class="testimonial-info">
											<h5 class="testimonial-name">Dolly kom</h5>
											<span class="testimonial-position">Food Expert</span>
										</div>
										<i class="flaticon-right-quote quote"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
			</div>
			<img class="bg1 dz-move-down" src="assets/images/background/pic2.png" alt="/">
		</section>
		<!-- Testimonial -->
		
		<!-- Team Section 1-->
		<section class="content-inner-1 overflow-hidden bg-light">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title wow flipInX" data-wow-delay="0.2s">Master Chefs</h2>
				</div>
			</div>
			<div class="container">
				<div class="swiper team-swiper swiper-visible swiper-btn-lr">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<img src="assets/images/team/pic1.jpg" alt="/">
								</div>
								<div class="dz-content">
									<div class="clearfix">
										<h6 class="dz-name"><a href="team-detail.html">Sarah Albert</a></h6>
										<span class="dz-position">Senior Chef</span>
									</div>
									<ul class="team-social">
										<li>
											<a class="share-btn" href="javascript:void(0);"><i class="flaticon-share"></i></a>									
											<ul class="sub-team-social">
												<li><a class="fb-btn" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
												<li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
												<li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
												<li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<img src="assets/images/team/pic2.jpg" alt="/">
								</div>
								<div class="dz-content">
									<div class="clearfix">
										<h6 class="dz-name"><a href="team-detail.html">John Doe</a></h6>
										<span class="dz-position">Senior Chef</span>
									</div>
									<ul class="team-social">
										<li>
											<a class="share-btn" href="javascript:void(0);"><i class="flaticon-share"></i></a>									
											<ul class="sub-team-social">
												<li><a class="fb-btn" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
												<li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
												<li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
												<li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.6s">
								<div class="dz-media">
									<img src="assets/images/team/pic3.jpg" alt="/">
								</div>
								<div class="dz-content">
									<div class="clearfix">
										<h6 class="dz-name"><a href="team-detail.html">Jemy Carline</a></h6>
										<span class="dz-position">Junior Chef</span>
									</div>
									<ul class="team-social">
										<li>
											<a class="share-btn" href="javascript:void(0);"><i class="flaticon-share"></i></a>									
											<ul class="sub-team-social">
												<li><a class="fb-btn" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
												<li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
												<li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
												<li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.8s">
								<div class="dz-media">
									<img src="assets/images/team/pic4.jpg" alt="/">
								</div>
								<div class="dz-content">
									<div class="clearfix">
										<h6 class="dz-name"><a href="team-detail.html">Cotlin Care</a></h6>
										<span class="dz-position">Senior Chef</span>
									</div>
									<ul class="team-social">
										<li>
											<a class="share-btn" href="javascript:void(0);"><i class="flaticon-share"></i></a>									
											<ul class="sub-team-social">
												<li><a class="fb-btn" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
												<li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
												<li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
												<li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<img src="assets/images/team/pic1.jpg" alt="/">
								</div>
								<div class="dz-content">
									<div class="clearfix">
										<h6 class="dz-name"><a href="team-detail.html">Sarah Albert</a></h6>
										<span class="dz-position">Senior Chef</span>
									</div>
									<ul class="team-social">
										<li>
											<a class="share-btn" href="javascript:void(0);"><i class="flaticon-share"></i></a>									
											<ul class="sub-team-social">
												<li><a class="fb-btn" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
												<li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
												<li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
												<li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<img src="assets/images/team/pic2.jpg" alt="/">
								</div>
								<div class="dz-content">
									<div class="clearfix">
										<h6 class="dz-name"><a href="team-detail.html">John Doe</a></h6>
										<span class="dz-position">Senior Chef</span>
									</div>
									<ul class="team-social">
										<li>
											<a class="share-btn" href="javascript:void(0);"><i class="flaticon-share"></i></a>									
											<ul class="sub-team-social">
												<li><a class="fb-btn" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
												<li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
												<li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
												<li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.6s">
								<div class="dz-media">
									<img src="assets/images/team/pic3.jpg" alt="/">
								</div>
								<div class="dz-content">
									<div class="clearfix">
										<h6 class="dz-name"><a href="team-detail.html">Jemy Carline</a></h6>
										<span class="dz-position">Junior Chef</span>
									</div>
									<ul class="team-social">
										<li>
											<a class="share-btn" href="javascript:void(0);"><i class="flaticon-share"></i></a>									
											<ul class="sub-team-social">
												<li><a class="fb-btn" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
												<li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
												<li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
												<li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.8s">
								<div class="dz-media">
									<img src="assets/images/team/pic4.jpg" alt="/">
								</div>
								<div class="dz-content">
									<div class="clearfix">
										<h6 class="dz-name"><a href="team-detail.html">Cotlin Care</a></h6>
										<span class="dz-position">Senior Chef</span>
									</div>
									<ul class="team-social">
										<li>
											<a class="share-btn" href="javascript:void(0);"><i class="flaticon-share"></i></a>									
											<ul class="sub-team-social">
												<li><a class="fb-btn" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
												<li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
												<li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
												<li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="pagination mt-xl-0 m-t40">
						<div class="team-button-prev btn-prev-long"><i class="fa-solid fa-arrow-left"></i></div>
						<div class="team-button-next btn-next-long"><i class="fa-solid fa-arrow-right"></i></div>
					</div>
				</div>
			</div>
		</section>
		<!-- Team Section 1 -->	
		
		<!-- Our Blog  -->
		<section class="content-inner-1 overflow-hidden">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title wow flipInX" data-wow-delay="0.2s">News & blog</h2>
				</div>
				<div class="swiper blog-swiper swiper-visible swiper-btn-lr">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<a href="blog-standard.html"><img src="assets/images/blog/grid/pic1.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<div class="dz-meta">
										<ul>
											<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 26 Jan 2023</a></li>
											<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 2.5K </a></li>
										</ul>
									</div> 
									<h5 class="dz-title"><a href="blog-standard.html">Taste of Paradise Dishes</a></h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
									<div class="read-btn">
										<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp" data-wow-delay="0.6s">
								<div class="dz-media">
									<a href="blog-standard.html"><img src="assets/images/blog/grid/pic2.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<div class="dz-meta">
										<ul>
											<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 15 Mar 2023</a></li>
											<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 1.5K</a></li>
										</ul>
									</div> 
									<h5 class="dz-title"><a href="blog-standard.html">The Spices Route Taste</a></h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
									<div class="read-btn">
										<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-1 blog-half wow overlay-shine dz-img-effect zoom fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<a href="blog-standard.html"><img src="assets/images/blog/grid/pic3.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<div class="dz-meta">
										<ul>
											<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 20 Sep 2023</a></li>
											<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 2.0K</a></li>
										</ul>
									</div> 
									<h5 class="dz-title"><a href="blog-standard.html">The Fork & Knife</a></h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
									<div class="read-btn">
										<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp" data-wow-delay="0.6s">
								<div class="dz-media">
									<a href="blog-standard.html"><img src="assets/images/blog/grid/pic4.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<div class="dz-meta">
										<ul>
											<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 30 Nov 2023</a></li>
											<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 3.5K </a></li>
										</ul>
									</div> 
									<h5 class="dz-title"><a href="blog-standard.html">Flavors Of The World</a></h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
									<div class="read-btn">
										<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<a href="blog-standard.html"><img src="assets/images/blog/grid/pic1.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<div class="dz-meta">
										<ul>
											<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 26 Jan 2023</a></li>
											<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 2.5K </a></li>
										</ul>
									</div> 
									<h5 class="dz-title"><a href="blog-standard.html">Taste of Paradise Dishes</a></h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
									<div class="read-btn">
										<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp" data-wow-delay="0.6s">
								<div class="dz-media">
									<a href="blog-standard.html"><img src="assets/images/blog/grid/pic2.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<div class="dz-meta">
										<ul>
											<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 15 Mar 2023</a></li>
											<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 1.5K</a></li>
										</ul>
									</div> 
									<h5 class="dz-title"><a href="blog-standard.html">The Spices Route Taste</a></h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
									<div class="read-btn">
										<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-1 blog-half wow overlay-shine dz-img-effect zoom fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<a href="blog-standard.html"><img src="assets/images/blog/grid/pic3.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<div class="dz-meta">
										<ul>
											<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 20 Sep 2023</a></li>
											<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 2.0K</a></li>
										</ul>
									</div> 
									<h5 class="dz-title"><a href="blog-standard.html">The Fork & Knife</a></h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
									<div class="read-btn">
										<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp" data-wow-delay="0.6s">
								<div class="dz-media">
									<a href="blog-standard.html"><img src="assets/images/blog/grid/pic4.jpg" alt="/"></a>
								</div>
								<div class="dz-info">
									<div class="dz-meta">
										<ul>
											<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 30 Nov 2023</a></li>
											<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 3.5K </a></li>
										</ul>
									</div> 
									<h5 class="dz-title"><a href="blog-standard.html">Flavors Of The World</a></h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
									<div class="read-btn">
										<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pagination mt-xl-0 m-t40">
						<div class="blog-button-prev btn-prev-long"><i class="fa-solid fa-arrow-left"></i></div>
						<div class="blog-button-next btn-next-long"><i class="fa-solid fa-arrow-right"></i></div>
					</div>
				</div>
			</div>
		</section>
		<!-- Our Blog End  -->
		
		<!-- Map Iframe -->
		<div class="map-iframe style-1">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d244934.17139458598!2d75.27787773507539!3d25.125368923263647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1678086292169!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<!-- Map Iframe -->
		
	</div>
	<!--Footer-->
	<footer class="site-footer  style-1 bg-dark" id="footer">
		<div class="footer-top">
            <div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.4s">
						<div class="dz-form-card bg-primary">
							<div class="section-head">
								<h4 class="title m-0">Contact us</h4>
								<p class="m-t10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
							<form class="dzForm dezPlaceAni" method="POST" action="https://swigo.dexignzone.com/xhtml/script/contact_smtp.php">
								<input type="hidden" class="form-control" name="dzToDo" value="Contact">
								<input type="hidden" class="form-control" name="reCaptchaEnable" value="0" >
								<div class="dzFormMsg"></div>
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<div class="input-group input-line">
											<input name="dzName" required type="text" class="form-control" placeholder="Your Name">
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="input-group input-line">
											<input name="dzPhoneNumber" required type="number" class="form-control" placeholder="số điện thoại">
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="input-group input-line">
											<input name="dzOther[Subject]" required type="text" class="form-control" placeholder="Subject">
										</div>
									</div>
									<div class="col-sm-12 ">
										<div class="input-group input-line">
											<textarea name="dzMessage" required class="form-control" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-sm-12">
										<button type="submit" name="submit" value="submit" class="btn btn-md btn-white btn-hover-1"><span>Send Message</span></button>	
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.5s">
						<div class="widget widget_getintuch">
							<h5 class="footer-title">Contact</h5>
							<ul>
								<li>
									<i class="flaticon-placeholder"></i>
									<p>1247/Plot No. 39, 15th Phase, Colony, Kkatpally, Hyderabad</p>
								</li>
								<li>
									<i class="flaticon-telephone"></i>
									<p>+91 987-654-3210<br>
										+91 123-456-7890</p>
								</li>
								<li>
									<i class="flaticon-email-1"></i>
									<p>info@example.com<br>
									info@example.com</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.6s">
						<div class="widget widget_services">
							<h5 class="footer-title">Our Links</h5>
							<ul>
								<li><a href="index.html"><span>Home</span></a></li>
								<li><a href="about-us.html"><span>About Us</span></a></li>
								<li><a href="services.html"><span>Services</span></a></li>
								<li><a href="team.html"><span>Team</span></a></li>
								<li><a href="blog-standard.html"><span>Blog</span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="widget widget_services">
							<h5 class="footer-title">Help Center</h5>
							<ul>
								<li><a href="faq.html"><span>FAQ</span></a></li>
								<li><a href="shop-style-1.html"><span>Shop</span></a></li>
								<li><a href="shop-style-2.html"><span>Category Filter</span></a></li>
								<li><a href="testimonial.html"><span>Testimonials</span></a></li>
								<li><a href="contact-us.html"><span>Contact Us</span></a></li>
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
						<p>Copyright 2023 All rights reserved.</p>
					</div>
					<div class="col-xl-6 col-md-6 text-md-end">
						<span class="copyright-text">Crafted With <span class="heart"></span> by <a href="https://dexignzone.com/" target="_blank">DexignZone</a></span>
					</div>
				</div>
            </div>
        </div>
		<img class="bg1 dz-move" src="assets/images/background/pic5.png" alt="/">
		<img class="bg2 dz-move" src="assets/images/background/pic6.png" alt="/">
    </footer>
	
	<!-- Footer -->
	<div class="scroltop-progress scroltop-primary">
		<svg width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
	
</div>

<!-- JAVASCRIPT FILES ========================================= -->
<script src="assets/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELEECT -->
<script src="assets/vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="assets/vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="assets/vendor/wow/wow.js"></script><!-- WOW JS -->
<script src="assets/vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- OWL-CAROUSEL -->
<script src="assets/vendor/popper/popper.js"></script><!-- Popper -->
<script src="assets/vendor/tempus-dominus/js/tempus-dominus.min.js"></script><!-- Tempus Dominus -->
<script src="assets/vendor/tilt/tilt.jquery.min.js"></script><!-- TILT -->
<script src="assets/js/dz.carousel.min.js"></script><!-- OWL-CAROUSEL -->
<script src="assets/js/dz.ajax.js"></script><!-- AJAX -->
<script src="assets/js/custom.min.js"></script><!-- CUSTOM JS -->
<script src="assets/js/dznav-init.js"></script><!-- DZNAV INIT -->
<script src="assets/vendor/rangeslider/rangeslider.js"></script>
<!-- <script src="assets/vendor/switcher/switcher.js"></script>  -->
</body>

<!-- Mirrored from swigo.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 03:07:00 GMT -->
</html>