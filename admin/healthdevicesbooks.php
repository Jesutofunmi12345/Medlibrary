<?php include ('header.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home /</small> E-Books
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
							<a href="book_print5.php" target="_blank" style="background:none;">
							<button class="btn btn-danger pull-right"><i class="fa fa-print"></i> Print Books List</button>
							</a>
							<br />
							<br />
                    <div class="x_title">
                        <h2><i class="fa fa-book"></i> Book List</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
							<a href="add_book.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-plus"></i> Add Book</button>
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
							<ul class="nav nav-pills">
								<li role="presentation" ><a href="book.php">All</a></li>
								<li role="presentation" ><a href="pharmbooks.php">Pharmaceuticals & Related Segments</a></li>
								<li role="presentation" ><a href="healthinsurebooks.php">Health insurance, Health services</a></li>
								<li role="presentation" class="active"><a href="healthdevicesbooks.php">Health devices and equipments</a></li>
								<li role="presentation"><a href="healthcarebooks.php">Health care services and facilities</a></li>
								
							</ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr>
									<th style="width:100px;">Book Image</th>
									<th>Title</th>
									<th>Author/s</th>
									<th>Category</th>
									<th>View</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							
							<?php
							//$db = mysqli_connect('localhost', 'root', '', 'fct_library');
							$result= mysqli_query($conn ,"SELECT * FROM book where status = 'Health devices and equipments'") or die (mysqli_error());
							while ($row= mysqli_fetch_array ($result) ){
							$book_id=$row['book_id'];
							?>
							<tr>
								<td>
								<?php if($row['book_image'] != ""): ?>
								<img src="<?php echo $row['book_image']; ?>" class="img-thumbnail" width="700px" height="500px">
								<?php else: ?>
								<img src="images/book_image.jpg" class="img-thumbnail" width="75px" height="50px">
								<?php endif; ?>
								</td>  <!--- either this <td><a target="_blank" href="view_book_barcode.php?code=<?php // echo $row['book_barcode']; ?>"><?php // echo $row['book_barcode']; ?></a></td> -->
								<td style="word-wrap: break-word; width: 10em;"><?php echo $row['book_title']; ?></td>
								<td style="word-wrap: break-word; width: 10em;"><?php echo $row['author']."<br />".$row['author_2']."<br/>"; ?></td>
								<td><?php echo $row['status']; ?></td> 
								<td><a target = '_self' href="bookcounts.php?id=<?=$row['book_id']?>" >Read Book</a></td>
								<td>
									<a class="btn btn-primary" for="ViewAdmin" href="view_book.php<?php echo '?book_id='.$id; ?>">
										<i class="fa fa-search"></i>
									</a>
									<a class="btn btn-warning" for="ViewAdmin" href="edit_book.php<?php echo '?book_id='.$id; ?>">
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
									<a class="btn btn-danger"  Onclick="return ConfirmDelete();" for="DeleteAdmin" href="delete_book.php<?php echo '?book_id='.$book_id;?>" data-toggle="modal" data-target="delete_book.php<?php echo '?book_id='.$book_id;?>">
										<i class="glyphicon glyphicon-trash icon-white"></i>
									</a>
									<!--		<a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
										<i class="glyphicon glyphicon-trash icon-white"></i>
									</a>
			
							 delete modal user -->
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
												<a href="delete_user.php<?php echo '?book_id='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
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

<?php include ('footer.php'); ?>