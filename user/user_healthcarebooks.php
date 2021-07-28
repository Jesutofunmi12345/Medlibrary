
<?php include ('user_header.php'); ?>

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
							
							<br />
							<br />
                    <div class="x_title">
                        <h2><i class="fa fa-book"></i> Book List</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <!--<li>
							<a href="add_book.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-plus"></i> Add Book</button>
							</a>
							</li>-->
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
							<ul class="nav nav-pills">
								<li role="presentation" ><a href="user_book.php">All</a></li>
								<li role="presentation" ><a href="user_pharmbooks.php">Pharmaceuticals & Related Segments</a></li>
								<li role="presentation" ><a href="user_healthinsurebooks.php">Health insurance, Health services</a></li>
								<li role="presentation" ><a href="user_healthdevicesbooks.php">Health devices and equipments</a></li>
								<li role="presentation" class="active"><a href="user_healthcarebooks.php">Health care services and facilities</a></li>
								
							</ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <!-- content starts here -->
                       

	<div class="agile_top_brands_grids">

				<?php
				extract($_GET);

				 if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 9;
        $offset = ($pageno-1) * $no_of_records_per_page;

        /*$conn=mysqli_connect("localhost","my_user","my_password","my_db");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }*/

        $total_pages_sql = "SELECT COUNT(*) FROM book WHERE status='Health care services and facilities'";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

         $sql = "SELECT * FROM book WHERE status='Health care services and facilities' LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){

				echo
									
							
							'
					<div class="col-md-4 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href=""><img style="display: block; margin: auto; height: 115px; width: 170px;" title=" " alt=" " src="../upload/'.$row['book_image'].'"></a>				
												<p>'.$row['book_title'].'</p>
												<div class="stars">
													<i class="fa fa-group" aria-hidden="true"> '.$row['author'].'</i>
													
												</div>
													<h4>'.$row['publisher_name'].' <i style="margin-left:8px;" class="fa fa-bookmark">'.$row['status'].'</i></h4>
											</div>

											
											<div class="snipcart-details top_brand_home_details">
														<button class="btn btn-primary"><a target ="_self" href="bookcounts.php?id='.$row['book_id'].'" style="text-decoration:none;color:white;">Read Book</a></button>
											</td>
											</div>
		
										</div>

									</figure>

								</div>


							</div>
						</div>

					</div>'
										;
										?>

										<?php
							}
								
								?>	

								

					




						<div class="clearfix"> </div>
				</div>
<nav class="numbering">
					<ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
				</nav>



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

        