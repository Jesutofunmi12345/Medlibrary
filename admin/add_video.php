<?php include ('header.php'); 
?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home / Video /</small> Add Video
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-plus"></i> Add Video</h2>
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
            if (isset($_POST['submit1']))
            {
                 $maxsize='314572800'; // 300MB
            $target_dir="../upload/";

            $videoFile=$target_dir.basename($_FILES ["videoFile"]["name"]); 

            // Select file type
            $videoFileType = strtolower(pathinfo($videoFile,PATHINFO_EXTENSION));
             $extensions_arr = array("mp4","avi","3gp","mov","mpeg");
             // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['videoFile']['size'] >= $maxsize) || ($_FILES["videoFile"]["size"] == 0)) {
            echo "File too large. File must be less than 300MB.";
          }else{
            // Upload



            if(move_uploaded_file($_FILES["videoFile"]["tmp_name" ] , $videoFile)) {

        $result =mysqli_query($conn, "INSERT INTO video(video_title,artiste,status,videoFile,date_added)
        VALUES('{$_POST["video_title"]}','{$_POST["artiste"]}','{$_POST["status"]}','{$videoFile}', NOW())") or die(mysqli_error());

        


           /* echo "Video uploaded success"; 
           header("location: video.php");*/
                    }
           
                }
            }

                else{
                    echo "error in upload";
                }
            }
                  
?>

                    <div class="x_content">
                        <!-- content starts here -->

                    <form method="post" action="add_video.php" enctype="multipart/form-data" class="form-horizontal form-label-left">

							
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Title <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="video_title" id="first-name2"  required="required" class="form-control col-md-7 col-xs-12" >
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
                                    <label class="control-label col-md-4" for="last-name">Import Video
                                    </label>
                                    <div class="col-md-4">
                                        <input type="file" style="height:44px;" name="videoFile" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <a href="video.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i>Cancel</button></a>
                    <input type="submit" name="submit1" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
							
            

            
             
           
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

