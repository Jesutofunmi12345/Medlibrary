<?php include ('header.php'); ?>

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

$user_query  = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' ") or die(mysqli_error());
$user_row =mysqli_fetch_array($user_query);
//$user_type  = $user_row['user_type'];

?>
					
                            <li>
							<a href="add_admin.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-plus"></i> Add Admin</button>
							</a>
							</li>
				
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                       
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
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
							$result= mysqli_query($conn,"SELECT * FROM admin WHERE email='$email'") or die (mysql_error());
							while ($row= mysqli_fetch_array ($result) ){
							$email=$row['email'];
							$id=$row['id'];
							?>
							<tr>
								<td>
									<?php if($row['admin_image'] != ""): ?>
									<img src="../upload/<?php echo $row['admin_image']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
									<?php else: ?>
									<img src="img/user.png" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
									<?php endif; ?>	
								</td> 
								<td><?php echo $row['fname']; ?></td> 
								<td><?php echo $row['lname']; ?></td>
							<!---	<td><?php // echo $row['admin_type']; ?></td>	-->
								<td>
									<a class="btn btn-primary" for="ViewAdmin" href="view_admin.php<?php echo '?admin_id='.$id; ?>">
										<i class="fa fa-search"></i>
									</a>
									<a class="btn btn-warning" for="ViewAdmin" href="edit_admin.php<?php echo '?id='.$id; ?>">
										<i class="fa fa-edit"></i>
									</a>
									<a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
										<i class="glyphicon glyphicon-trash icon-white"></i>
									</a>
			
									<!-- delete modal admin -->
									<div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Admin</h4>
										</div>
										<div class="modal-body">
												<div class="alert alert-danger">
													Are you sure you want to delete?
												</div>
												<div class="modal-footer">
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
												<a href="delete_admin.php<?php echo '?admin_id='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
												</div>
										</div>
										</div>
									</div>
									</div>
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

