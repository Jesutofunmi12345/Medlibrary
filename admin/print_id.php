
<?php
//session_start();
include 'header.php';

if(!isset($_SESSION['login_user1'])){
header("location:access-denied.php"); //Redirecting to myrestaurant Page
}
?>

<?php 
require "vendor/autoload.php";
if(!isset($_COOKIE['id']) && $_COOKIE['email']){ header('location:index.php');
      exit;}
  

$serial="0001";
$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = $Bar->getBarcode($serial, $Bar::TYPE_CODE_128);
 ?>

<div class="page-title">
            <div class="title_left">
                <h3>
          <small>Home /</small>Print ID Card
                </h3>
            </div>
        </div>
        <!--<div class="clearfix"></div>-->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><br></h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!--<div id="page-wrapper">-->
                    


                     <div class="x_content">
            <div class="container-fluid">
           

                
<?php
/*session_start();
include("db_connect.php");
*/
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Print ID card</title>
<style>
  body{
		  	/*background:#008080;*/
		  }
#bg {
  width: 1000px;
  height: 450px;
 
  margin:60px;
 	float: left; 
 		
}

#id {
  width:250px;
  height:450px;
  position:absolute;
  opacity: 0.88;
font-family: sans-serif;

		  	transition: 0.4s;
		  	background-color: #FFFFFF;
		  	border-radius: 2%;
		}

#id::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: url('images/malawi.png');   /*if you want to change the background image replace logo.png*/
  background-repeat:repeat-x;
  background-size: 250px 450px;
  opacity: 0.2;
  z-index: -1;
  text-align:center;
 
}
 .container{
		  	font-size: 12px;
		  	font-family: sans-serif;
		    
		  }
		 .id-1{
		  	transition: 0.4s;
		  	width:250px;
		  	height:450px;
		  	background: #FFFFFF;
		  	text-align:center;
		  	font-size: 16px;
		  	font-family: sans-serif;
		  	float: left;
		  	margin:auto;		  	
		  	margin-left:270px;
		  	border-radius:2%;

		  	
		  }
</style>
	</head>
<?php 
include_once("connect.php");

$sqluse ="SELECT * FROM admin WHERE id=1 ";
$retrieve = mysqli_query($conn,$sqluse);
    $numb=mysqli_num_rows($retrieve); 
	while($foundk = mysqli_fetch_array($retrieve))
	                                     {
                        $profile= $foundk['admin_image'];
											  $name = $foundk['email'];
		                                  }
?>
	<body>
		<script type="text/javascript">	
 		
 	window.print();
 </script>
 
      <div id="bg">
            <div id="id">
            	 <table>
        <tr><td>
        	<?php if($numb!=0 ){
                                    if($profile!=""){echo"<img src='../upload/$profile'  width='70px' height='70px' alt=''>";}
									else{
										 echo"<img src='img/love.png' alt='Avatar'  width='70px' height='70px'>";
									    }	   
                               }
                                ?>
        	</td>
        <td><h3><b>MedLibrary</b></h3></td>
       </tr>        
    </table><center>
        <?php  

        if(isset($_GET['id'])){
        $idx= $_GET['id'];

         
      } 

     //$idx = $_GET['id'];
      //require 'connect.php';
      //$conn=Connect();
      $sqlmember ="SELECT * FROM admin WHERE email='$email' ";
			     $retrieve = mysqli_query($conn,$sqlmember);
				                    $count=0;
                     while($found = mysqli_fetch_array($retrieve))
	                 {
                       $firstname=$found['fname'];$lastname=$found['lname'];$gender=$found['gender'];
                       $id=$found['id']; $email=$found['email'];
			                $count=$count+1;  $get_time=$found['reg_date']; $time=time();
                      $names=$firstname." ".$lastname;
						  $profile= $found['admin_image'];
					 }  	 

             	 	
             	 	if($profile!=""){          
										   echo"<img src='../upload/$profile' height='175px' width='200px' alt='' style='border: 2px solid black;'>";	   
									    }
								else{
									echo"<img src='admin/img/user.png' height='175px' width='200px' alt='' style='border: 2px solid black;'>";	   
														     	
									} 
             	 	 ?>   </center>              <div class="container" align="center">
      
      	<p style="margin-top:2%">Name</p>
      	<p style="font-weight: bold;margin-top:-4%"><?php echo $row['fname']." ".$row['lname']; ?></p>
      	<p style="margin-top:-4%">Email</p>
      	<p style="font-weight: bold;margin-top:-4%"><?php echo $row['email']; ?></p>
       <p style="margin-top:-4%">VERCODE:</p>
        <p style="font-weight: bold;margin-top:-4%">24632</p>
      	<p style="margin-top:-4%">Gender:</p>
      	<p style="font-weight: bold;margin-top:-4%"><?php echo $row['gender']; ?></p>      	
      	<p style="margin-top:-4%">HOLDER SIGNATURE</p>
              
      </div>
            </div>
            <div class="id-1">
    	 
                     	 <!--<center><img src="images/malawi.png" alt="Avatar" width="200px" height="175px" > -->      
       <div class="container" align="center">
      <p style="margin:auto">The bearer whose photograph appears overleaf is a member of</p>
      	<h2 style="color:#00BFFF;margin-left:2%">MedLibrary </h2>
      <p style="margin:auto">If lost and found please return</p>
        <hr align="center" style="border: 1px solid black;width:80%;margin-top:13%"></hr> 

      	<p align="center" style="margin-top:-2%">Authorised Signature</p>
      		<p> <?php if(isset($code)){ echo$code;}?>
      			</p>
      		 <?php if(isset($name)){ echo"Property of ".$name;}?> </center>
     </div>
</div>

        </div>
	</body>
</html>
