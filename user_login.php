<!DOCTYPE html>
<html lang="en">

<?php 

include 'fixed_bar.php'; 
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MedLibrary</title>
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

<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Login Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Login Form For Members</h2>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
			 <form method="post" action="user/login_user.php">
					<input class="form-control" name="uname" id="uname" type="text" placeholder="Username" required>
					<input class="form-control" name="password" id="password" type="password"  placeholder="Password" required >
					<div class="forgot">
						<a href="#">Forgot Password?</a>
					</div>
					<input type="submit" name="login_u" value="Login">
				</form>
			</div>
			<h4>For New Members</h4>
			<p><a href="register2.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->
<!-- //footer -->

	<?php /*include 'footer.php'*/ ?>
	<section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2020 MedLibrary | Developed by : JayTee Digital

            </div>
       
    </section> 
</body>
</html>