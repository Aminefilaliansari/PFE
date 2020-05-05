<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./css/util.css">
  <link rel="stylesheet" type="text/css" href="./css/main.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
<!--===============================================================================================-->
</head>


<header>
  
<?php  
include "MenuDesign.php";
?>


</header>



<body>


<div>


  <div class="limiter">
    <div class="container-main100">
      <div class="wrap-main-body">
          <span class="main100-form-title p-b-26">
           ACCUEIL
          </span>



<div class="row">


<div class="col-md-6 col-xs-12 col-sm-12">

<!--====   MAP    ==========-->
<div class="map_accueil" >                 
<?php 
include "Map.php";
 ?>
</div>
  
</div>


<div class="col-md-6 col-xs-12 col-sm-12" >

<div class="chart_accueil" >                 
<?php 
include "Chart.php";
 ?>
</div>
     
</div>    

</div>






      </div>
    </div>
  </div>
  

</div>



























<!--===============================================================================================-->
  <script src="./vendor/bootstrap/js/popper.js"></script>
  <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
</body>
</html>