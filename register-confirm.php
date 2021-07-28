<?php include 'fixed_bar.php';
?>

<body style="background: #363C33; color: white; margin-top: 80px;">

<?php

require 'connect.php';
$conn = Connect();

$fname = $conn->real_escape_string($_POST['fname']);
$lname = $conn->real_escape_string($_POST['lname']);
$uname = $conn->real_escape_string($_POST['uname']);
$gender = $conn->real_escape_string($_POST['gender']);
//$contact = $conn->real_escape_string($_POST['contact']);
//$address = $conn->real_escape_string($_POST['address']);
$preferred_cat = $conn->real_escape_string($_POST['preferred_cat']);
$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);
$confirm_pass = $conn->real_escape_string($_POST['confirm_pass']);
$vercode = $conn->real_escape_string($_POST['vercode']);


$rsql = "SELECT * FROM users WHERE email = '$email'";
$rresult = mysqli_query($conn, $rsql);
if (mysqli_num_rows($rresult)==1) {
   header('Location: register-failed.php'); 
 }

  else{

    if($password != $confirm_pass) {
   die("Passwords mixmatch:".$conn->error);
  }

$query = "INSERT into users(firstname,lastname,username,gender,contact,preferred_cat,email,password,confirm_password,vercode,reg_date) VALUES('" . $fname . "','" . $lname . "','" . $uname . "','" . $gender . "','" . $contact . "','" . $preferred_cat. "','" . $email ."','" . $password ."','" . $confirm_pass ."','" . $vercode . "',NOW())";
$success = $conn->query($query);

if (!$success){
  die("Couldn't enter data: ".$conn->error);
}

$conn->close();

?>
   
<?php if($success){

  ?>
<div class="container" style="width:95%; ">


 <div class="container-fluid">
   <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="margin-top:100px;  text-align:center; ">
      <h1><?php echo "Welcome $fname!" ?> </h1>
      <h3>  Your account has been created.</h3>
       <p>Login Now from <a href="Main/index.php">HERE</a></p>
    </div>
   </div>
 </div>

</div>


<?php } }?>
    </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p></p>
  <br>
  </footer>
</html>