<?php
include ('header.php');
//$db = mysqli_connect('localhost', 'root', '', 'fct_library');
//require 'connect.php';
//$conn=Connect();
$user_query = mysqli_query($conn, "SELECT * FROM book order by book_id DESC")or die(mysqli_error());
while ($row= mysqli_fetch_array($user_query) ){
    $id = $row['book_id'];

}
?>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-pencil"></i> Edit Book</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <!-- If needed 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
						-->
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
<?php
//$db = mysqli_connect('localhost', 'root', '', 'fct_library');
$user_query = mysqli_query($conn, "SELECT * FROM book order by book_id DESC") or die(mysqli_error()); 
$row= mysqli_fetch_array($user_query);
 $id  = $row['book_id'];
  ?>

                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Book Image
                                    </label>
                                    <div class="col-md-4">
										<a href=""><?php if($row['book_image'] != ""): ?>
										<img src="<?php echo $row['book_image']; ?>" width="200px" height="200px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php else: ?>
										<img src="images/book_image.jpg" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
										<?php endif; ?>
										</a>
                                        <input type="file" style="height:44px; margin-top:10px;" name="image" id="last-name2" class="form-control col-md-7 col-xs-12" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Title
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="book_title" value="<?php echo $row['book_title']; ?>" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 1
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author" id="first-name2" value="<?php echo $row['author']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 2
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_2" id="first-name2" value="<?php echo $row['author_2']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Publication
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="book_pub" value="<?php echo $row['book_pub']; ?>" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Publisher
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">ISBN
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="isbn" id="last-name2" value="<?php echo $row['isbn']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Copyright
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Category
                                    </label>
									<div class="col-md-4">
                                        <select class="select2_single form-control" name="cname" style="height: 50px;" tabindex="-1" required="required">
                                          <?php 
                                            $catsql = "SELECT * FROM category";
                                            $catresult = mysqli_query($conn, $catsql);
                                            while ($catfetch = mysqli_fetch_assoc($catresult)) {
                                              extract($catfetch);
                                              echo '<option value="'.$category_name.'"> '.$category_name.'</option>';
                                            }
                                        ?>
                                        </select><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Book Image
                                    </label>
                                    <div class="col-md-4">
                                        <input type="file" style="height:44px;" name="book_image" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Import Book
                                    </label>
                                    <div class="col-md-4">
                                        <input type="file" style="height:44px;" name="bstore" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <a href="book.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="update11" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Update</button>
                                    </div>
                                </div>
                            </form>
							
<?php
//$db = mysqli_connect('localhost', 'root', '', 'fct_library');

if (isset($_POST['update11'])) {

            $size = '10000000';


				$target_dir="../upload/";

            $target_file=$target_dir.basename($_FILES ["bstore"]["name"]);
            if(move_uploaded_file($_FILES["bstore"]["tmp_name" ] , $target_file)) {
            
            $book_image=$target_dir.basename($_FILES["book_image"]["name"]);
                     if(move_uploaded_file($_FILES["book_image"]["tmp_name"], $book_image))
							{
										
					$book_title=$_POST['book_title'];
					$author=$_POST['author'];
					$author_2=$_POST['author_2'];
					$book_pub=$_POST['book_pub'];
					$publisher_name=$_POST['publisher_name'];
					$isbn=$_POST['isbn'];
					$copyright_year=$_POST['copyright_year'];
					$status=$_POST['cname'];
                    $book_image = $row['book_image'];
                    $target_file = $row['bstore'];

$user_query= mysqli_query($conn,"UPDATE book SET book_title='$book_title', author='$author', author_2='$author_2',book_pub='$book_pub', publisher_name='$publisher_name', isbn='$isbn', copyright_year='$copyright_year', status='$status', book_image='$book_image', bstore='$target_file' WHERE book_id = '$id' ")or die(mysqli_error());

$row= mysqli_fetch_array($user_query);
echo "<script>alert('Successfully Updated Book Info!'); window.location='book.php'</script>";	

									}
                                }
                                else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
								

                      

}

}
?>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>