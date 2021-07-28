<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MedLibrary</title>

    <!-- Bootstrap core CSS -->

    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">

    <link href="../admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../admin/css/animate.min.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="../admin/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../admin/css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="../admin/css/icheck/flat/green.css" rel="stylesheet" />
    <link href="../admin/css/floatexamples.css" rel="stylesheet" type="text/css" />
    <link href="../admin/css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
    <!-- select2 -->
    <link href="css/select/select2.min.css" rel="stylesheet">
    

    <!-- Custom styling plus plugins -->
    <link href="../admin/css/custom.css" rel="stylesheet">
    <link href="../admin/css/icheck/flat/green.css" rel="stylesheet">
    <!-- ion_range -->
    <link rel="stylesheet" href="../admin/css/normalize.css" />
    <link rel="stylesheet" href="../admin/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="../admin/css/ion.rangeSlider.skinFlat.css" />

    <!-- colorpicker -->
    <link href="../admin/css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    
    <!-- ion_range -->
    <link rel="stylesheet" href="../admin/css/normalize.css" />
    <link rel="stylesheet" href="../admin/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="../admin/css/ion.rangeSlider.skinFlat.css" />
    <link id="bootstrap-style" href="../admin/css/slide.css" rel="stylesheet">
    <!-- Bootstrap --> 
       <link rel="stylesheet" type="text/css" href="../admin/css/DT_bootstrap.css">

        <script src="../admin/js/jquery.min.js"></script>    
        <script src="../admin/js/bootstrap.min.js"></script>

        <script src="../admin/js/jquery.js" type="text/javascript"></script>

        <script src="../admin/js/bootstrap.js" type="text/javascript"></script>
        
        <script type="text/javascript" charset="utf-8" language="javascript" src="../admin/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8" language="javascript" src="../admin/js/DT_bootstrap.js"></script>
        <script src="../admin/js/nprogress.js"></script>
       
    <script>
        NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style type="text/css">

  .nextTime{
            font-family: cursive;
            font-size:  50px;
            font-weight: bold;
            text-align:center;
            color: gray;
             margin-left: 10px;

  }
</style>

</head>


<body class="nav-md">
<?php  
//$db = mysqli_connect('localhost', 'root', '', 'fct_library'); ?>
<?php //require('session.php'); ?>


    <div class="container body">
        <div class="main_container">

			<?php include ('user_sidebar.php'); ?>
				<?php include ('user_top_nav.php'); ?>
				
					<!-- page content -->
					<div class="right_col" role="main">
						<div class="">
                        