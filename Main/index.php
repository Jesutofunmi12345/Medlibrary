<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require '../connect.php';
$conn= Connect();
?>

<!DOCTYPE html>
<html lang="">
<head>
<title>MedLibrary is an E-library platform for the Health Category | Home :: MedLibrary</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholar Vision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->
<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Font-awesome-CSS --> <link href="css/font-awesome.css" rel="stylesheet"> 
<!-- Flex-slider-CSS --><link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- Owl-carousel-CSS --><link href="css/owl.carousel.css" rel="stylesheet">
<!-- Index-Page-CSS --><link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom-Stylesheet-Links -->
<!--web-fonts-->
<!-- Headings-font --><link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
<!-- Body-font --><link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<!--//web-fonts-->
<!--//fonts-->
<!-- js -->
</head>
<body>
<!-- banner -->
<div class="banner" id="home">
	<div class="banner-overlay-agileinfo">
	<div class="top-header-agile">
		<h1><a class="col-md-4 navbar-brand" href="index.html">MedLibrary<span>E-library for the health sector</span></a></h1>
		<!--<div class="col-md-4 top-header-agile-right">
				<ul>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
			</div>-->
			<div class="col-md-4 top-header-agile-left">
				<!--<ul class="num-w3ls">
					<li><i class="fa fa-phone" aria-hidden="true"></i></li>
					<li>+234 816 757 6127</li>
				</ul>-->
				<!--<div class="w3ls_search">
													<div class="cd-main-header">
														<ul class="cd-header-buttons">
															<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
														</ul>  cd-header-buttons 
													</div>
													<div id="cd-search" class="cd-search">
														<form action="#" method="post">
															<input name="Search" type="search" placeholder="Search...">
														</form>
													</div>
												</div>-->
					</div>
			
			<div class="clearfix"></div>
		</div>

		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-3" id="link-effect-3">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php" data-hover="Home">Home</a></li>
							<li><a href="#about" data-hover="About Us">About Us</a></li>
							<!--<li><a href="gallery.html" data-hover="Gallery">Gallery</a></li>-->
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Resources<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="mybook.php">Books</a></li>
									<li><a href="myaudio.php">Audios</a></li>
									<li><a href="myvideo.php">Videos</a></li>

								</ul></li>
				<li><a href="../register2.php"><span class="glyphicon glyphicon-user"></span>Register</li>
				<li><a href="../user_login.php"><span class="glyphicon glyphicon-log-in"></span>Log In</li>
							<!--<li><a href="contact.html" data-hover="Mail Us">Contact Us</a></li>-->
						</ul>
					</nav>
				</div>
			</nav>	

			<div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
    
       <!--Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Log In</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="login_user.php">
          <div class="form-group">
            <label class="control-label" for="school_id">Username</label>
            <input class="form-control" name="uname" id="uname" type="text" placeholder="Username" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="password">Password</label>
            <input class="form-control" name="password" id="password" type="password"  placeholder="Password" required>
            <span class="help-block">Forgot your password? <a href="forgotpass.php">Click here</a></span>
          </div>
          <div class="checkbox">
            <label class="control-label" for="rememberMe">
              <input type="checkbox" name="rememberMe" id="rememberMe" value="1">
              Remember me</label>
          </div>

          <div class="row">
            <div class="col-sm-offset-4 col-sm-4">
              <input type="submit" name="login_u" class="btn btn-success btn-md btn-block">
            </div>
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

			<div class="w3l_banner_info">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="wthree_banner_info_grid">
									<h3><span>Hello!</span>Welcome to <br>MedLibrary</h3>
									<p>The convenient and affordable online platform giving you easy access to a wide range of quality health books</p>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3><span>Genius!</span>Reliable books<br>that satisfies Information Overload</h3>
									<p>Great Library Platform</p>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3><span>Relax!</span>Explore <br>Our Resources</h3>
									<p>Your child can be a genius</p>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3><span>Hello!</span>Our Repository<br> is easy to navigate for everyone</h3>
									<p>Medlibrary is a virtual library...Gives room for simplicity</p>
								</div>
							</li>
						</ul>
					</div>
				</section>
						
			</div>			
		</div>
	</div>
