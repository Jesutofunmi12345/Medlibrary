 <style type="text/css">

.info-box {

  min-height: 140px;

  margin-bottom: 30px;

  padding: 20px;

  color: white;

  -webkit-box-shadow: inset 0 0 1px 1px rgba(255, 255, 255, 0.35), 0 3px 1px -1px rgba(0, 0, 0, 0.1);

  -moz-box-shadow: inset 0 0 1px 1px rgba(255, 255, 255, 0.35), 0 3px 1px -1px rgba(0, 0, 0, 0.1);

  box-shadow: inset 0 0 1px 1px rgba(255, 255, 255, 0.35), 0 3px 1px -1px rgba(0, 0, 0, 0.1);

}

.info-box i {

  display: block;

  height: 100px;

  font-size: 60px;

  line-height: 100px;

  width: 100px;

  float: left;

  text-align: center;

  margin-right: 20px;

  padding-right: 20px;

  color: rgba(255, 255, 255, 0.75);

}

.info-box .count {

  margin-top: 20px;

  font-size: 34px;

  font-weight: 700;

}

.info-box .title {

  font-size: 12px;

  text-transform: uppercase;

  font-weight: 600;

}

.info-box .desc {

  margin-top: 10px;

  font-size: 12px;

}

.info-box.danger {

  background: #ff5454;

  border: 1px solid #ff2121;

}

.info-box.warning {

  background: #fabb3d;

  border: 1px solid #f9aa0b;

}

.info-box.primary {

  background: #20a8d8;

  border: 1px solid #1985ac;

}

.info-box.info {

  background: #67c2ef;

  border: 1px solid #39afea;

}

.info-box.success {

  background: #79c447;

  border: 1px solid #61a434;

}

#main-content {

    margin-left:5px;

}

.wrapper {

    display: inline-block;

    margin-top: 30px;

    padding: 10px;

    width: 100%;

}
</style>


 <section id="main-content">
      <section class="wrapper">

              <div class="row">
                <!--<div class="col-md-6">-->
  
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box bg-info">
              <i class="fa fa-user"></i>
              <?php
              $result = mysqli_query($conn,"SELECT * FROM book");
              $num_rows = mysqli_num_rows($result);
              ?>
              <div class="count"><h1><?php echo $num_rows; ?></h1></div>
              <div class="title">Book(s)</div>
            </div>
            <!--/.info-box-->
         </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box bg-warning">
            <?php
              $result = mysqli_query($conn,"SELECT * FROM users");
              $num_rows = mysqli_num_rows($result);
              ?>
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count"><h1><?php echo $num_rows; ?></h1></div>
              <div class="title">Total Users</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box bg-danger">
            <?php
              $result = mysqli_query($conn,"SELECT * FROM audio");
              $num_rows = mysqli_num_rows($result);
              ?>
              <i class="fa fa-shopping-cart"></i>
              <div class="count"><h1><?php echo $num_rows; ?></h1></div>
              <div class="title">Audios</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box bg-success">
            <?php
              $result = mysqli_query($conn,"SELECT * FROM video");
              $num_rows = mysqli_num_rows($result);
              ?>
              <i class="fa fa-cubes"></i>
              <div class="count"><h1><?php echo $num_rows; ?></h1></div>
              <div class="title">Videos</div>
            </div>
            <!--/.info-box-->
          </div>

           </div>

           </section>
           </section>
