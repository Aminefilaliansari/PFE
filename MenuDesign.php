<?php session_start();?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
<title></title>
 <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">   

 <link rel="stylesheet" type="text/css" href="./css/menustyle.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400i|Pacifico|Parisienne|Sacramento" rel="stylesheet">

</head>
<body>



<center>
<?php if($_SESSION['role']=='Admin'){?>
<div class="all">
<div class="lefter" onclick="location.href = 'user_ajout.php';">
  <div class="text">Ajouter un user</div>
</div>
<div class="left" onclick="location.href = 'Consultation-projet.php';">
  <div class="text">Consultation Projet</div>
</div>
<div class="center" onclick="location.href = 'Accueil.php';">
  <div class="explainer"><span> MENU </br><?php if (isset($_SESSION['nom'])) {
                                        echo ''.$_SESSION['nom'].''; 
                                        } else {echo "";} ?></span></div>
  <div class="text" onclick="MyFunction();" >Accueil</div>
  </div>
<div class="right" onclick="location.href = 'Ajoute-projet.php';">
  <div class="text">Ajouter un projet</div>
</div>


<div class="righter" onclick="location.href = 'User-projet.php';">
  <div class="text"> Etat d'avancement </div>
</div>




</div>
                                      <?php }else{ ?>

                                        <div class="all">

<div class="left" onclick="location.href = 'Consultation-projetA.php';">
  <div class="text">Consultation Projet</div>
</div>
<div class="center" onclick="location.href = 'Accueil.php';">
  <div class="explainer"><span> MENU </br><?php if (isset($_SESSION['nom'])) {
                                        echo ''.$_SESSION['nom'].''; 
                                        } else {echo "";} ?></span></div>
  <div class="text" onclick="MyFunction();" >Accueil</div>
  </div>



<div class="righter" onclick="location.href = 'User-projet.php';">
  <div class="text"> Etat d'avancement </div>
</div>




</div>

                                     <?php } ?>



</center>
<a href="Deconnected.php" style="float: right;margin-right: 106px;">Déconnextion </a>

</body>
</html>