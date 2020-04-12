<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
<title></title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway:200'><link rel="stylesheet" href="./css/menustyle.css">
 <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>

    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      <!-- Bootstrap  -->
      <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css">

      <!-- Theme Style -->
      <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

      <!-- Responsive -->
      <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

      <!-- Colors -->
      <link rel="stylesheet" type="text/css" href="stylesheets/colors/color3.css" id="color3">

      <!-- Animation Style -->
      <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">


      <!-- Animation headline Style -->
      <link rel="stylesheet" type="text/css" href="stylesheets/headline.css">

      <!-- REVOLUTION LAYERS STYLES -->
      <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
      <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

      <!-- Favicon and touch icons  -->
 
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400i|Pacifico|Parisienne|Sacramento" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="all">
<div class="lefter" onclick="location.href = 'Panier.php';">
  <div class="text"></div>
</div>
<div class="left" onclick="location.href = 'Add-Produit.php';">
  <div class="text"></div>
</div>
<div class="center" onclick="location.href = 'crud.php';">
  <div class="explainer"><span> MENU </br><?php if (isset($_SESSION['prenom'])) {
                                        echo ''.$_SESSION['prenom'].''; 
                                        } else {echo "";} ?></span></div>
  <div class="text" onclick="MyFunction();" ></div>
  </div>
<div class="right" onclick="location.href = '';">
  <div class="text" href="/*.php"></div>
</div>


<div class="righter" onclick="location.href = '*.php';">
  <div class="text"> </div>
</div>




</div>


  <script  src="./js/mennuscript.js"></script>


</body>
</html>