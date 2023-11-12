<?php
session_start();
include("../../model/pdo.php");
include("../../model/dangnhap.php");


if (isset($_SESSION["dangnhap_admin"])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Đăng nhập Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">
	<?php
	$sodienthoai = $pass = "";
	$err_sodienthoai = $err_pass = "";
	$err_pass_loi = "";

	if (isset($_POST["submit"])) {
		$sodienthoai = $_POST["sodienthoai"];
		$pass = md5($_POST["pass"]);

		$check = 0;
		if (empty(trim($sodienthoai))) {
			$err_sodienthoai = "Bạn chưa nhập trường này";
			$check++;
		} else {
			if (!preg_match("/^0\d{9}$/", $sodienthoai)) {
				$check++;
				$err_sodienthoai = "Bạn phải nhập đúng định dạng số điện thoại";
			}
		}

		if (empty(trim($pass))) {
			$err_pass = "Bạn chưa nhập trường này";
			$check++;
		}

		if ($check == 0) {
			$resut = check_tk_one($sodienthoai, $pass);

			if ($resut) {
				$_SESSION["dangnhap_admin"] = $sodienthoai;
				header("location: ../index.php");
				// exit();
			} else {
				$err_pass_loi = "Bạn sai số điện thoại hoặc mật khẩu";
			}
		}



	}


	?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-43">
						Đăng nhập Admin
					</span>

					<div class="wrap-input100 validate-input" data-validate="">
						<input class="input100" type="tel" name="sodienthoai">
						<span class="focus-input100"></span>
						<span class="label-input100">Số điện thoại</span>
					</div>
					<p style="color:red;">
						<?= $err_sodienthoai ?>
					</p>

					<div class="wrap-input100 validate-input" data-validate="Vui lòng nhập mật khẩu">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Mật khẩu</span>
					</div>
					<p style="color:red;">
						<?= $err_pass ?>
					</p>
					<p style="color:red;">
						<?= $err_pass_loi ?>
					</p>
					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="#" class="txt1">
								Quên mật khẩu ?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Đăng nhập
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">

						</span>
					</div>

				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>





	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>