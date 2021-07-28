	
		<?php include ('header.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home /</small> Video
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
							<a href="#" target="_blank" style="background:none;">
							<button class="btn btn-danger pull-right"><i class="fa fa-print"></i> Print Video List</button>
							</a>
							
						
							<br />
							<br />
                    <div class="x_title">
                        <h2><i class="fa fa-book"></i> Video List</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
							<a href="add_video.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-plus"></i> Add Video</button>
							</a>
							</li>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
							<ul class="nav nav-pills">
								<li role="presentation" class="active"><a href="video.php">All</a></li>
								<li role="presentation" ><a href="#">Pharmaceuticals & Related Segments</a></li>
								<li role="presentation"><a href="#">Health insurance, Health services</a></li>
								<li role="presentation"><a href="#">Health devices and equipments</a></li>
								<li role="presentation"><a href="#">Health care services and facilities</a></li>
								
							</ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr>
									<th>Title</th>
									<th>Artiste/s</th>
									<th>Category</th>
									<th>Watch</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							
							<?php
							$result= mysqli_query($conn, "SELECT * FROM video ORDER BY video_id DESC ") or die (mysqli_error());
							while ($row= mysqli_fetch_array ($result) ){
							$video_id=$row['video_id'];
							
							?>
							<tr>
								
							 <!--- either this <td><a target="_blank" href="view_book_barcode.php?code=<?php // echo $row['book_barcode']; ?>"><?php // echo $row['book_barcode']; ?></a></td> -->

								<td style="word-wrap: break-word; width: 10em;"><?php echo $row['video_title']; ?></td>
								<td style="word-wrap: break-word; width: 10em;"><?php echo $row['artiste']; ?></td>
								<td><?php echo $row['status']; ?></td> 
								<td><a target ='_self' href ="<?php echo $row['videoFile']; ?>"> Watch</a></td>

								<td>
									<a class="btn btn-primary" for="ViewAdmin" href="view_video.php<?php echo '?video_id='.$video_id; ?>">
										<i class="fa fa-folder-open"></i>
									</a>
									<a class="btn btn-warning" for="ViewAdmin" href="edit_video.php<?php echo '?video_id='.$video_id; ?>">
									<i class="fa fa-edit"></i>
									</a>
									<script>
    				function ConfirmDelete()
    				{
      			var x = confirm("Are you sure you want to delete?");
     			 if (x)
          return true;
      else
        return false;
    }
		</script>

		<a class="btn btn-danger"  Onclick="return ConfirmDelete();" for="DeleteAdmin" href="delete_video.php<?php echo '?video_id='.$video_id;?>" data-toggle="modal" data-target="delete_video.php<?php echo '?video_id='.$video_id;?>">
										<i class="glyphicon glyphicon-trash icon-white"></i>
									</a>

										<!--<a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php //echo $id;?>" data-toggle="modal" data-target="#delete<?php //echo $id;?>">
										<i class="glyphicon glyphicon-trash icon-white"></i>
									</a>
								-->
			
									<!-- delete modal user -->
									<div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> User</h4>
										</div>
										<div class="modal-body">
												<div class="alert alert-danger">
													Are you sure you want to delete?
												</div>
												<div class="modal-footer">
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
												<a href="delete_user.php<?php echo '?video_id='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
												</div>
										</div>
										</div>
									</div>
									</div>
								</td> 
							</tr>
							<?php }
							 ?>
							</tbody>
							</table>
						</div>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>



        </div>


