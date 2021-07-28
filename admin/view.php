<?php 
//$db = mysqli_connect('localhost', 'root', '', 'fct_library');
require 'connect.php';
$conn=Connect();
		$result= mysqli_query($conn, "SELECT * FROM book ORDER BY book_id DESC") or die (mysqli_error());
		while ($row= mysqli_fetch_array ($result) ){
		$book_id=$row['book_id'];

            						 
$file =  $row['bstore'];
// Header content type 
header('Content-type: application/pdf'); 
  
header('Content-Disposition: inline; filename="' . $file . '"'); 
  
header('Content-Transfer-Encoding: binary'); 
  
header('Accept-Ranges: bytes'); 
  
@readfile($file); 

  }
  
  ?> 