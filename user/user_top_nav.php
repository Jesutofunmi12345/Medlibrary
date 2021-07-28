
            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <?php include('clock.php'); ?>

                        <ul class="nav navbar-nav navbar-right">
<?php
	   
      $email=$_SESSION['login_user3'];
      //$email = $row['email'];
        
       $user_query= mysqli_query($conn, "SELECT * FROM users WHERE email='$email'")or die(mysqli_error());
       $row = mysqli_fetch_array($user_query); 
        /*$user_type=$row['user_type'];
        $id=$row['user_id'];*/
    {
?>
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    
									<?php if($row['user_image'] != ""): ?>
									<img src="upload/<?php echo $row['user_image']; ?>">
									<?php else: ?>
									<img src="images/user.png">
									<?php endif; ?>	<?php echo $row['firstname']; ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                  
                                    <li>
										<a href="user_profile.php"><i class="fa fa-user pull-right"></i> Profile</a>
                                    </li>
                                   <li>
										<a href="user_changepass.php"><i class="glyphicon glyphicon-edit pull-right"></i>Change Password</a>
                                    </li> 
                                    <li>
										<a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            
<?php } ?>

<?php

            $db = mysqli_connect('localhost', 'root', '', 'fct_library');
                /*$tot=0;*/
            $result= mysqli_query($db,"SELECT `dusername` FROM `messages` 
            WHERE `id`=(SELECT `id` FROM `users` WHERE `user_type`='admin')") or die(mysqli_error());
                       
                        $tot=mysqli_num_rows($result);
                        $user_type = $row['user_type'];

                         ?>

        
                         <li role="presentation" class="dropdown">
                            <a href="admin_message.php" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              <i class="fa fa-bell-o"></i>
                               <span class="badge-bg-green" onclick="window.location='admin_message.php';"><?php echo $tot; ?></span>
                           </a>
                       </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->