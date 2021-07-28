<?php 
//$db = mysqli_connect('localhost', 'root', '', 'fct_library');
require 'connect.php';
$conn=Connect();

$id = $row['book_id'];
$result= mysqli_query($conn, "SELECT * FROM book where book_id='$id'") or die(mysqli_error());
$row= mysqli_fetch_array ($result);
	
    //$id = $row['book_id'];

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	//$current_counts=$row['book_counts'];
	//$new_count= $current_counts + 1;
	$result = mysqli_query($conn, "UPDATE book SET book_counts = book_counts + 1 WHERE book_id='$id' ") or die(mysqli_error($db));
	
	//<l<>kkheader("location: book.php");
	//echo $current_counts;
	//echo $new_count;

} 
else{
echo "problem";
	# codeec...
}


 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Open Bootstrap Modal on Page Load</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
</head>
<body>
<div id="myModal" class="modal fade" style="text-align: center;">
    <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-header">
            	<h2><strong><a href= "view.php" style="text-decoration-style: none; background-color: grey;">READ BOOK</a></strong></h2>
            </div>
            <div class="modal-body">
            	<h3><a href="user_book.php">Back</a></h3>
            </div>


        </div>
    </div>
</div>
</body>
</html>