<?php
session_start();
require_once('mysqli.php');
$sql_e = "SELECT * from car where trimid='".$_GET['trimid']."'";
$res_e = mysqli_query($mysqli1, $sql_e);
//$row=$res_e->fetch_row();
$row="";
if($res_e && mysqli_num_rows($res_e) > 0)
{
    foreach($res_e as $row){}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <!-- Bootstrap Styles-->
    <link href="static/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="static/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="static/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="static/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="static/js/Lightweight-Chart/cssCharts.css"> 

<style>
    .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  body{
      overflow:hidden;
  }
</style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar" ></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#myPage" style="color:red;">TESLA</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <!-- Links -->
                <ul class="nav navbar-nav navbar-right">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item " style="background-color:green;">
                    <a class="nav-link" href="<?php echo "payment.php?trimid=".$_GET['trimid'] ?>">BUY NOW</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href=""><i class="fa fa-dashboard"></i> Model: <?php echo $row['MODEL']?></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-usd"></i>Cost: $<?php echo $row['COST'] ?></a>
                    </li> 
					 
					 <li>
                        <a href="#"><i class="fa fa-calendar"></i> Production Year: <?php echo $row['PRODUCTION_YEAR'] ?></a>
                        	
							
                    <li>
                        <a href=""><i class="fa fa-pencil"></i>Color: <?php echo $row['INTERIOR_COLOR'] ?></a>
                    </li>
                    
                    <li>
                        <a href=""><i class="fa fa-pencil"></i> Exterior color: <?php echo $row['EXTERIOR_COLOR'] ?></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-inbox"></i>Roof: <?php echo $row['ROOF'] ?> </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-globe"></i> Auto-pilot: <?php echo $row['AUTOPILOT'] ?></a>
                        
                    </li>
                    <li>
                        <a href=""><i class="fa fa-arrow-up"></i>Acceleration: <?php echo $row['ACCELERATION'] ?> km/s<sup>2</sup></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-sort-numeric-asc"></i>Range: <?php echo $row['RANGE'] ?> mi</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-tachometer"></i>Speed: <?php echo $row['SPEED'] ?> mph</sup></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-arrow-up"></i>Ludicrous: <?php echo $row['LUDICROUS'] ?></sup></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-check-circle"></i>Premium Connectivity: <?php echo $row['PREMIUM_CONNECTIVITY'] ?></sup></a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper" style = "background-color:#5e5e5e;">
		  <div class="header"> 
                        <p style = "color:white;font-family: Montserrat, sans-serif;font-size:50px;opacity:0.8;">
                            <?= $row['MODEL'] ?>
                        </p>
          </div>
          <br>
          <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['IMG'] ).'" style="padding-left:2%;max-width:100%;"/>'; ?>
	 
   

</body>
</html>