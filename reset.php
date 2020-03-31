<?php
require 'func/reset.php';
//die(print_r($_SESSION));
?>

<!DOCTYPE html>
<html>


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/collapse/forgot_password.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2020 14:17:05 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>ICU-Smart</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/iconic/css/material-design-iconic-font.min.css" rel="stylesheet">
	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<!-- style -->
	<link href="css/extra_pages.css" rel="stylesheet">
	<!-- favicon -->
	<link rel="shortcut icon" href="../assets/img/favicon.ico" />

</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
                    <p style="color: red;  <?= isset($_SESSION['confirm']) ? '' :  'display: none;' ?>"><?= $_SESSION['confirm'] ?></p>
                    <p style="color: red;  <?= isset($_SESSION['resetPass']) ? '' :  'display: none;' ?>"><?= $_SESSION['resetPass'] ?></p>
                    <p style="color: red;  <?= isset($_SESSION['exception']) ? '' :  'display: none;' ?>"><?= $_SESSION['exception'] ?></p>
                    <p style="color: red;  <?= isset($_SESSION['auth']) ? '' :  'display: none;' ?>"><?= $_SESSION['auth'] ?></p>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass"
							placeholder="Enter your new password">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="confirm password">
                        <input class="input100" type="password" name="pass1"
                                   placeholder="Confirm your new password">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="container-login100-form-btn">
						<input type="submit" name="send" value="Send" class="login100-form-btn">
					</div>
					<div class="text-center p-t-27">
						<a class="txt1" href="login.php">
							Login?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="js/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/pages.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/collapse/forgot_password.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2020 14:17:05 GMT -->
</html>