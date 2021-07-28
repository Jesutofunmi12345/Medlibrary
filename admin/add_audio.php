
<?php include ('header.php'); 
?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home / Audio /</small> Add Audio
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-plus"></i> Add Audio</h2>
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


            <?php
            //$db = mysqli_connect('localhost', 'root', '', 'fct_library');
            if (isset($_POST['submit1']))
            {

            $target_dir="../upload/";

            $audioFile=$target_dir.basename($_FILES ["audioFile"]["name"]); 
            if(move_uploaded_file($_FILES["audioFile"]["tmp_name" ] , $audioFile)) {

        $query = mysqli_query($conn, "INSERT INTO audio (audio_title,artiste,status,audioFile)
        VALUES('{$_POST["audio_title"]}','{$_POST["artiste"]}','{$_POST["status"]}','{$audioFile}')") or die(mysqli_error());



           /*$query=mysqli_query($conn, "SELECT FROM audio where audioFile='$audioFile'") or die(mysqli_error());
           mysqli_query($conn, $query);

           while ($row= mysqli_fetch_array ($query) ){

            $audioFile=$row['audioFile']; */

     echo "<script>alert('Successfully Added An Audio'); window.location='audio.php'</script>";
}
             

               
                else{
                    echo "error in upload";
                }
           

                 }       
                    
                    
                    
                    
                    
?>

                    <div class="x_content">
                        <!-- content starts here -->

                    <form method="post" action="add_audio.php" enctype="multipart/form-data" class="form-horizontal form-label-left">

							
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Title <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="audio_title" id="first-name2"  required="required" class="form-control col-md-7 col-xs-12" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Artiste <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="artiste" id="first-name2"  required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Category <span class="required" style="color:red;">*</span>
                                    </label>
									<div class="col-md-4">
                                        <select name="status" class="select2_single form-control" tabindex="-1" required="required">
											 <?php 
                                            $catsql = "SELECT * FROM category";
                                            $catresult = mysqli_query($conn, $catsql);
                                            while ($catfetch = mysqli_fetch_assoc($catresult)) {
                                              extract($catfetch);
                                              echo '<option value="'.$category_name.'">'.$category_name.'</option>';
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Import Audio
                                    </label>
                                    <div class="col-md-4">
                                        <input type="file" style="height:44px;" name="audioFile" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <a href="book.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i>Cancel</button></a>
                    <input type="submit" name="submit1" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
							
            

            
             
           
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

