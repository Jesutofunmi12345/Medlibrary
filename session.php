<?php 
session_start();
if (!isset($_SESSION['id'])){
header('location:customer_page.php');
}
$id_session=$_SESSION['id'];
?>