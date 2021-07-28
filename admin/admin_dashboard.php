<?php include ('header.php'); ?>
        <div class="clearfix"></div>

        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        swal({
		  title: "Welcome!",
		  text: "You are now logged in!",
		  icon: "success",
		  button: "Ok!",
		});
        </script>
		
                <!-- top tiles -->
                <div class="row tile_count" style="margin-right:-245px;">
					 <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
							<?php
							$email=$_SESSION['login_user1'];
							$result = mysqli_query($conn, "SELECT * FROM admin where email='$email'");
							$num_rows = mysqli_num_rows($result);
							//$user_type=$row['user_type'];
							?>
				<a href="admin_phase.php">
                            <span class="count_top"><i class="fa fa-users"></i> Admin</span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom"> Total of Admin</span>

                        </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
							<?php
							//$email=$_SESSION['login_user3'];
							$result = mysqli_query($conn,"SELECT * FROM users");
							$num_rows = mysqli_num_rows($result);
							//$user_type=$row['user_type'];
							?>
				<a href="user.php">
                            <span class="count_top"><i class="fa fa-male"></i> <i class="fa fa-female"></i> Student & Teacher</span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom">Total of Members</span>							
                        </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
							<?php
							/*$result = mysqli_query($conn, "SELECT * FROM book");
							$num_rows = mysqli_num_rows($result);*/
							?>
				<a href="book.php">
                            <span class="count_top"><i class="fa fa-book"></i> Books</span>
				</a>
                            <!--<div class="count green"><?php echo $num_rows; ?></div>-->
                            <div class="count green">10</div>

							 <span class="count_bottom ">Total of Books</span>                     
					  </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
							<?php
							/*$result = mysqli_query($conn,"SELECT * FROM audio");
							$num_rows = mysqli_num_rows($result);*/
							?>
				<a href="audio.php">
                            <span class="count_top"><i class="fa fa-book"></i>Audio</span>
				</a>
                            <!--<div class="count green"><?php echo $num_rows; ?></div>-->
                            <div class="count green">5</div>
							 <span class="count_bottom ">Total Audios</span>
                        </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                      <div class="left"></div>
                        <div class="right">
							<?php
							$result = mysqli_query($conn,"SELECT * FROM video");
							$num_rows = mysqli_num_rows($result);
							?>
				<a href="video.php">
                            <span class="count_top"><i class="fa fa-book"></i> Video </span>
				</a>
                            <div class="count green"><?php echo $num_rows; ?></div>
							 <span class="count_bottom ">Total Videos</span>							
                        </div>
                    </div>

                </div>
                <!-- /top tiles -->


				
				

<?php include('slide.php'); ?>
				

