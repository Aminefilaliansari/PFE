<!DOCTYPE html>
<?php include('database.php') ?>
<html>
<head>
		<title> Inscription </title>
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
        <script>
function choix(sw) {
  var c;
  if (sw == 0) {
    c = "admin_ins.php"
  } else  {
    c = "user_ins.php"
  }
  document.getElementById('fr').action = c;
}
</script>

</head>
<header>
 <div style="background: #f2f2f2;"> 

<?php  
include "MenuDesign.php";

?>



</div>
</header>
</header>
<body>

<div style="background: #f2f2f2;"> 
  

  <div class="limiter">
    <br>
    <br>
  <center><h1 >INSCRIPTION</h1></center>
  </div>
    <div class="container-main100">
	
    	<div class="wrap-main-body1">
	

<form id="fr" method="POST" action="">
<h5>Vous êtes :</h5>
  <br>

           <div class="wrap-input100 validate-input" >
		  
             <input onclick="choix(0)" type="radio" id="admin" name="type" value="admin" >
			<label for="admin" >Un administrateur</label><br>
			<input type="radio" id="utilisateur" name="type" value="admin">
			<label onclick="choix(1)" for="utilisateur">Une agence ou une établissement</label> 
            <span class="focus-input100"></span>
          </div>


		<div class="container-main-form-btn" style=" padding-top: 60px;">
            <div class="wrap-main100-form-btn">
              <div class="main100-form-bgbtn"></div>
              <button type="submit" class="main100-form-btn" name="Valider">
                Suivant
              </button>
			  
            </div>
          </div>



</form>

</div>
</div>
</div>

 <!--===============================================================================================-->
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