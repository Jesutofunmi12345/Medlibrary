<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MedLibrary</title>

     <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
      <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
     <link type="text/css" href="css/custom.css" rel="stylesheet">
      <script src="jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      
      <style type="text/css">

  body{
    color:#999;
    background:#f3f3f3;
  }

  .panel-body{
    width: 500px;
    
    }

  .carousel-inner{
    height: 500px;
  }

  .navbar-default .navbar-toggle .icon-bar {
      background-color: #fff;
      margin:0 0 4px;
      width: 25px;
      height: 5px;

 }
 .navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: 3px solid red; /* Whatever Colour you want */
}
.navbar .navbar-collapse {
  border-top: 0;
}
.navbar-brand{
  font-family:cursive;
  font-size: 25px;
  margin-left: 25px;
}

.navbar-header {
    background: #f5b120;
}

.navbar-header >a:link {
  text-decoration: none;
  color: #4259f4;
}
.navbar .nav > li > a{
       color:#ffe6e6;
       }
      .navbar .nav > li > a:hover{
        color:skyblue;
        }

  /*.carousel-inner,.item{
    font-size:30px;
    letter-spacing:3px;
    font-family: verdana;
  }*/

.container-fluid{
  height:70px;
}

          /*.navbar-brand{
            font-family:cursive;
            font-size: 25px;
            margin-left: 25px;
          }

          .navbar-header >a:link {
            text-decoration: none;
            color: #4259f4;
          }

          .carousel-caption{
              left: 15%;
              right: 15%;
              padding-top: 20px;
              padding-bottom: 20px;
              color: red;
            }*/

    .footer-section {
      padding:10px;
       color: gray;
       font-size:13px;
       font-weight: bold;
       background-color: #f7f7f7;
       text-align:right;
       border-top:5px solid #f5b120;
       margin-top: 100px;

}
 .footer-section a, .footer-section a:hover {
        color:#000;
    }
   .col-sm-4 .img-rounded{
    	float:left;
    	height:200px;
    	width:200px;
    	margin-left:30px;
    	margin-top: 20px;
    }
    .col-sm-8{
    	margin-top:40px;
    	font-family:cursive;
    	font-size: 18px;
    }
    .row{
    	max-width: 100%;
    }

</style>
<body>
	 <div class="wrapper">

    <nav class="navbar navbar-default bg-info text-white" role= "navigation">
   <div class= "container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
      <a class="navbar-brand" href="index.php">MedLibrary</a>
    </div>
   <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home</a></li>
                    <!--<li><a href="#">About Us</a></li>-->
                   <!-- <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>-->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Explore<span class="caret"></span></a> <!--<i class="icon-angle-down"></i></a>-->
                        <ul class="dropdown-menu">
                            <li><a href="mybook.php">Books</a></li>
                            <li><a href="myaudio.php">Audios</a></li>
                            <li class="divider"></li>
                            <li><a href="myvideo.php">Videos</a></li>
                        </ul>
                    </li>
                    <li><a href="register2.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="user_login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
        
                </ul>
            </div>
        </div>
      </nav>