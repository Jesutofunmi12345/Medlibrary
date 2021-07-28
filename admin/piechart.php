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
					<small>Home /</small>Pie Analysis
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
           
            <?php
            require "config.php";// Database connection
            
              if($stmt = $connection->query("SELECT preferred_cat, COUNT(preferred_cat) AS totalorder FROM users")){

     echo $not_result['totalorder'] ;

  echo "No of records : ".$stmt->num_rows."<br>";
$php_data_array = Array(); // create PHP array
  echo "<table>
<tr><th>Category</th> <th>Numbers</th></tr>";
while ($row = $stmt->fetch_row()){
echo "<tr><td>$row['0'];</td><td>$row['1']</td></tr>";
  
   $php_data_array[] = $row; // Adding to array
   }
echo "</table>";
}else{
echo $connection->error;
}
//print_r( $php_data_array);
// You can display the json_encode output here. 
echo json_encode($php_data_array); 

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d = ".json_encode($php_data_array)."
</script>";
?>


<div id="chart_div"></div>
<br><br>
<a href="">Pie Chart from MySQL database</a>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
 google.charts.load('current', {'packages':['corechart']});
     // Draw the pie chart when Charts is loaded.
      google.charts.setOnLoadCallback(draw_my_chart);
      // Callback that draws the pie chart
      function draw_my_chart() {
        // Create the data table .
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'language');
        data.addColumn('number', 'Nos');
    for(i = 0; i < my_2d.length; i++)
    data.addRow([my_2d[i][0], parseInt(my_2d[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options = {title:'plus2net.com : How the tutorials are distributed',
                       width:600,
                       height:500};

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
</script>

                  

                </div>
            
            <!-- /.container-fluid -->

        <!--</div>-->
        <!-- /#page-wrapper -->
 
</div>
</div>
</div>
</div>
</div>