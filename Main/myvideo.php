<?php require '../connect.php';
$conn= Connect();
?>

<!DOCTYPE html>
<html lang="en">

<?php 

include '../fixed_bar.php'; 
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MedLibrary</title>
    <!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="style11.css"  media="all" />

<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="slick/slick.min.js"></script>  



     <!--<link type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">-->
  <!--<link href="css/custom.css" rel="stylesheet">-->
     </head>

<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">All Videos</li>
			</ol>
		</div>
	</div>
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>Recently Added Videos</h3>
				<div class="agile_top_brands_grids">
				
				<?php
				extract($_GET);

				$sql = "SELECT * FROM video order by date_added DESC LIMIT 6";
							$result = mysqli_query($conn, $sql);
							if(mysqli_num_rows($result) > 0)
							{

 						 while($row = mysqli_fetch_assoc($result)){

 						 		$id = $row['video_id'];

								echo
									
							
							'
					<div class="col-md-4 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href=""><video class="video-size" width="200px" controls><source src="../upload/'.$row['videoFile'].'" alt=" " type="video/mp4"></video></a>				
												<p>'.$row['video_title'].'</p>
												<div class="stars">
													<i class="fa fa-group" aria-hidden="true"> '.$row['artiste'].'</i>
													
												</div>
													<h4><i style="margin-left:8px;" class="fa fa-bookmark">'.$row['status'].'</i></h4>
											</div>

											
											<div class="snipcart-details top_brand_home_details">
														<button class="btn btn-primary"><a target ="_self" href="'.$row['videoFile'].'" style="text-decoration:none;color:white;">Watch Video</a></button>
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

							}
								
								?>	

					
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<a href="../user-login.php"style="background:none;">
              <button class="btn btn-danger pull-right"><i class="fa fa-print"></i>For more videos</button>
              </a>

