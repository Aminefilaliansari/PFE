<!DOCTYPE html>
<?php include('database.php') ?>
<html>
<head>
		<title> Inscription agent </title>
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

<form method="POST" action="Function-inscription.php">

 

           <div class="wrap-input100 validate-input" >
		   <label align="right">Nom :</label>
            <input class="input100" type="text" name="id" id="" placeholder="Nom *" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
		  <label align="right">Telephone :</label>
            <input class="input100" type="text" name="tel" id="" placeholder="Tel *" >
            <span class="focus-input100"></span>
          </div>
		  
		  <div class="wrap-input100 validate-input" >
		  <label align="right">Adresse :</label>
            <input class="input100" type="text" name="adr" id="" placeholder="Adresse *" >
            <span class="focus-input100"></span>
          </div>
		  
		  <div class="wrap-input100 validate-input" >
		  <label align="right">EMail :</label>
            <input class="input100" type="email" name="mail" id="" placeholder="Mail *" >
            <span class="focus-input100"></span>
          </div>
		  
		  <div class="wrap-input100 validate-input" >
		  <label align="right">Password :</label>
            <input class="input100" type="password" name="pass" id="" placeholder="Password *" >
            <span class="focus-input100"></span>
          </div>

      


		<div class="container-main-form-btn" style=" padding-top: 60px;">
            <div class="wrap-main100-form-btn">
              <div class="main100-form-bgbtn"></div>
              <button type="submit" class="main100-form-btn" name="Valider">
                Enregister
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