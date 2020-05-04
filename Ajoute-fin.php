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




  
<!--  TABLE financeprojet  -->
 
 <div class="row  justify-content-center" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Contribution Etat : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="Contrib_Etat" id="Contrib_Etat" placeholder="Contribution Etat *" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>


           <div class="row  justify-content-center" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Contribution Etablissement : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="Contrib_Etabli" id="Contrib_Etabli" placeholder="Contribution Etablissement *" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>




           <div class="row  justify-content-center" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>Nbr Etablissement: </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="NbrEtab" id="NbrEtab" placeholder="Nbr Etablissement *" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>




           <div class="row  justify-content-center" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>DurAdmin : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="durAdmin" id="durAdmin" placeholder="DurAdmin *" required>
              <span class="focus-input100"></span>
          </div>
          </div>
          </div>



           <div class="row  justify-content-center" >
           <div class="col-md-3" style="text-align: center;margin-top: 9px;">
           <label>DurEtablissement : </label></div>
           <div class="col-md-8">
              <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="durEtabli" id="durEtabli" placeholder="DurEtablissement *" required>
              <span class="focus-input100"></span>
          </div>
          </div>
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
  //echo "ID_PROJET est :".$IdProjet;
       
 

  $req_fin = "INSERT INTO `financeprojet`(`idprojet`, `Contrib_Etat`, `Contrib_Etabli`, `NbrEtab`, `durAdmin`, `durEtabli`)
   VALUES (".$IdProjet.",'". $_POST['Contrib_Etat'] ."','". $_POST['Contrib_Etabli'] ."','". $_POST['NbrEtab'] ."','". $_POST['durAdmin'] ."','". $_POST['durEtabli'] ."')";

  echo "Req-fin :".$req_fin;           
  mysqli_query($bdd,$req_fin);



   
           


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