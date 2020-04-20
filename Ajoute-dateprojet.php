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

  
  
<!--  TABLE Date de projet -->

          <div class="wrap-input100 validate-input" >
          <label>Date d authentification</label>
          <br>
            <input  type="date" name="dateAuthentif" id="dateAuthentif">
            <span class="focus-input100"></span>
          </div>   


          <div class="wrap-input100 validate-input" >
          <label>Date Disribution </label>
          <br>
            <input  type="date" name="dateDistribut" id="dateDistribut">
            <span class="focus-input100"></span>
          </div>   


          <div class="wrap-input100 validate-input" >
          <label>Date Mark</label>
          <br>
            <input  type="date" name="dateMark" id="dateMark">
            <span class="focus-input100"></span>
          </div>            

        <div class="wrap-input100 validate-input" >
          <label>Date execut</label>
          <br>
            <input  type="date" name="dateExecut" id="dateExecut">
            <span class="focus-input100"></span>
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
       
 

  $req_dateprojet ="INSERT INTO `dateprojet`(`idprojet`, `dateAuthentif`, `dateDistribut`, `dateMark`, `dateExecut`) 
  VALUES (".$IdProjet.",'".$_POST['dateAuthentif']."','".$_POST['dateDistribut']."','".$_POST['dateExecut']."','".$_POST['dateExecut']."')";   
  echo "Req-dateprojet :".$req_dateprojet;           
  mysqli_query($bdd,$req_dateprojet);



   
           


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