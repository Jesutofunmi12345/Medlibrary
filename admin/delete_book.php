<?php
require 'connect.php';
$conn=Connect();
//$db = mysqli_connect('localhost', 'root', '', 'fct_library');
if(isset($_GET['book_id']))
{
	$book_id =$_GET['book_id'];
mysqli_query($conn, "delete from book where book_id= $book_id") or die (mysqli_error());
?>
<script>
	window.location="book.php";
</script>
<?php
}
else{
?>
<script type= "text/javascript">
window.location="book.php";
</script>
<?php
}