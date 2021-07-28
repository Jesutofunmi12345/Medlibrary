<?php
session_start();
require 'connect.php';
$conn = Connect();
?>



<!DOCTYPE html>
<?php include 'fixed_bar.php'; ?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TripodHub E-Library</title>
    <!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="style11.css"  media="all" />

<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="slick/slick.min.js"></script>  



     <!--<link type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">-->
  <!--<link href="css/custom.css" rel="stylesheet">-->
     </head>
<div class="register">
		<div class="container">
			<h2>Sign Up </h2>
			<div class="login-form-grids">
				<h5>Profile information</h5>
				<form method="post" action="register-confirm.php" >
					<input type="text" name="fname" placeholder="First Name..." required=" " >
					<input type="text" name="lname" placeholder="Last Name..." required=" " >
					<input type="text" name="uname" placeholder="Username..." required=" " >
					<select type="text" name="gender" style="width:80%";>
						<option>--Select your gender--</option>
						<option>Male</option>
						<option>Female</option>
						</select>
					<!--<input type="text" name="contact" placeholder="Mobile Number..." required=" " >-->
					<!--<input type="text" name="address" placeholder="Address..." required=" " >-->
					<select type="text" name="preferred_cat" style="width:80%";>
						<option>--Select your most preferred niche--</option>
						<option>Pharmaceuticals & Related Segments</option>
						<option>Health insurance, Health services, and managed care</option>
						<option>Health devices and equipments</option>
						<option>Health care services and facilities</option>
						<option>All</option>
					</select>
					<input type="email" name="email" placeholder="Email Address" required=" " >
					<input type="password" name="password"  placeholder="Password" required=" " >
					<input type="password" name="confirm_pass" placeholder="Password Confirmation" required=" " >
					<div class="register-check-box">
					<input type="text" class="form-control" name="vercode" placeholder="Enter the Verification code" maxlength="5" autocomplete="off" required  />&nbsp;<img src="captcha.php">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>I accept the terms and conditions</label>
						</div>
					</div>
					<input name="" type="submit" value="Register">
				</form>
			</div>
			<div class="register-home">
				<a href="index.php">Home</a>
			</div>
		</div>
	</div>

	<section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2020 TripodHub | Developed by : JayTee Digital

            </div>
       
    </section> 

<script src="jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>             