<?php include('functions.php');

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Project Library</title>

     <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	
	<style type="text/css">
	body {
		color:#999;
		background:#f3f3f3;
		font-family: 'Roboto', sans-serif;
	}
    .form-control {
		border-color: #eee;
        min-height: 38px;
		box-shadow: none !important;
	}
     .form-control:focus {
		border-color: #5cd3b4;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 500px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form h2 {
		color: #333;
        margin: 0 0 30px 0;
		display: inline-block;
		padding: 0 25px 10px 0;
		border-bottom: 4px solid red;
        font-family: cursive;
    }
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
    .signup-form input[type="checkbox"] {
		margin-top: 2px;
	}
    .signup-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #5cd3b4;
		border: none;
		margin-top: 20px;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #41cba9;
        outline: none !important;
	}
    .signup-form a {
		color: #5cd3b4;
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
    .signup-form form a {
		color: #5cd3b4;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
</style>

</head>

<?php include('fixed_bar.php'); ?>

<div class="signup-form">
    <form method="post" action="" class="form-horizontal">
    
		<div class="col-xs-8 col-xs-offset-4">
			<h2>Create a password</h2>
		</div>		
        <div class="form-group">
        	<label class="control-label" for="password">New Password</label>
			<div class="col-xs-12">
                <input type="password" class="form-control" name="pass1" placeholder="Password" required="required">
                </div>
            </div>

            <div class="form-group">
        	<label class="control-label" for="password">Confirm new Password</label>
			<div class="col-xs-12">
                <input type="password" class="form-control" name="pass2" placeholder="Confirm password" required="required">
            </div>        	
        </div>

        <div class="form-group">
        	<button type="submit" class="btn btn-info btn-lg" name="change">Change</button>
        </div>
    </form>
</div>

<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'fct_library'); 
    if (isset($_POST['change'])) {
    	$user=$_SESSION['email']; 
    	$pass1=$_POST['pass1'];
    	$pass2=$_POST['pass2'];

    	if($pass1 != $pass2){
    		echo "
    		<div class='alert alert-danger'>
    		<strong>Your New password didn't match with confirm password</strong>
    		</div>
    		";
    	}
    	/*if($pass1 < 3 AND $pass2 < 3){
    		echo "
    		<div class='alert alert-danger'>
    		<strong>Use 9 or more than 9 characters</strong>
    		</div>
    		";

    	}*/
    	else if($pass1==$pass2){

    		mysqli_query($db,"UPDATE users SET password='$pass1' where email='$user'") or die(mysqli_error());

    		session_destroy();
    		echo"<script>alert('Go ahead and signIn')</script>";
        	echo"<script>window.open('index.php', '_self')</script>";
    	}
    }
    ?>

