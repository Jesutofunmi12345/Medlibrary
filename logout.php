<?php
$db = mysqli_connect('localhost', 'root', '', 'fct_library');
include('session.php');

$logout_query=mysqli_query($db,"SELECT * FROM users WHERE user_type='admin'");
$row=mysqli_fetch_array($logout_query);
$user=$row['firstname']." ".$row['lastname'];
session_start();
session_destroy();

header('location:index.php');

?>