<?php include('functions.php') ?>
<?php
if(isset($_POST['school_id']) && isset($_POST['password'])){
$school_id = $_POST['school_id'];
$password = md5($_POST['password']);
 login();

if(($school_id=="school_id") && ($password=="password")){
  $_SESSION['user'] = $user_type;
  header("location: new.php");
}
if(($school_id=="school_id") && ($password=="password")){
  $_SESSION['admin'] = $user_type;
  header("location: admin.php");
}
else{
echo ("<p style='color:red;text-align:center'> Invalid Username or Password</p>");  
} 

}

?>