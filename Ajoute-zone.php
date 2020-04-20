<!DOCTYPE html>
<html>
<head>
		<title> Ajouter </title>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./fonts/iconic/css/material-design-iconic-font.min.css">
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
      <div class="wrap-main-body">

<form method="POST">

 <span class="main100-form-title p-b-26">
            Ajouter un projet
          </span>

  
  
<!--  TABLE zone  -->

<span class="label-input100">region</span>
          <div>
            <select class="selection-2" name="region" id="region">
              <option>Region Casa</option>
            </select>
          </div>

<span class="label-input100">Provaince</span>
          <div>
            <select class="selection-2" name="provaince" id="provaince">
              <option>Provaince Casa</option>
            </select>
          </div>
 
 <span class="label-input100">Commune</span>
          <div>
            <select class="selection-2" name="commune" id="commune">
              <option>Commune Casa</option>
            </select>
          </div> 





      
        

		<div class="container-main-form-btn" style=" padding-top: 60px;">
            <div class="wrap-main100-form-btn">
              <div class="main100-form-bgbtn"></div>
              <button type="submit" class="main100-form-btn" name="Validerprojet">
                Ajouter
              </button>
            </div>
          </div>



</form>

</div>
</div>
</div>


<?php
  
  include ("database.php");
  
  






  if (isset($_POST['Validerprojet'])  ) 
{


  $sql = "SELECT IdProjet FROM projet WHERE IdProjet IS NOT NULL ORDER BY IdProjet DESC";  
  $result = mysqli_query($bdd,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
  $IdProjet= $row["IdProjet"];
  echo "ID_PROJET est :".$IdProjet;
       
 

  $req_zone = "INSERT INTO `zone`(`idprojet`, `region`, `provaince`, `commune`) 
  VALUES (".$IdProjet.",'".$_POST['region']."','".$_POST['provaince']."','".$_POST['commune']."')";

  echo "Req-dateprojet :".$req_zone;           
  mysqli_query($bdd,$req_zone);



   
           


   echo "<div class='alert alert-success' role='alert'>
  Le projet est ajouteé avec succèe
</div>";
  }
  
  
  ?>





 <!--===============================================================================================-->
<script src="./vendor/bootstrap/js/bootstrap.js"></script>
<script src="./js/main.js"></script>

</body>
</html>