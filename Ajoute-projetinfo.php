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



<NAV></NAV>
  
<!--  TABLE  projet -->

           <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="TitreProjet" id="TitreProjet" placeholder="Titre de projet *" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="typeprojet" id="typeprojet" placeholder="Type projet *"  required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="sujetprojet" id="sujetprojet" placeholder="Sujet de projet *" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="textprojet" id="textprojet" placeholder="Text de projet*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="objectifprojet" id="objectifprojet" placeholder="Objectif du projet*" required>
            <span class="focus-input100"></span>
          </div> 

          
          
            <div class="row  justify-content-center" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Specialite projet : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="specialiteprojet" id="specialiteprojet" >
              <option>Personnelle</option>
              <option>Commune</option>
            </select>
          </div>
         </div>


          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="champprojet" id="champprojet" placeholder="champ de projet*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="indicenrprojet" id="indicenrprojet" placeholder="Indicenrprojet*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="voteprojet" id="voteprojet" placeholder="Vote projet*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="normeExcutprojet" id="normeExcutprojet" placeholder="Norme excute projet*" required>
            <span class="focus-input100"></span>
          </div> 

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="indicesNRProjet" id="indicesNRProjet" placeholder="Indice NRP *" required>
            <span class="focus-input100"></span>
          </div> 

          
            <div class="row  justify-content-center" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Booleen PDR : </label></div>
           <div class="col-md-8">
            <select class="form-control" name="booleenPDR" id="booleenPDR">
              <option value="1">OUI</option>
              <option value="0">NON</option>
            </select>
          </div>
         </div


          <div class="wrap-input100 validate-input" >
            <input  type="file" name="SourcePDF" id="SourcePDF" value="SOurce PDF">
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
  $IdProjet= $row["IdProjet"]+1;
  echo "ID_PROJET est :".$IdProjet;
       
 

  $req_projet = "INSERT INTO `projet`(`IdProjet`, `TitreProjet`, `typeprojet`, `sujetprojet`, `textprojet`, `objectifprojet`, `specialiteprojet`, `champprojet`, `indicenrprojet`, `voteprojet`, `normeExcutprojet`, `indicesNRProjet`, `booleenPDR`, `SourcePDF`) 
  VALUES ( ".$IdProjet." ,'".$_POST['TitreProjet'] ."','". $_POST['typeprojet'] ."','". $_POST['sujetprojet'] ."','". $_POST['textprojet'] ."','". $_POST['objectifprojet'] ."','".$_POST['specialiteprojet'] ."','".$_POST['champprojet'] ."','".$_POST['indicenrprojet'] ."','". $_POST['voteprojet'] ."','". $_POST['normeExcutprojet'] ."','". $_POST['indicesNRProjet'] ."','". $_POST['booleenPDR'] ."',NULL)"; 
                
   mysqli_query($bdd,$req_projet);


   
           


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