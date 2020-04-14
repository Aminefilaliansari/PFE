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
      <div class="wrap-main550">

<form method="POST">

 <span class="main100-form-title p-b-26">
            AJOUTER un projet
          </span>


           <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="" id="" placeholder="Région *" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="" id="" placeholder="Donnée 02 *"  required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="" id="" placeholder="Donnée 03 *" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="" id="" placeholder="Donnée 04" required>
            <span class="focus-input100"></span>
          </div>

      

          <div class="wrap-input100 ">
					<span class="label-input100">Option</span>
					<div>
						<select class="selection-2" name="" id="Option">
							<option>Option 01</option>
							<option>Option 02</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>




          <div class=" validate-input" >	
          	<label for="image" style="color: #7c7d7f;"> Donnée upload </label>  <br>
          	<input type="file" name="" id="" placeholder="Image"/>
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




 <!--===============================================================================================-->
<script src="./vendor/bootstrap/js/bootstrap.js"></script>
<script src="./js/main.js"></script>

</body>
</html>