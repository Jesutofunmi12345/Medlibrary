 <div class="row tile_count" style="margin-right:-530px;">


                 <div class="col-md-2 col-sm-2 col-xs-5">
                  <?php
              $result = mysqli_query($conn, "SELECT * FROM book");
              $num_rows = mysqli_num_rows($result);
              ?>
                  <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-book fa-5x"></i>

                            <h3> Books </h3>
                           <?php echo $num_rows; ?> books
                        </div>
                    </div>
             
               <div class="col-md-2 col-sm-2 col-xs-5">
                 <?php
              $result = mysqli_query($conn,"SELECT * FROM users");
              $num_rows = mysqli_num_rows($result);
              //$user_type=$row['user_type'];
              ?>
                      <div class="alert alert-warning back-widget-set text-center">
                            <i class="fa fa-users fa-5x"></i>

                            <h3> Members </h3>
                         <?php echo $num_rows; ?> members joined,
                         <?php /* include('user_online.php');*/ ?>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-5">
                      <?php
              $result = mysqli_query($conn,"SELECT * FROM video");
              $num_rows = mysqli_num_rows($result);
              ?>
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-play-circle fa-5x"></i>

                            <h3> Videos </h3>
                            <?php echo $num_rows; ?> videos
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-5">
                      <?php
              $result = mysqli_query($conn,"SELECT * FROM audio");
              $num_rows = mysqli_num_rows($result);
              ?>
                      <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-music fa-5x"></i>

                            <h3> Audios </h3>
                          <?php echo $num_rows; ?> audios
                        </div>
                    </div>
        </div>