<?php
//$db = mysqli_connect('localhost', 'root', '', 'fct_library');
//include('session.php');
require 'connect.php';
$conn=Connect();
$email= $row['email'];
$logout_query=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
$row=mysqli_fetch_array($logout_query);
$user=$row['firstname']." ".$row['lastname'];
session_start();
session_destroy();

header('location:index.php');

?>