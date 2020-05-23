<!DOCTYPE html>
<?php include('database.php') ?>
<html>
<head>
		<title> Ajout une agence ou un établissement </title>
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

<?php  
include "MenuDesign.php";
?>




 <div style="background: #f2f2f2;"> 
 <style>
h5 {text-align: center;}
h5 {font-size: 25px}
</style>
 <br>

<h5 >Ajouter une agence ou un établissement </ :</h5>
<br>
<br>


</div>
</header>
<body>


  <div class="limiter">
    <div class="container-main100">
      <div class="wrap-main-body">

<form method="POST" action="insert-user.php">

  <br>
 
<h6>Voulez-vous ajouter  :</h6>
<br>
<div class="wrap-input100 validate-input" >
<input type='radio' name="type" id="Agence" value="Agence"/>
<label for="agence" >Une agence</label><br>
<input type='radio' name="type" id="Etablissement" value="Etablissement" />
<label for="etablissement" >Un établissement</label><br>
 </div>
<div class="wrap-input100 validate-input" >
		   
		   <label align="right">Nom :</label>
            <input class="input100" type="text" name="nom" id="" placeholder="Nom *" required>
            <span class="focus-input100"></span>
          </div>
		  
<div class="wrap-input100 validate-input" >
		  <label align="right">Adresse :</label>
            <input class="input100" type="text" name="adresse" id="" placeholder="Adresse *"  required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
      <label align="right">Tel :</label>
            <input class="input100" type="text" name="tel" id="" placeholder="Tel *"  required>
            <span class="focus-input100"></span>
          </div>
		  
          <div class="wrap-input100 validate-input" >
		  <label align="right">Email :</label>
            <input class="input100" type="mail" name="mail" id="" placeholder="Email *"  required>
            <span class="focus-input100"></span>
          </div>


         <div class="wrap-input100 validate-input" >
      <label align="right">Mot de passe  :</label>
            <input class="input100" type="password" name="pass" id="" placeholder="mot de passe *" required>
            <span class="focus-input100"></span>
          </div>
            <div class="wrap-input100 validate-input" >
      <label align="right">Confirmer le mot de passe:</label>
            <input class="input100" type="password" name="pass" id="" placeholder="mot de passe *" required>
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
<script src="./vendor/bootstrap/js/bootstrap.js"></script>
<script src="./js/main.js"></script>

</body>
</html>