<?php 
session_start();
include ('user_header.php'); 
 $db = mysqli_connect('localhost', 'root', '', 'fct_library');
$query=mysqli_query($db,"SELECT  * from users where user_type='student'") or die(mysqli_error());
$row=mysqli_fetch_array($query);
$_SESSION["user_type"]=$row['user_type'];
?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home /</small> Send Message
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                    <div class="clearfix"></div>
                    <div class="x_content">
                        <!-- content starts here -->
 <form method="post" action="" enctype="multipart/form-data" class="form-horizontal form-label-left">

	<div class="table-responsive">

							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								<tr>
									<td>
								<div class="col-md-4">
									<select class="select2_single form-control" name="dusername">
										<?php
										$db = mysqli_connect('localhost', 'root', '', 'fct_library');
										$query=mysqli_query($db, "select * from users where user_type= 'admin' ") or die (mysqli_error());
										while($row=mysqli_fetch_array($query))
										{
											?><option>
												<?php echo $row["firstname"]."(".$row["school_id"].") Admin"; ?>
												</option>
												<?php
											}
											?>
										</select>
									</div>


									</td> </tr>
									<tr><td>
										<div class="col-md-4">
                                        <input type="text" name="title" placeholder="Enter Title" id="last-name2" class="form-control col-md-7 col-xs-12"></div>
                                    </td>
                                </tr>
                                <tr>
                                	<td>
                                    <div class="col-md-4">
                                        <textarea name="msg" class="form-control" placeholder= "Enter your message"></textarea>
                                    </div>
                                </td>
                        </tr>

                        <tr>
                        	<td>
                         <button type="submit" name="submit" class="btn btn-success">Submit</button>
                     </td></tr>

                                    </div>
							</table>
</div>
 </form>
						
				
				<?php 
				if(isset($_POST["submit"]))
					
				{
	$db = mysqli_connect('localhost', 'root', '', 'fct_library');
	$query =  mysqli_query($db, "SELECT * from users WHERE user_type ='student' && INSERT INTO messages values('', '{$_SESSION['user_type']}',
	 '{$_POST["dusername"]}', '{$_POST["title"]}', '{$_POST["msg"]}', 'n' ") or die(mysqli_error());
						$row=mysqli_fetch_array($query);
						$_SESSION["user_type"] = $row['user_type'];

				
					echo "<script> alert('Message sent successfully!'); window.location='admin_dashboard.php'</script>";

					?>

				<?php } ?>		
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>