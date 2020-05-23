<?php
include("database.php");
?>
<!DOCTYPE html>
<html>


<head>
    <title> Consultation projet </title>
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
<style>
input[type="text"]{

  background-color : #d1d1d1; 

}
</style>
</head>
<header>
 <div style="background: #f2f2f2;"> 
<?php  
include "MenuDesign.php";
?>
</div>
</header>
<body>


<?php
if (isset($_GET['id'])) 

{

$idd=$_GET['id'];


 $sql = "DELETE FROM distruberprojet  WHERE idprojet=".$idd."";
 mysqli_query($bdd,$sql);


 $sql = "DELETE FROM projet  WHERE IdProjet=".$idd."";
 mysqli_query($bdd,$sql);


}

?>




    <div class="container-main100">
      <div class="wrap-main-body">
	 <div align = "right">
<form method="post">
<label>Rechercher</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>
</div>
<?php

$con = new PDO("mysql:host=localhost;dbname=bdpfe",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `projet` WHERE TitreProjet LIKE '%$str%'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{ 
		header("Refresh:0; url=Consultation-projet1A.php?Search=$row->IdProjet");

		?>
		

		</table>
<?php 
	}
		
		
		else{
			echo "Projet n'existe pas";
		}


}

?>

<div class="container">
<div class="row justify-content-center">

<table class="table" data-search="true"  data-pagination="true">
 <thead>
   <tr>
     <th>ID Projet</th>
     <th>Titre de projet </th>
     <th>Nom d'exécuteur</th>
   
   </tr>


 </thead> 
 
 <?php  

$results_per_page = 10;
$sql1 = "SELECT * FROM projet INNER JOIN distruberprojet ON projet.IdProjet = distruberprojet.idprojet";
$result1 = mysqli_query($bdd,$sql1);
$number_of_results = mysqli_num_rows($result1);
$number_of_pages = ceil($number_of_results/$results_per_page);
 

if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
$this_page_first_result = ($page-1)*$results_per_page;

$sql = "SELECT * FROM projet INNER JOIN distruberprojet ON projet.IdProjet = distruberprojet.idprojet LIMIT " . $this_page_first_result . "," .  $results_per_page;"";
$result = mysqli_query($bdd,$sql);

while ( $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ) {  ?> 

<?php  
$iduser00=1;
//$sql0 = "SELECT NomExcute FROM distruberprojet WHERE iduser =".$iduser00;  
$sql0 = "SELECT NomExcute FROM distruberprojet ";  
  $result0 = mysqli_query($bdd,$sql0);
  $row0 = mysqli_fetch_array($result0,MYSQLI_ASSOC);      
  $NomExcute= $row0["NomExcute"];
  
?>


<tr>
<td id="IdProjet"><?php echo $row["IdProjet"];  ?></td>
<td id="TitreProjet"><?php echo $row["TitreProjet"];  ?></td>
<td id="NomExcute">


<?php if($row["NomExcute"]==NULL){echo "Admin";}
      else {echo $row["NomExcute"] ;}

 ?>




</td>

</tr>

<?php  
}
?>
 

</table>
<?php 
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a class="btn btn-info" href="Consultation-projetA.php?page=' . $page . '">' . $page . '</a> ';
}
?>
</div>
</div>


</div>
</div>





 <!--===============================================================================================-->
<script src="./vendor/bootstrap/js/bootstrap.js"></script>
<script src="./js/main.js"></script>

</body>
</html>