<!DOCTYPE html>
<html>


<!-- Mirrored from www.einfosoft.com/templates/admin/spice/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Apr 2022 16:16:43 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Sailing Hotel</title>
	<!-- icons -->
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-flower"></i>
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login2">
							Login
						</button>
					</div>
					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>

				<?php

if(isset($_POST['login2']))
{

		$username = $_POST['username'];
		$password = $_POST['pass'];
		include "database/db.php";
		$sql="SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
		$res= mysqli_query($conn,$sql);

		// $num = mysqli_num_rows($res); 
		if(mysqli_num_rows($res) > 0)
		{
            session_start();
			$_SESSION['admin'] = mysqli_fetch_assoc($res);
		     header("location: http://localhost/sailinghotel/admin/index.php");
		}else{
			echo '<script>alert("Wrong username or password!!")</script>';
		}

}

              ?>














			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/pages/extra_pages/login.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/spice/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Apr 2022 16:16:43 GMT -->
</html>