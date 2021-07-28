<?php
//session_start();
include 'header.php';
if(!isset($_SESSION['login_user1'])){
header("location:access-denied.php"); //Redirecting to myrestaurant Page
}
?>


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
            <!-- Including FusionCharts JavaScript file -->
        <script type="text/javascript" src="js/fusioncharts.js"></script>

          <?php 
    include("fusioncharts/fusioncharts.php");

$hostdb = "localhost";  // MySQl host
$userdb = "root";  // MySQL username
$passdb = "";  // MySQL password
$namedb = "fct_library";  // MySQL database name


$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);


if ($dbhandle->connect_error) {
  exit("There was an error with your connection: ".$dbhandle->connect_error);
}

?>

<html>
   <head>
      <title>Dynamic Data Visualization with PHP and MySQL</title>
      <script src="js/fusioncharts.js"></script>
   </head>
   
   <body>

<?php
  

  $strQuery = "SELECT COUNT(book_counts),status FROM book; ";

  $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

  if ($result) {
            
    $arrData = array(
        "chart" => array(
            "caption"=> "Analysis of Book Views with Categories",
            "subCaption"=> "(All Categories)",
            "captionFontColor"=> "#fff",
            "captionFontBold"=> "0",
            "captionFontSize"=> "20",
            
            // x and y axes configuration options
            "xAxisName"=> "Total Views",
            "xAxisNameFontSize"=> "18",
            "xAxisNameFontBold"=> "0",
            "yAxisName"=> "Categories",
            "yAxisNameFontSize"=> "18",
            "yAxisNameFontBold"=> "0",
            
            // general chart configuration options
            "baseFont"=> "Open Sans",
            "paletteColors"=> "#06A69E",
            "plotFillAlpha"=> "90",
            "usePlotGradientColor"=> "0",
            "numberPrefix"=> "$",
            "bgcolor"=> "#17153F",
            "bgalpha"=> "95",
            "canvasbgalpha"=> "0",
            "basefontcolor"=> "#F7F3E7",
            "showAlternateHGridColor"=> "0",
            "divlinealpha"=> "50",
            "divlinedashed"=> "0",
            "rotateyaxisname"=> "1",
            "canvasbordercolor"=> "#ffffff",
            "canvasborderthickness"=> ".3",
            "canvasborderalpha"=> "100",
            "showValues"=> "0",
            "plotSpacePercent"=> "8",
            "labelFontSize"=> "15",
            "outCnvBaseFontSize"=> "13",
            "showLimits"=> "0",
            
            // tooltip configuration options
            "toolTipBgColor"=> "#000",
            "toolTipPadding"=> "12",
            "toolTipBorderRadius"=> "3",
            "toolTipBorderThickness"=> "1",
            "toolTipBorderColor"=> "#ccc",
            "toolTipBgAlpha"=> "70"
                )
            );

            $arrData["data"] = array();

    
            while($row = mysqli_fetch_array($result)) {
                array_push($arrData["data"], array(
                    "label" => $row["book_counts"],
                    "value" => $row["status"]
                    )
                );
            }   
    
            $jsonEncodedData = json_encode($arrData);
            
             $columnChart = new FusionCharts("column2d", "expenseChart" , "100%", "500", "column-chart", "json", $jsonEncodedData);
             $columnChart->render();
             
             $dbhandle->close();
           
         }

 
?>
    <center>
 <div id="column-chart">Awesome Chart on its way!</div></center>
   </body>
</html>
                 </div>
            
            <!-- /.container-fluid -->

        <!--</div>-->
        <!-- /#page-wrapper -->
 
</div>
</div>
</div>
</div>
</div>