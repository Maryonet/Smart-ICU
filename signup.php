<?php
require 'func/signup.php';
//die(print_r($_SESSION));
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from radixtouch.in/templates/admin/smart/source/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2020 14:13:45 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Responsive Admin Template" name="description"/>
    <meta content="RedstarHospital" name="author"/>
    <title>Smart University | Bootstrap Responsive Admin Template</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
          type="text/css"/>
    <!-- icons -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/iconic/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- style -->
    <link href="css/extra_pages.css" rel="stylesheet">
    <!-- favicon -->
</head>

<body>
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="">
					<span class="login100-form-logo">
						<img alt="" src="img/avatar.png">
					</span>
                <span class="login100-form-title p-b-34 p-t-27">
						Create New Account
					</span>
                <p style="color: red;  <?= isset($_SESSION['msg']) ? '' :  'display: none;' ?>"><?= $_SESSION['msg'] ?></p>
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" name="email" placeholder="Username" type="text">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" name="password" placeholder="Password" type="password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter address">
                    <input class="input100" name="address" placeholder="address" type="text">
                    <span class="focus-input100" data-placeholder="&#xf141;"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter phone">
                    <input class="input100" name="phone" placeholder="phone number" type="text">
                    <span class="focus-input100" data-placeholder="&#xf2ba;"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <label for="gender">
                        <input type="radio" name="gender" value="male">
                        male
                    </label>
                    <label for="gender">
                        <input type="radio" name="gender" value="female">
                         female
                    </label>
                </div>
                <div class="container-login100-form-btn">
                    <input type="submit" class="login100-form-btn text-center" value="Sign up" name="submit">
                </div>
                <div class="text-center p-t-30">
                    alredy have account?
                    <u>
                        <a  href="login.php">
                            Log in
                        </a>
                    </u>
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


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2020 14:13:45 GMT -->
</html>