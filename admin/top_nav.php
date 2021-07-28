
            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">

                            <a id="menu_toggle">
                            <i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
<?php
	//$db = mysqli_connect('localhost', 'root', '', 'fct_library');
     $email=$_SESSION['login_user1'];
	   $user_query= mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'")or die(mysqli_error());
	   $row = mysqli_fetch_array($user_query); 
        //$user_type=$row['user_type'];
                        /*$id=$row['user_id'];*/
    {
?>
                            
                               

                                   <li class="dropdown">  
                                <a class="user-profile dropdown-toggle" data-toggle="dropdown" href="" aria-expanded="false">
                                    
									<?php if($row['admin_image'] != ""): ?>
									<img src="../upload/<?php echo $row['admin_image']; ?>">
									<?php else: ?>
									<img src="img/user.png">
									<?php endif; ?>	<?php echo $row['fname']; ?>
                                    <span class="fa fa-angle-down"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                  
                                    <li>
                                        <a href="admin_profile.php"><i class="fa fa-user pull-right"></i> Profile</a>
                                    </li>
                                   <li>
                                        <a href="changepass.php"><i class="glyphicon glyphicon-edit pull-right"></i>Change Password</a>
                                    </li> 
                                    <li>
                                        <a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>

                            </li>


                            <li>
                            <a href="user_message.php" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                               <i class="fa fa-bell-o"></i> <!--<span class="glyphicon glyphicon-bell"></span>-->
                               <span class="badge-bg-green" onclick="window.location='user_message.php' "></span>
                           </a>
                       </li>

                            
                                  
                                
                         
<?php } ?>
            </ul>
           
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->