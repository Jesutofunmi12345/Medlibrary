            <!-- sidebar navigation -->
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="admin_dashboard.php" class="site_title"><!--<i class="fa fa-university"></i>--><span>MedLibrary</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
					<a href="admin_profile.php">
                    <div class="profile">
 <?php  
 //$db = mysqli_connect('localhost', 'root', '', 'fct_library');
    require 'connect.php'; 
    $conn=Connect();

        $email=$_SESSION['login_user1'];
        $user_query = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' ") or die(mysqli_error());

    $row=mysqli_fetch_array($user_query);
    /*$id=$row['user_id'];*/
    $email = $row['email'];
{
        ?>
        <div class="profile_pic">
		<?php if($row['admin_image'] != ""): ?>
	<img src="../upload/<?php echo $row['admin_image']; ?>" style="height:65px; width:75px;" class="img-thumbnail profile_img">
	<?php else: ?>
	<img src="img/user.png" style="height:60px; width:70px;" class="img-circle profile_img">
    <?php endif; ?>	
                        </div>

                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php echo $row['fname']; ?></h2>
                        </div>
<?php } ?>
                    </div>
					</a>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
							<h3 style="margin-top:85px;">Main Information</h3>
							<div class="separator"></div>
                            <ul class="nav side-menu">
                                <li>
									<a href="admin_dashboard.php"><i class="fa fa-home"></i> Home</a>
                                </li>
                                
                                <li>
									<a href="user.php"><i class="fa fa-users"></i> Members</a>
                                </li>

                                 <li>
                                    <a href="categories.php"><i class="fa fa-bookmark"></i>Categories</a>
                                </li>
                                <li>
                                    <a href="print_id.php"><i class="fa fa-id-card"></i>ID Card</a>
                                </li>


                                <li>
									<a href="book.php"><i class="fa fa-book"></i> Books</a>
                                </li>

                                <li>
                                    <a href="morebooks.php"><i class="fa fa-cloud-download"></i>More Resources</a>
                                </li>


						<?php
							// if ($user_type != 'Encoder') {
						?>
                                <li>
									<a href="admin_phase.php"><i class="fa fa-user"></i> Admin</a>
                                </li>
							<?php // } ?>
                                <li>
									<a href="user_log_in.php"><i class="fa fa-calendar"></i> Members Attendance</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Other Information</h3>
							<div class="separator"></div>
                            <ul class="nav side-menu">
                                <li>
									<a href="audio.php"><i class="fa fa-music"></i>Audio</a>
                                </li>                               
                                <li>
									<a href="video.php"><i class="fa fa-play-circle"></i>Video</a>
                                </li>
                                <li>
									<a href="message_to_user.php"><i class="fa fa-envelope"></i>Send Message</a>
                                </li>

                                 <li>
                                    <a href="analysis.php"><i class= "fa fa-file"></i>Book Rating</a>
                                </li>

                                <li>
                                    <a href="chart.php"><i class= "fa fa-bar-chart"></i>Reports</a>
                                </li>

                                

                                 <li>
                                    <a href="piechart.php"><i class= "fa fa-bar-chart"></i>Pie Analysis</a>
                                </li>



                               <!-- <li>
									<a href="about_us.php"><i class= "fa fa-info"></i> About Us</a>
                                </li>-->
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
                               <!--- <li>
									<a href="activity_log.php"><i class="fa fa-history"></i> Activity Log</a>
                                </li>-->
                            </ul>
                        </div>

                    </div>
                   
                </div>
            </div>
            <!-- end of sidebar navigation -->