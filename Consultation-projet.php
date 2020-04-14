<!DOCTYPE html>
<html>
<head>
		<title> Ajouter </title>
		     <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="./vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="./vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./css/util.css">
  <link rel="stylesheet" type="text/css" href="./css/main.css">
<!--===============================================================================================-->


</head>
<header>
 <div style="background: #f2f2f2;"> 
<?php  
include "MenuDesign.php";
?>
</div>
</header>
<body>




  <div class="limiter">
    <div class="container-main100">
      <div class="wrap-main550">




<div class="row justify-content-center">
  


<table class="table">
 <thead>
   <tr>
     <th>Titre de projet </th>
     <th>Description</th>
     <th>Budget</th>
     <th colspan="2">Action</th>
   </tr>


 </thead> 
 
 <?php  


include("database.php");
 $sql = "SELECT * FROM projet";
$result = mysqli_query($bdd,$sql);


while ( $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ) {  ?> 

<tr>
<td><?php echo $row["TitreProjet"];  ?></td>
<td><?php echo $row["Description"];  ?></td>
<td><?php echo $row["Budget"];  ?></td>
</tr>

<?php  
}
?>
 

</table>


</div>


</div>
</div>
</div>





 <!--===============================================================================================-->
  <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="./vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="./vendor/bootstrap/js/popper.js"></script>
  <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="./vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="./vendor/daterangepicker/moment.min.js"></script>
  <script src="./vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="./vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="./js/main.js"></script>	

</body>
</html>