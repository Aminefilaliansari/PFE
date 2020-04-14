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
      <div class="wrap-main-body">

<form method="POST">

 <span class="main100-form-title p-b-26">
            Ajouter un projet
          </span>


           <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="Titre" id="Titre" placeholder="Titre de projet *" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="Descrip" id="Descrip" placeholder="Description *"  required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="Budget" id="Budget" placeholder="Budget *" required>
            <span class="focus-input100"></span>
          </div>





		<div class="container-main-form-btn" style=" padding-top: 60px;">
            <div class="wrap-main100-form-btn">
              <div class="main100-form-bgbtn"></div>
              <button type="submit" class="main100-form-btn" name="Valider">
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
  
  if (isset($_POST['Titre']) && ($_POST['Descrip']) && ($_POST['Budget'])  ) 

  {
    

  $req = "INSERT INTO Projet ( TitreProjet , Description , Budget ) VALUES ('" . $_POST['Titre'] . "' , '" . $_POST['Descrip'] . "' , '" . $_POST['Budget'] .  " ') ";
                
   mysqli_query($bdd,$req);
           

   echo  "<p style='color:green;text-align:center;'>Le produit est ajouteé avec succès </p>";
  }
  
  
  ?>





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