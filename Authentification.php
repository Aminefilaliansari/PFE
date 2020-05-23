<!DOCTYPE html>
<html>
<head>
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



        <title> Authentification </title>
</head>
<body>

<?php

session_start();   
     
        include("database.php");

if( isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['submit']) && isset($_POST['role']) )
{
    $emailconnect = $_POST['email'];
    $passoriginal = $_POST['pass']; 
    $role = $_POST['role']; 
    
    if(!empty($emailconnect) && !empty($passoriginal))
    {
      
       
      if ($role =="Agence" || $role=="Etablissement") {
        $sql = "SELECT * FROM user WHERE email = '" . $emailconnect . "' ";
        
      }
      else {
      $sql = "SELECT * FROM admin WHERE email = '" . $emailconnect . "' ";
      }



      $result = mysqli_query($bdd,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
      $count = mysqli_num_rows($result);
      
      
        
      if($count == 1) 
      {

         if($passoriginal == $row['Password'])
                {
                     $_SESSION['email'] = $row['email'];
                     $_SESSION['nom'] = $row['Nom'];

                     $_SESSION['role'] = $role;

      if ($role =="Agence" || $role=="Etablissement") { $_SESSION['id'] = $row['IdUser'];  }
      else { $_SESSION['id'] = $row['IdAdmin']; }                             
                     

                     header('Location: Accueil.php?id='.$_SESSION['id'].'');
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




<!-- Creation du Formualire -->

<div style="margin-top: 10%;">
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

          <div class="wrap-input100 validate-input">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="pass" placeholder="Mot de passe" required>
            <span class="focus-input100" data-placeholder=""></span>
          </div>


            
          <span class="label-input100">Role</span>
          <div>
            <select class="selection-2" name="role" id="role">
              <option>Admin</option>
              <option>Agence</option>
              <option>Etablissement</option>
            </select>
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






 <!--===============================================================================================-->
<script src="./vendor/bootstrap/js/bootstrap.js"></script>
<script src="./js/main.js"></script>
</body>



</html>

