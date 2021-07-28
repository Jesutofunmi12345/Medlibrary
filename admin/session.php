<?php 
session_start();
if (!isset($_SESSION['login_user1'])){
header('location:../index.php');
}
$id_session=$_SESSION['login_user1'];
?>