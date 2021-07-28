<?php 
include ('header.php');
     
                $user_query = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'")or die(mysqli_error());
                        while ($row= mysqli_fetch_array($user_query) ){
                        //$user_type  = $row['user_type'];
                        $id=$row['id'];
 ?>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-pencil"></i> Edit Admin</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <!-- If needed 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
						-->
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <?php } ?>
                    <div class="x_content">
                        <!-- content starts here -->
<?php
    $email = $_SESSION['login_user1'];
    $query=mysqli_query($conn,"SELECT  * from admin where email='$email'") or die(mysqli_error());
    $row= mysqli_fetch_array($query);
    //$user_type  = $row['user_type'];
  ?>

                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Admin Image
                                    </label>
                                    <div class="col-md-4">
										<a href=""><?php if($row['admin_image'] != ""): ?>
										<img src="<?php echo $row['admin_image']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php else: ?>
										<img src="images/user.png" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php endif; ?>
										</a>
                                        <input type="file" style="height:44px; margin-top:10px;" name="admin_image" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">First Name
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" value="<?php echo $row['fname']; ?>" name="fname11" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Last Name
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" value="<?php echo $row['lname']; ?>" name="lname11" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Password
                                    </label>
                                    <div class="col-md-4">
                                        <input type="password" value="<?php echo $row['pass']; ?>" name="pass11" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Confirm Password
                                    </label>
                                    <div class="col-md-4">
                                        <input type="password" value="<?php echo $row['cpass']; ?>" name="cpass11" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                        <!---        <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Admin Type <span class="required">*</span>
                                    </label>
									<div class="col-md-4">
                                        <select name="admin_type" class="select2_single form-control" required="required" tabindex="-1" >
                                            <option value="<?php // echo $row['admin_type']; ?>"><?php // echo $row['admin_type']; ?></option>
											<option>Admin</option>
											<option>Encoder</option>
                                        </select>
                                    </div>
                                </div>	-->
                                 
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <a href="admin.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="update" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Update</button>
                                    </div>
                                </div>

                            </form>

							
        <?php
        //$db = mysqli_connect('localhost', 'root', '', 'fct_library'); 
        if (isset($_POST['update'])) {
            $email=$_SESSION['login_user1'];

             $target_dir="../upload/";
					$admin_image=$target_dir.basename($_FILES["admin_image"]["name"]);
                     if(move_uploaded_file($_FILES["admin_image"]["tmp_name"], $admin_image)){
							
										
$fname = $_POST['fname11'];
$lname = $_POST['lname11'];
$pass = $_POST['pass11'];
$cpass = $_POST['cpass11'];
//$still_profile = $row['admin_image'];
 $still_profile =$_FILES['admin_image']["name"];

    //$db = mysqli_connect('localhost', 'root', '', 'fct_library'); 
    $query=mysqli_query($conn,"SELECT * from admin where email='$email'") or die(mysqli_error());
    $row=mysqli_fetch_array($query);

if($pass != $cpass)
{
echo "<script>alert('Password do not match!'); window.location='admin_profile.php'</script>";
}
else
{
$query=mysqli_query($conn,"UPDATE admin SET fname='$fname',lname='$lname', pass='$pass',cpass='$cpass', admin_image='$still_profile' WHERE email ='$email'") or die(mysqli_error());

$row= mysqli_fetch_array($query);
echo "<script>alert('Successfully Update Admin Info!'); window.location='admin_dashboard.php'</script>";	
}
						}		
                                    else
										{
                    echo "error in upload";
                } 
										


/*$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
// $admin_type = $_POST['admin_type'];

$result = mysqli_query($db,"select * from users where user_type= 'admin'") or die (mysqli_error());
$row= mysqli_num_rows($result);

if($password != $confirm_password)
{
echo "<script>alert('Password do not match!'); window.location='admin_profile.php'</script>";
}else

{		
mysqli_query($db,"UPDATE users SET firstname='$firstname', lastname='$lastname', school_id='$school_id', password='$password', 
confirm_password='$confirm_password', admin_image='$profile' WHERE  admin_id = '$id' ")or die(mysqli_error());
echo "<script>alert('Successfully Updated Admin Info!'); window.location='admin_phase.php'</script>";
}*/

}

?>
					   
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>
      

