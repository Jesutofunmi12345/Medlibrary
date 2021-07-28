<?php 
//session_start();
include ('user_header.php'); 
 $db = mysqli_connect('localhost', 'root', '', 'fct_library');
$query=mysqli_query($db,"SELECT  * from users where user_type='student'") or die(mysqli_error());
$row=mysqli_fetch_array($query);

$_SESSION["user_type"]=$row['user_type'];
?>

        <div class="page-title">
            <div class="title_left">
                <h3>
          <small>Home /</small>Change your Password
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <!--<div class="x_title">
                    <div class="clearfix"></div>-->
                    <div class="x_content">
      
      <!--<style type="text/css">

  body{
    color:#999;
    background:#f3f3f3;
  }

  .panel-body{
    width: 500px;
    margin: 0 auto;
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
    border-color: 3px solid darkblue; /* Whatever Colour you want */
}
.navbar .navbar-collapse {
  border-top: 0;
}
.navbar-brand{
  font-family:cursive;
  font-size: 25px;
  margin-left: 25px;
}

.navbar-header >a:link {
  text-decoration: none;
  color: #4259f4;
}
.navbar .nav > li > a{
       color:#ffe6e6;
       }
      .navbar .nav > li > a:hover{
        color:#000000;
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
       border-top:5px solid red;
       margin-top: 150px;

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

</style>-->
<body>
	 <div class="wrapper">
      
<?php 
      $db = mysqli_connect('localhost', 'root', '', 'fct_library'); 
      $password = $row['password'];
      if (isset($_POST['update'])) {

  $query=mysqli_query($db,"SELECT  * from users where password='$password' && user_id='$id_session'") or die(mysqli_error());
    $row=mysqli_fetch_array($query);

    if (mysqli_num_rows($query) > 0) { 
     mysqli_query($db, "UPDATE users SET password='{$_POST['new_pass']}' where user_id = '$id_session'") or die(mysqli_error());
        echo "<script> alert('Successfully Update Password!'); </script>";
      }
      else{
        echo "problem" ;
      }

         } 
      ?>


      <div class="signup-form">
    <form method="post" action= "<?php echo $_SERVER["PHP_SELF"];?>" class="form-horizontal">
    
    <div class="col-xs-8 col-xs-offset-4">
      <h2>Change your password</h2>
    </div>  

    <div class="form-group">
          <label class="control-label col-md-4" for="password">New Password<span class="required" style="color:red;">*</span>
                      </label>
                  <div class="col-md-4">
                  <input type="password" name="new_pass" id="new_pass" placeholder="Enter your password"  required="required" class="form-control col-md-7 col-xs-12" >
                      </div>
                  </div>  
       
              <button type="submit" class="btn btn-info btn-md" name="update"><i class="glyphicon glyphicon-save"></i>Update</button>



              

            </form>
          </div>