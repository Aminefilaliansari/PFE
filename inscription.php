<!DOCTYPE html>
<?php include('database.php') ?>
<html>
<head>
		<title> Inscription agent </title>
		     <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
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

<form method="POST" action="Function-inscription.php">

 

           <div class="wrap-input100 validate-input" >
		   <label align="right">Id Agence :</label>
            <input class="input100" type="text" name="id" id="" placeholder="Id Agence *" required>
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
		  <label align="right">Mail :</label>
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
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>	

</body>
</html>