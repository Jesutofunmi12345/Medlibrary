<?php include ('header.php'); 
?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home / Books /</small> Add Book
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-plus"></i> Add Book</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>


            <?php
            //$db = mysqli_connect('localhost', 'root', '', 'fct_library');
            if (isset($_POST['submit']))
            {
            $target_dir="../upload/";

            $target_file=$target_dir.basename($_FILES ["bstore"]["name"]);
            if(move_uploaded_file($_FILES["bstore"]["tmp_name" ] , $target_file)) {
            
            $book_image=$target_dir.basename($_FILES["book_image"]["name"]);
                     if(move_uploaded_file($_FILES["book_image"]["tmp_name"], $book_image))
               {

    $query=mysqli_query($conn,"INSERT INTO book
        ( book_title,author,author_2,book_pub,publisher_name,isbn,copyright_year,status,book_image,bstore,date_added)
    VALUES('{$_POST["book_title"]}','{$_POST["author"]}','{$_POST["author_2"]}','{$_POST["book_pub"]}','{$_POST["publisher_name"]}','{$_POST["isbn"]}','{$_POST["copyright_year"]}','{$_POST["cname"]}','{$book_image}','{$target_file}', NOW())") or die(mysqli_error());
        
        
             } 
 

        }
        
        else 
                {
                    echo "error in upload";
                } 

} 

                

                                
?>

                    <div class="x_content">
                        <!-- content starts here -->

                            <form method="post" action="add_book.php" enctype="multipart/form-data" class="form-horizontal form-label-left">

							 <!--<div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Barcode <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                            <input type="text" name="new_barcode" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div> -->
							
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Book Title <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="book_title" id="first-name2"  required="required" class="form-control col-md-7 col-xs-12" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 1 <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author" id="first-name2"  required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 2
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_2" id="first-name2" class="form-control col-md-7 col-xs-12" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Publication
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="book_pub" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Publisher
                                    </label>
                                    <div class="col-md-4">
                        <input type="text" name="publisher_name" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">ISBN <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                        <input type="text" name="isbn" id="last-name2" class="form-control col-md-7 col-xs-12"required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Copyright
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="copyright_year" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Category <span class="required" style="color:red;">*</span>
                                    </label>
									<div class="col-md-4">
                                        <!--<select name="status" class="select2_single form-control" tabindex="-1" required="required">
											<option value="New">Choose Category</option>
											<option value="Education">Education</option>
											<option value="Arts & Social Sciences">Arts & Social Sciences</option>
											<option value="Languages">Languages</option>
											<option value="Vocational Education">Vocational Education</option>
											<option value="Technical Education">Technical Education</option>
                                            <option value="Sciences">Sciences</option>
                                        </select>-->

                                        <select class="select2_single form-control" name="cname" style="height: 50px;" tabindex="-1" required="required">
                                          <?php 
                                            $catsql = "SELECT * FROM category";
                                            $catresult = mysqli_query($conn, $catsql);
                                            while ($catfetch = mysqli_fetch_assoc($catresult)) {
                                              extract($catfetch);
                                              echo '<option value="'.$category_name.'">'.$category_name.'</option>';
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
                                <input type="submit" name="submit" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
							
            

            
             
           
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

