            <!-- sidebar navigation -->
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="mypage.php" class="site_title"><i class="fa fa-university"></i> <span>MedLibrary</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
					<a href="user_profile.php">
                    <div class="profile">

        <?php  
        //session_start();
        require 'connect.php'; 
        $conn = Connect();

        $email=$_SESSION['login_user3'];

         //$email = $row['email'];
        $user_query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' ") or die(mysqli_error());

            $row=mysqli_fetch_array($user_query);
            /*$id=$row['user_id'];*/
            $email = $row['email'];
        {
        ?>
        <div class="profile_pic">
		<?php if($row['user_image'] != ""): ?>
	<img src="upload/<?php echo $row['user_image']; ?>" style="height:65px; width:75px;" class="img-thumbnail profile_img">
	<?php else: ?>
	<img src="images/user.png" style="height:60px; width:70px;" class="img-circle profile_img">
    <?php endif; ?>	
                        </div>

                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php echo $row['firstname']; ?></h2>
                        </div>
<?php } ?>
                    </div>
					</a>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
							<h3 style="margin-top:85px;">File Information</h3>
							<div class="separator"></div>
                            <ul class="nav side-menu">
                                <li>
									<a href="mypage.php"><i class="fa fa-home"></i> Home</a>
                                </li>
                                <li>
									<a href="user_book.php"><i class="fa fa-book"></i> Books</a>
                                </li>

						<?php
							// if ($user_type != 'Encoder') {
						?>
                                
							<?php // } ?>
                                <li>
									<a href="user_audio.php"><i class="fa fa-music"></i>Audio</a>
                                </li>                               
                                <li>
									<a href="user_video.php"><i class="fa fa-play-circle"></i>Video</a>
                                </li>
                                <li>
                                    <a href="user_morebooks.php"><i class="fa fa-play-circle"></i>More Resources</a>
                                </li>

                                <li>
									<a href="user_sendmessage.php"><i class= "fa fa-envelope"></i>Send Request</a>
                                </li>

                                <script>
    function ConfirmLogout()
    {
      var x = confirm("Are you sure you want to logout?");
      if (x)
          return true;
      else
        return false;
    }
</script>
                                 <li>
                                    <a Onclick="return ConfirmLogout();" href="logout.php"><i class= "fa fa-chevron-circle-left"></i> LogOut</a>
                                </li>

                                <!-- <li>
									<a href="about_us.php"><i class= "fa fa-info"></i> About Us</a>
                                </li>-->
                               <!--- <li>
									<a href="activity_log.php"><i class="fa fa-history"></i> Activity Log</a>
                                </li>-->
                            </ul>
                        </div>

                    </div>
                   
                </div>
            </div>
            <!-- end of sidebar navigation -->