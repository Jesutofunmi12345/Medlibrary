<?php 
include ('user_header.php'); 
?>
        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home /</small> Profile Information
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <ul class="nav navbar-right panel_toolbox">
<?php
$email = $row['email'];
$user_query = mysqli_query($conn, "SELECT * FROM users where email='$email' ") or die(mysqli_error());
$user_row =mysqli_fetch_array($user_query);
/*$user_type  = $user_row['user_type'];*/
    $_SESSION['id']=$row['user_id'];


?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr>
									<th>Image</th>
									<th>FirstName</th>
									<th>LastName</th>
								<!---	<th>User Type</th>	-->
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							
							<?php
							$result= mysqli_query($conn,"SELECT * FROM users where email='$email' ") or die (mysqli_error());
							while ($row= mysqli_fetch_array ($result) ){
							$school_id=$row['school_id'];
							/*$user_type  = $user_row['user_type'];*/
    						$_SESSION['id']=$row['user_id'];

							?>
							<tr>
								<td>
									<?php if($row['user_image'] != ""): ?>
									<img src="upload/<?php echo $row['user_image']; ?>" width="300px" height="300px" style="border:4px groove #CCCCCC; border-radius:5px;">
									<?php else: ?>
									<img src="images/user.png" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
									<?php endif; ?>	
								</td> 
								<td><?php echo $row['firstname']; ?></td> 
								<td><?php echo $row['lastname']; ?></td>
							<!---	<td><?php // echo $row['admin_type']; ?></td>	-->
								<td>
									<a class="btn btn-primary" for="ViewAdmin" href="view_user.php<?php echo '?user_id='.$id_session; ?>">
										<i class="fa fa-search"></i>
									</a>
									<a class="btn btn-warning" for="ViewAdmin" href="edit_user.php<?php echo '?user_id='.$id_session; ?>">
										<i class="fa fa-edit"></i>
									</a>
			
									
									
								</td> 
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