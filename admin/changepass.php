<?php 
  //session_start();
  include 'header.php'; 
$email=$_SESSION['login_user1'];
$user_query = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' ") or die(mysqli_error());
$row=mysqli_fetch_array($user_query);

//$_SESSION["user_type"]=$row['user_type'];
?>

        <div class="page-title">
            <div class="title_left">
                <h3>
          <small>Home /</small>Change your Password
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    
                    <div class="x_content">
      
      
<body>
	 <div class="wrapper">
      
<?php 
    //require 'connect.php';
     //$conn=Connect();

      $password = $row['pass'];
      if (isset($_POST['update'])) {

 $email=$_SESSION['login_user1'];
  $query=mysqli_query($conn,"SELECT  * from admin where pass='$password' && user_id='$id_session'") or die(mysqli_error());
    $row=mysqli_fetch_array($query);

    if (mysqli_num_rows($query) > 0) { 
     mysqli_query($conn, "UPDATE admin SET pass='{$_POST['new_pass']}' where admin_id = '$id_session'") or die(mysqli_error());
        echo "<script> alert('Successfully Update Password!'); </script>";
      }
      else{
        echo "problem" ;
      }

         } 
      ?>


      <div class="signup-form">
    <form method="post" action= "<?php echo $_SERVER["PHP_SELF"];?>" class="form-horizontal">
    
    <div class="col-xs-8 col-xs-offset-4">
      <h2>Change your password</h2>
    </div>  

    <div class="form-group">
          <label class="control-label col-md-4" for="password">New Password<span class="required" style="color:red;">*</span>
                      </label>
                  <div class="col-md-4">
                  <input type="password" name="new_pass" id="new_pass" placeholder="Enter your password"  required="required" class="form-control col-md-7 col-xs-12" >
                      </div>
                      </div>
                        <div class="form-group">
                      <label class="control-label col-md-4" for="password">Confirm New Password<span class="required" style="color:red;">*</span>
                      </label>
                  <div class="col-md-4">
                  <input type="password" name="new_pass" id="new_pass" placeholder="Enter your password"  required="required" class="form-control col-md-7 col-xs-12" >
                      </div>
                  </div>  
       
              <button type="submit" class="btn btn-info btn-lg" name="update"><i class="glyphicon glyphicon-save"></i>Update</button>



              

            </form>
          </div>