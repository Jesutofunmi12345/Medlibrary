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

    <title>TophMED Library</title>

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
<!--<body>
	<nav class="navbar bg-info text-white">
   <div class= "container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Library</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Log In </a></li>
    </ul>
  </div>
  </nav>-->

<div class="signup-form">
    <form method="post" action="register.php" class="form-horizontal">
    
		<div class="col-xs-8 col-xs-offset-4">
			<h2>Sign Up</h2>
		</div>		
        <!--<div class="form-group">
			<div class="col-xs-6">
                <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo $firstname; ?>" required="required">
                </div>
			<div class="col-xs-6">
                <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo $lastname; ?>"required="required">
            </div>        	
        </div>
		
<div class="form-group">
			<div class="col-xs-6">
<input type="text" class="form-control" name="school_id" placeholder="School_ID" required="required" value="<?php echo $school_id; ?>">
                </div>
			<div class="col-xs-6">
                <input type="number" class="form-control" name="phonenumber" placeholder="Phone number" value="<?php echo $phonenumber; ?>"required="required">
            </div>        	
        </div>



		<div class="form-group">
			<div class="col-xs-6">
                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $password; ?>"required="required">
            </div>        	
			<div class="col-xs-6">
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>" required="required">
            </div>        	
        </div>
        
        <div class="form-group">
			<div class="col-xs-12">
                <input type="email" class="form-control" name="email" placeholder="Email Address"  value="<?php echo $email; ?>" required="required">   
            </div>    	
        </div>

			 <div class="form-group">
			<div class="col-xs-12">
                <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $address; ?>" required="required">   
            </div>    	
        </div>

			<div class="form-group">
	<div class="col-xs-6">
    <select class="form-control" name="type" value="<?php echo $type; ?>">	
    <option value="Undergraduate">Undergraduate</option>
    <option value="Postgraduate">Postgraduate</option>
    <option value="Staff">Staff</option>
  </select>
</div>	
	<div class="col-xs-6">
    <select class="form-control" name="level" value="<?php echo $level; ?>">
     <option value="100">100 Level</option>	
    <option value="200">200 Level</option>
    <option value="300">300 Level</option>
    <option value="400">400 Level</option>
    <option value="500">500 Level</option>
    <option value="non-student">Non-Student</option>
  </select>
</div>
  </div>-->

                    <input type="text" name="fname" placeholder="First Name..." required=" " >
                    <input type="text" name="lname" placeholder="Last Name..." required=" " >
                    <input type="text" name="contact" placeholder="Mobile Number..." required=" " >
                    <input type="text" name="address" placeholder="Address..." required=" " >
                    <input type="email" name="email" placeholder="Email Address" required=" " >
                    <input type="password" name="password"  placeholder="Password" required=" " >
                    <input type="password" name="confirm_pass" placeholder="Password Confirmation" required=" " >

<div class="form-group">
	<div class="col-xs-6">
<input type="text" class="form-control" name="vercode" placeholder="Enter the Verification code" maxlength="5" autocomplete="off" required  />&nbsp;<img src="captcha.php">
</div> 
	
    <!--<div class="col-xs-6">
    <select class="form-control" name="user_type" value="<?php echo $user_type; ?>">
    <option value="" selected>User Type</option>	
    <option value="admin">Admin</option>
    <option value="student">Student</option>
  </select>
</div>	
</div>-->

		



        <div class="form-group">
			<div class="col-xs-8">
				<p><label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>.</label></p>
				<input type="submit" class="btn btn-info btn-lg" name="reg_user">
			</div>  
		</div>		      
   
	
    <div class="text-center">Already have an account? <a href="index.php">Login here</a></div>
</form>

</div>
<section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2019 TophMED Library | Developed by : Tophumy Web

            </div>
       
    </section> 

<script src="jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>                         