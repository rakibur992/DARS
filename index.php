<?php
include('server.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>DARS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/bbb-nrh-performance.gif"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--==============================================================================================-->
</head>
<body>

<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt>
<img src="images/c99172c17b83d3c620b997858351b2a5.gif" alt="IMG" width="389" height="219" class="img-fluid">
<img src="images/source.gif" alt="IMG" width="320" height="299" class="img-fluid">
</div>

<form class="login100-form validate-form" action="index.php" method="post">
<?php include('errors.php'); ?>
<span class="login100-form-title">Welcome To DARS<br>
Login<br>
</span>
<div class="wrap-input100 validate-input" data-validate = "User Name ">
<input class="input100" type="text" name="user" placeholder="User Name" require>
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-user" aria-hidden="true"></i>
</span>
</div>

<div class="wrap-input100 validate-input" data-validate = "Password is required">
<input class="input100" type="password" name="pass" placeholder="Password">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>

<div class="container-login100-form-btn">
<button class="login100-form-btn" name="login_user" type="submit">
Login
</button>
</div>

<div class="text-center p-t-12">
<span class="txt1">
Forgot
</span>
<a class="txt2" href="userReset.html">
Username / Password?
</a>
</div>

<div class="text-center p-t-136">
<a class="txt2" href="reg.php">
Create your Account
<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
</a>
</div>
</form>
</div>
</div>
</div>




<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script >
$('.js-tilt').tilt({
scale: 1.1
})
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
