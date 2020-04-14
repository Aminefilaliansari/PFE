<!DOCTYPE html>
<?php include('database.php') ?>
<html>
<head>
		<title> Suivi du projet </title>
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

<form method="POST" action="Function-insert.php">

 

           <div class="wrap-input100 validate-input" >
		   <label align="right">Identifiant du projet :</label>
            <input class="input100" type="text" name="id" id="" placeholder="Identifiant Projet *" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
		  <label align="right">Nom du projet :</label>
            <input class="input100" type="text" name="nom" id="" placeholder="Nom Projet *"  required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
		  <label align="right">Etat d'avancement du projet : </label>
            <div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="radio" name="etat" value="25"> 25%
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="etat" value="50" id="option2"> 50%
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="etat" value="75" id="option3"> 75%
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="etat" value="100" id="option3"> 100%
  </label>
</div>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
		  <label align="right">Autre :</label>
            <input class="input100" type="text" name="autre" id="" placeholder="Autre" >
            <span class="focus-input100"></span>
          </div>
		  
		  <div class="wrap-input100 validate-input" >
		  <label align="right">Commentaire / Remarque :</label>
		  <br>
            <textarea placeholder="Commentaire" cols="53" rows="3" name="commentaire"></textarea>
            <span class="focus-input100"></span>
          </div>

      

          


          
          


		<div class="container-main-form-btn" style=" padding-top: 60px;">
            <div class="wrap-main100-form-btn">
              <div class="main100-form-bgbtn"></div>
              <button type="submit" class="main100-form-btn" name="Valider">
                Envoyer
              </button>
            </div>
          </div>



</form>

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