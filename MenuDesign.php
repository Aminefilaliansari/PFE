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




<div class="all">
<div class="lefter" onclick="location.href = 'Ajoute-user.php';">
  <div class="text">Ajouter un utilisateur</div>
</div>
<div class="left" onclick="location.href = 'Consultation-projet.php';">
  <div class="text">Consultation Projet</div>
</div>
<div class="center" onclick="location.href = '#';">
  <div class="explainer"><span> MENU </br><?php if (isset($_SESSION['nom'])) {
                                        echo ''.$_SESSION['nom'].''; 
                                        } else {echo "";} ?></span></div>
  <div class="text" onclick="MyFunction();" ></div>
  </div>
<div class="right" onclick="location.href = 'Ajoute-projet.php';">
  <div class="text">Ajouter un projet</div>
</div>


<div class="righter" onclick="location.href = 'Etat_avancement.php';">
  <div class="text"> Etat d'avancement </div>
</div>




</div>





</body>
</html>