</div>
<!-- //banner -->	
<!-- about -->
	<div class="about-w3layouts">
		<div class="container">
			<div class="col-md-6 col-sm-6 gallery-grids agileits w3layouts gallery-grids1 wow slideInLeft">
				<!--<div class="gallery-grid-images agileits w3layouts">
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-1 history-grid-image">
						<img src="images/a1.jpg" alt="Agileits W3layouts" class="zoom-img">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-2 history-grid-image">
						<img src="images/a2.jpg" alt="Agileits W3layouts" class="zoom-img">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-3 history-grid-image">
						<img src="images/a3.jpg" alt="Agileits W3layouts" class="zoom-img">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-4 history-grid-image">
						<img src="images/a4.jpg" alt="Agileits W3layouts" class="zoom-img">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-5 history-grid-image">
						<img src="images/a5.jpg" alt="Agileits W3layouts" class="zoom-img">
					</div>
					<div class="col-md-4 col-sm-4 gallery-grid gallery-grid-6 history-grid-image">
						<img src="images/a6.jpg" alt="Agileits W3layouts" class="zoom-img">
					</div>
					<div class="clearfix"></div>
				</div>-->
				</div>
			<div class="col-md-6 col-sm-6">
				<strong>SIMPLICITY</strong>
				<span class="pull-right">100%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
					</div>
				<strong>FLEXIBILITY</strong>
				<span class="pull-right">80%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
					</div>
				<strong>ROBUST AND SAFE</strong>
				<span class="pull-right">70%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
					</div>
			</div>
			</div>

			<div id="about" class="col-md-6 col-sm-6 gallery-grids agileits w3layouts gallery-grids2 wow slideInRight">
				<h2 class="tittle-agileits-w3layouts">About Our MedLibrary</h2>
				<h5>WHAT DO WE DO</h5>
				<p class="para-w3-agile">MedLibrary is an e-library that offers some facilities to aid individuals passionate about the health sector. It gives room for simplicity and a good learning proces for all</p>
				<p class="para-w3-agile">It is developed by an undergraduate of the prestigious University of Ilorin, Ilorin. It offers a lot of services when you become a registered member. Feel free and Get started.</p>
				<a href="../register2.php" class="button-w3layouts hvr-rectangle-out">know more</a>
			</div>
			<div class="clearfix"></div>
			
		</div>
	</div>
	

