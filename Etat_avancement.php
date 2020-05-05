<!DOCTYPE html>
<?php include('database.php') ?>
<html>
<head>
		<title> Etat d'avancement </title>
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
$id = intval($_GET['Etat']);

?>
<script>
function disable(c) {
  if (c == 0) {
  document.getElementById('autre').setAttribute("readonly", "readonly");
  } else if (c == 1) {
   $(':radio:not(:checked)').attr('disabled', true);

  } else if (c == 2) {
  document.getElementById('autre').setAttribute("readonly", "readonly");
   $(':radio:not(:checked)').attr('disabled', true);

  }
}
</script>
</div>
</header>
<body>
<?php 

//echo "id : ".$id;
	$sql = "SELECT * FROM `avancementprojet` WHERE idprojet = $id";
	$rs = mysqli_query($bdd, $sql);
 
	$fetchRow = mysqli_fetch_assoc($rs);
?> 

  <div class="limiter">
    <div class="container-main100">
      <div class="wrap-main-body">

<form method="POST" action="Function-update.php">

 

           <div class="wrap-input100 validate-input" >
		   <label align="right">Identifiant du projet :</label>
            <input class="input100" type="text" name="id" id="" value="<?php echo $fetchRow['idprojet']?>" readonly="readonly">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
		  <label align="right">Nom du projet :</label>
            <input class="input100" type="text" name="nom" id="" value="<?php echo $fetchRow['Label']?>"  readonly="readonly">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" >
		  <label align="right">Etat d'avancement du projet : </label>
            <div class="btn-group" data-toggle="buttons">
  <label onclick="disable(0)" class="btn btn-primary active">
    <input onclick="disable(0)" type="radio" name="etat" value="25" id="rad1" <?php if($fetchRow['Etat'] == 25) print "checked";?> > 25%
  </label>
  <label onclick="disable(0)" class="btn btn-primary">
    <input onclick="disable(0)" type="radio" name="etat" value="50" id="rad2" <?php if($fetchRow['Etat'] == 50) print "checked";?>> 50%
  </label>
  <label onclick="disable(0)" class="btn btn-primary">
    <input onclick="disable(0)" type="radio" name="etat" value="75" id="rad3" <?php if($fetchRow['Etat'] == 75) print "checked";?>> 75%
  </label>
  <label onclick="disable(0)" class="btn btn-primary">
    <input onclick="disable(0)" type="radio" name="etat" value="100" id="rad4" <?php if($fetchRow['Etat'] == 100) print "checked";?>> 100%
  </label>
</div>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" style="display:none;" >
		  <label align="right">Autre :</label>
            <input onclick="disable(1)" class="input100" type="text" name="autre" id="autre" value="<?php echo $fetchRow['Etat']?>">
            <span class="focus-input100"></span>
          </div>
		  
		  <div class="wrap-input100 validate-input" >
		  <label align="right">Commentaire / Remarque :</label>
		  <br>
            <textarea onclick="disable(2)" cols="53" rows="3" placeholder="Commentaire"  name="commentaire" id="comment" ><?php echo $fetchRow['Commentaire']?></textarea>
            <span class="focus-input100"></span>
          </div>

      

          


          
          


		<div class="container-main-form-btn" style=" padding-top: 60px;">
            <div class="wrap-main100-form-btn">
              <div class="main100-form-bgbtn"></div>
              <button type="submit" class="main100-form-btn" name="Valider">
                Enregistrer les modifications
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