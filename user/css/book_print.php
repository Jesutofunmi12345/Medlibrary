<?php 
$db = mysqli_connect('localhost', 'root', '', 'fct_library');

?>
<html>

<head>
		<title>Library Management System</title>
		
		<style>
		
		
.container {
	width:100%;
	margin:auto;
}
		
.table {
    width: 100%;
    margin-bottom: 20px;
}	

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
}

@media print{
#print {
display:none;
}
}

#print {
	width: 90px;
    height: 30px;
    font-size: 18px;
    background: white;
    border-radius: 4px;
	margin-left:28px;
	cursor:hand;
}
		
		</style>
		
<script>
function printPage() {
    window.print();
}
</script>
		
</head>


<body>
	<div class = "container">
		<div id = "header">
		<br/>
				<img src = "images/logo.jpeg" style = " margin-top:-17px; float:left; margin-left:115px; margin-bottom:-6px; width:100px; height:100px;">
				<img src = "images/logo4.jpg" style = " margin-top:-17px; float:right; margin-right:115px; width:100px; height:100px;" >
				<center><h5 style = "font-style:Calibri"></h5>&nbsp; &nbsp;&nbsp; Zinox Technologies Ltd &nbsp;	&nbsp; </center>
				<center><h5 style = "font-style:Calibri; margin-top:-14px;"></h5> &nbsp; &nbsp; E-library System</center>
				<center><h5 style = "font-style:Calibri; margin-top:-14px;"></h5> ZSTREAM</center>
			<button type="submit" id="print" onclick="printPage()">Print</button>	
			<p style = "margin-left:30px; margin-top:50px; font-size:14pt; font-weight:bold;">All Book List&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <div align="right">
		<b style="color:blue;">Date Prepared:</b>
		<?php include('currentdate.php'); ?>
        </div>			
		<br/>
		<br/>
		<br/>
<?php
							$result= mysqli_query($db, "select * from book order by book_id DESC ") or die (mysqli_error());
?>
						<table class="table table-striped">
						  <thead>
								<tr>
								<tr>
									<th>Barcode</th>
									<th>Title</th>
									<th>Author</th>
									<th>ISBN</th>
									<th>Publication</th>
									<th>Publisher</th>
									<th>Copyright</th>
									<th>Category</th>
								</tr>
								</tr>
						  </thead>   
						  <tbody>
<?php
							while ($row= mysqli_fetch_array ($result) ){
							$id=$row['book_id'];
?>
							<tr>
								<td	style="text-align:center;"><?php echo $row['book_barcode']; ?></td>
								<td	style="text-align:center;"><?php echo $row['book_title']; ?></td>
								<td	style="text-align:center;"><?php echo $row['author']; ?></td>
								<td	style="text-align:center;"><?php echo $row['isbn']; ?></td>
								<td	style="text-align:center;"><?php echo $row['book_pub']; ?></td>
								<td	style="text-align:center;"><?php echo $row['publisher_name']; ?></td>
								<td	style="text-align:center;"><?php echo $row['copyright_year']; ?></td> 
								<td	style="text-align:center;"><?php echo $row['status']; ?></td>  
							</tr>
							
							<?php 
							}					
							?>
						  </tbody> 
					  </table> 

<br />
<br />
							<?php
								$db = mysqli_connect('localhost', 'root', '', 'fct_library');
								include('session.php');
								$user_query=mysqli_query($db,"select * from users where user_type= 'admin' ")or die(mysqli_error());
								$row=mysqli_fetch_array($user_query); 
								$user_type=$row['user_type'];
								{
							?>        

							<h2><i class="glyphicon glyphicon-user"></i> <?php echo '<span style="color:blue; font-size:15px;">Prepared by:'."<br /><br /> ".$row['firstname']." ".$row['lastname']." ".'</span>';?></h2>
								<?php } ?>


			</div>
	
	
	
	

	</div>
</body>


</html>