<div class="newproducts-w3agile">
		<div class="container">
			<h3>Recently Added Books</h3>
				<div class="agile_top_brands_grids">
				
				<?php
				extract($_GET);

				$sql = "SELECT * FROM book ORDER BY date_added DESC LIMIT 3";
							$result = mysqli_query($conn, $sql);
							if(mysqli_num_rows($result) > 0)
							{

 						 while($row = mysqli_fetch_assoc($result)){

 						 		$id = $row['book_id'];

								echo
									
							
							'
					<div class="col-md-4 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								
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
														<button class="btn btn-primary"><a target ="_self" href="../bookcounts.php?id='.$row['book_id'].'" style="text-decoration:none;color:white;">Read Book</a></button>
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
<!-- //new -->
<div class="contact">
		<div class="container">
			<h3 class="tittle-agileits-w3layouts">Get in touch</h3>
			<div class="agile_banner_bottom_grids">
				<div class="col-md-4 w3_agile_contact_grid">
					<div class="col-xs-4 agile_contact_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 agile_contact_grid_right agilew3_contact">
						<h4>Social Media</h4>
						<p><i class="fa fa-twitter" aria-hidden="true"></i>Follow on Twitter</p>
						<p><i class="fa fa-facebook" aria-hidden="true"></i>Follow on Facebook</p>
						<!--<p><i class="fa fa-linkedin" aria-hidden="true"></i>Follow on Linkedin</p>-->
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3_agile_contact_grid">
					<div class="col-xs-4 agile_contact_grid_left agileits_w3layouts_left">
						<i class="fa fa-mobile" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 agile_contact_grid_right agileits_w3layouts_right">
						<h4>Phone</h4>
						<p>+234 816 757 6127<span>+234 708 0480 667</span></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3_agile_contact_grid">
					<div class="col-xs-4 agile_contact_grid_left ">
						 <i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 agile_contact_grid_right ">
						<h4>Email</h4>
						<p><a href="mailto:info@example.com">medlibrary@gmail.com</a>
							<span><a href="mailto:info@example.com">info@medlibrary.com</a></span></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>

			</div>
			</div>
<!-- Register -->
<div class="register-wthree">
	<div class="container">
	<div class="col-md-6 regstr-l-w3-agileits">
	<h3 class="tittle-agileits-w3layouts white-w3ls">Get more <span>resources for free</span></h3>
	<h4>Register Now</h4>
	<!--timer-->
     		<section class="examples">
					<div class="simply-countdown-losange" id="simply-countdown-losange"></div>
					<div class="clear"></div>
				</section>
				<div class="clearfix"></div>
	<!--//timer-->
	</div>
	<!--<div class="col-md-6 regstr-r-w3-agileits">
	<div class="form-bg-w3ls">
		<h3>Fill the register form</h3>
		<p class="para-w3-agile white-w3ls">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		<form action="#" method="post">
			<input type="text"  name="Name" placeholder="Full name" required="" />
			<input type="email"  name="Email" placeholder="Email" required="" />
			<select class="form-control">
				<option>Select a course</option>
				<option>Philosophy</option>
				<option>Contemporary Art</option>
				<option>Geometry Course</option>
			</select>
			<input type="submit" value="Submit" class="button-w3layouts hvr-rectangle-out">
		</form>	
	</div>
	</div>-->
	<div class="clearfix"></div>
	</div>
</div>
<!-- //Register -->


<!--footer-->
	<div class="footer w3layouts">
		<div class="container">
			<div class="footer-row w3layouts-agile">
				<div class="col-md-4 footer-grids w3l-agileits">
					<h6><a href="index.html">MedLibrary</a></h6>
					<p class="footer-one-w3ls">Welcome to MedLibrary, a convenient and flexible library that gives easy access to health Resources. </p>
					<div class="top-header-agile-right">
						<ul>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-2 footer-grids w3l-agileits">
					<h3>Menu</h3>					
					<ul class="b-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#" >Resources</a></li>
						<li><a href="#">Register</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grids w3l-agileits">
					<h3>Contact Info</h3>
					<p>MedLibrary</p>
					<p>+234 816 7576 127</p>
					<p>Ilorin, Nigeria</p>
					<p><a href="mailto:info@example.com">medlibrary@gmail.com</a></p>
				</div>
				<!--<div class="col-md-3 footer-grids w3l-agileits">	
					<h3>Newsletter</h3>
					<p>It was popularised in the 1960s with the release Ipsum. <p>
					 <form action="#" method="post">		 
							<input type="email" class="text" required="" />
							<input type="submit" value="Go" />					 
				     </form>
				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--//footer-->	
<!-- copy-right -->
			<div class="copyright-wthree">
				<p>&copy; 2020 MedLibrary. All Rights Reserved | Design by  JayTee Digital</p>
			</div>
<!-- //copy-right -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

	
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- flexSlider -->
							<script defer src="js/jquery.flexslider.js"></script>
							<script type="text/javascript">
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
						  </script>
<!-- //flexSlider -->
<!-- requried-jsfiles-for owl -->
 <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->
<!-- Countdown-Timer-JavaScript -->
			<script src="js/simplyCountdown.js"></script>
			<script>
				var d = new Date(new Date().getTime() + 948 * 120 * 120 * 2000);

				// default example
				simplyCountdown('.simply-countdown-one', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate()
				});

				// inline example
				simplyCountdown('.simply-countdown-inline', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					inline: true
				});

				//jQuery example
				$('#simply-countdown-losange').simplyCountdown({
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					enableUtc: false
				});
			</script>
		<!-- //Countdown-Timer-JavaScript -->


<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->


 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>