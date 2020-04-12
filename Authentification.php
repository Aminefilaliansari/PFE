<!DOCTYPE html>
<html>
<head>
     <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->



        <title> Authentification </title>
</head>
<body>




<!-- Creation du Formualire -->

<div>
<form method="POST">


  <div class="limiter">
    <div class="container-main100">
      <div class="wrap-main100">
        <form class="main100-form validate-form" method="POST">
          <span class="main100-form-title p-b-26">
            Authentification
          </span>
       

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="email" id="email" placeholder="Email" required>
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="wrap-input100 validate-input" name="pass" id="pass">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="pass" placeholder="Mot de passe" required>
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="container-main100-form-btn">
            <div class="wrap-main100-form-btn">
              <div class="main100-form-bgbtn"></div>
              <button type="submit" class="main100-form-btn" name="submit">
                SE CONNECTER
              </button>
            </div>
          </div>

     
        </form>
      </div>
    </div>
  </div>
  
</form>
</div>







<?php



session_start();
   
     
        include("database.php");

if(isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['submit']) )
{
    $emailconnect = mysqli_real_escape_string($bdd,$_POST['email']);
    $passoriginal = mysqli_real_escape_string($bdd,$_POST['pass']); 
    
    if(!empty($emailconnect) && !empty($passoriginal))
    {
      
      
      
      $sql = "SELECT * FROM Clients WHERE email = '" . $emailconnect . "' ";
      $result = mysqli_query($bdd,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
      $count = mysqli_num_rows($result);
      
      
        
      if($count == 1) 
      {
         if(password_verify($passoriginal, $row['pass']))
                {
                     $_SESSION['email'] = $row['email'];
                     $_SESSION['id'] = $row['Code_client'];
                     $_SESSION['prenom'] = $row['prenom'];

                     

                     header('Location: index.php?id='.$_SESSION['id'].'');
                     exit;
                }
                else
                {
                    echo '<div align=center ><font color=red> Mot de passe n\'est pas valide </font> </div>';
                }
                
        }
        else
        {
            $erreur = "L email ou le mot de passe est invalide";
            echo "<div class='alert alert-danger' role='alert'> ".$erreur."</div>";
        }
    }
    else
    {
        $erreur = "Veuillez remplir tous les champs ! ";
        echo "<div class='alert alert-danger ' role='alert'> ".$erreur."</div>";
    }
}

?>



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

