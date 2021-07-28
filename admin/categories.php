<?php
//session_start();
include 'header.php';
if(!isset($_SESSION['login_user1'])){
header("location:access-denied.php"); //Redirecting to myrestaurant Page
}
?>

<?php  ?>

<div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home /</small>Categories
                </h3>
            </div>
        </div>
        <!--<div class="clearfix"></div>-->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><br></h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

        				<!--<div id="page-wrapper">-->
                    


                     <div class="x_content">
            <div class="container-fluid">
           

                

                
                <div class="row">
                  <div class="col-md-5">
                    <p>Add new category here</p>
                      <form method="POST" action="add_health_category1.php">
                      <br style="clear: both">
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" name="cname" placeholder="Your Health category" required="">
                        </div>
                        <div class="form-group">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD HEALTH CATEGORY</button>    
                    </div>
                   </form>

                    <br><br>
                      <?php 
                                    if (isset($_GET['fmessage'])) {
                                      echo '<div class="alert alert-danger">The health category has been added before</div>';
                                    }
                                  ?>
                                  <?php 
                                    if (isset($_GET['smessage'])) {
                                      echo '<div class="alert alert-success">You have successfully added a health category</div>';
                                    }
                                  ?>
                  </div>
                  <div class="col-md-1"></div>
                      <div class="col-md-6">
                        <table class="table">
                          <h4><center>Top Categories</center></h4>
                      <tr>
                        <td>ID</td>
                        <td>E-LIBRARY CATEGORY</td>
                        <td>ACTION</td>

                      </tr>
          
                    <?php
                    $user_check=$_SESSION['login_user1'];
                    $sql = "SELECT * FROM category ORDER BY category_id ASC ";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                      extract($row);
                    ?>
                    <tr>
                      <td><?php echo $row['category_id'];?></td>
                      <td><?php echo $row["category_name"];?></td>
                      <td>
                      <?php echo '<a  class="btn btn-danger" href="delete_health_category.php?id='.$category_id.'"> DELETE</a>' ;  ?> 

                          
                      </td>
                    </tr>
                  <?php    }
                    ?>
                    </table>

                    </div>
                  </div>

                  

                </div>
            
            <!-- /.container-fluid -->

        <!--</div>-->
        <!-- /#page-wrapper -->
 
</div>
</div>
</div>
</div>
</div>