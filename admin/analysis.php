
<?php include ('header.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home /</small> Analyze Books
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
							<a href="#" target="_blank" style="background:none;">
							<button class="btn btn-danger pull-right"><i class="fa fa-print"></i> Print Report List</button>
							</a>
							<br />
							<br />
                    <div class="x_title">
                        <h2><i class="fa fa-book"></i> Report Table</h2>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <!-- content starts here -->
                       

						<div class="table-responsive">

							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr>
									<th>Book-Title</th>
									<th>Category</th>
									<th>Book Views</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
							
							<?php
							//$db = mysqli_connect('localhost', 'root', '', 'fct_library');
							//require 'connect.php';
							//$conn=Connect();
							$result= mysqli_query($conn, "SELECT * FROM book ORDER BY book_id DESC ") or die (mysqli_error());
							while ($row= mysqli_fetch_array ($result) ){
							$book_id=$row['book_id'];
            						
?>
							<tr>


								<td><?php echo $row['book_title']; ?></td>
								<td><?php echo $row['status']; ?></td> 
								<td><?php echo $row['book_counts']; ?></td> 
								<td><?php echo $row['date_added']; ?></td> 

								

							
							</tr>
							

  

							<?php 

								}

							 ?>
								
					</tbody>
							</table>
						</div>

	<?php
 /* $db = mysqli_connect('localhost', 'root', '', 'fct_library');
 $find_counts= mysqli_query($db, "SELECT * from book WHERE bstore= '$bstore' order by book_id DESC") or die(mysqli_error());
	while($row =mysqli_fetch_array($find_counts))
{
	$bstore= $row['book_counts'];
	$new_count = $bstore + 1;
	$update_count = mysqli_query($db, "UPDATE 'book' SET 'book_counts' = $new_count");
	
	}*/
	?>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>



        </div>

        