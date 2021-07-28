<?php include ('user_header.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home / User Profile</small> / View User
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-info"></i> User Information</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
							<a href="user_profile.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
							</a>
							</li>
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
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
								
							<thead>
								<tr>
									<th>Image</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>School_ID</th>
									<th>Password</th>
									<th>Date Added</th>
								</tr>
							</thead>
							<tbody>
<?php
			   
		if (isset($_GET['user_id']))
		$id=$_GET['user_id'];
		 //$db = mysqli_connect('localhost', 'root', '', 'fct_library');	
	require 'connect.php';
	$conn=$Connect();
		$result1 = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' and id='$id' ") or die(mysqli_error());
		while($row = mysqli_fetch_array($result1)){
		?>
							<tr>
								<td>
									<?php if($row['user_image'] != ""): ?>
									<img src="upload/<?php echo $row['user_image']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
									<?php else: ?>
									<img src="images/user.png" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
									<?php endif; ?>	
								</td> 
								<td><?php echo $row['firstname']; ?></td> 
								<td><?php echo $row['lastname']; ?></td> 
								<td><?php echo $row['school_id']; ?></td> 
								<td><?php echo $row['password']; ?></td> 
								<td><?php echo date("M d, Y h:m:s a", strtotime($row['reg_date'])); ?></td> 
							</tr>
							<?php } ?>
							</tbody>
							</table>
						</div>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>