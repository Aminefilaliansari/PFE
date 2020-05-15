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



</div>
</header>
<body>
<?php 

//echo "id : ".$id;
	$sql = "SELECT * FROM `avancementprojet` WHERE idprojet = $id";
	$rs = mysqli_query($bdd, $sql);
 
	$fetchRow = mysqli_fetch_assoc($rs);
?> 


 <?php





$pageETAT = $_GET['Etat'];
//echo " ETAT :: ".$pageETAT;
$ETAT=$pageETAT;


if (isset($_POST['Valider'])  ) 
{

 $req_etat="

 UPDATE `avancementprojet` SET `Etat`='".$_POST['etat']."',`Commentaire`='".$_POST['commentaire']."' WHERE idprojet= $ETAT

 ";

 // echo "Req_ETAT est :".$req_etat;
  mysqli_query($bdd,$req_etat);


echo "<div class='alert alert-success' role='alert'>
  Etat est modifier avec succèe
</div>";


header('Location:User-projet.php');
exit();


}


?>

  <div class="limiter">
    <div class="container-main100">
      <div class="wrap-main-body">

<form method="POST">

 

         
		   <label align="right">Identifiant du projet :</label>
            <input class="input100" type="text" name="id" id="" value="<?php echo $fetchRow['idprojet']?>" readonly="readonly">
      
         

          
		  <label align="right">Nom du projet :</label>
            <input class="input100" type="text" name="nom" id="" value="<?php echo $fetchRow['Label']?>"  readonly="readonly">
         

         
		  <label align="right">Etat d'avancement du projet en % : </label>

<input type="number"class="form-control" placeholder="  %"   id="etat" name="etat" min="10" max="100" value="<?php  echo $fetchRow['Etat'];  ?>">





    
		  
		  <label align="right">Commentaire / Remarque :</label>
		  <br>
            <textarea onclick="disable(2)" class="form-control" cols="53" rows="3" placeholder="Commentaire"  name="commentaire" id="comment" ><?php echo $fetchRow['Commentaire']?></textarea>
          
        

      

          


          
          


		<div class="container-main-form-btn" style=" padding-top: 30px;">
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